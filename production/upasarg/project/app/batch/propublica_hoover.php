<?php

require_once dirname(__FILE__).'/global.php';

$startTime = time();
$dryRun = true;
$silent = false;
$strOp = '';

// Check and process command arguments
foreach($argv as $arg)
{
    if(preg_match('/^(-h|--help|--h|-help)$/i', $arg))
        printHelp();
    else if(preg_match('/^(--dryrun|-d)=(0|1)$/i', $arg, $arrMatch))
    	$dryRun = $arrMatch[2];
    else if(preg_match('/^(--silent|-s)=(0|1)$/i', $arg, $arrMatch))
        $silent = $arrMatch[2];
    unset($arrMatch);
}

$silent = $dryRun ? false : $silent;

if($dryRun)
    echo "\nRun Mode : Dry Run...\n\nCRON SCRIPT " . basename(__FILE__) . " STARTED : " . date('Y-m-d h:i:s A ') . "\n\n";
else
    echo "CRON SCRIPT " . basename(__FILE__) . " STARTED : " . date('Y-m-d h:i:s A ') . "\n\n";

require_once 'RecursiveDOMIterator.class.php';

$userid = 10741;
$fetch_all = false;
$limit_per_category = 100;
$source_site = 'propublica';
$base_url = 'https://www.propublica.org/topics';
$db_urls = $objDb->select('SELECT * FROM crawled_urls WHERE source_site = \'' . $source_site . '\'');
$crawled_urls = $new_articles = $exists = array();

$topics = array(
                    'biden-administration',
                    'civil-rights',
                    'criminal-justice',
                    'debt',
                    'education',
                    'environment',
                    'health-care',
                    'immigration',
                    'military',
                    'labor',
                    'politics',
                    'regulation',
                    'sex-and-gender',
                    'trump-administration',
                );

$dom = new DOMDocument('1.0');

foreach($topics as $topic) {
    $link_cnt = 0;
    echo "\nCollecting article links for {$topic}\n-------------------\n\n";
    @$dom->loadHTMLFile("{$base_url}/{$topic}");

    $h4s = $dom->getElementsByTagName('h4');

    foreach($h4s as $h4){
        $anchor = $h4->getElementsByTagName('a')[0];
        if(!empty($anchor)) {
            $href = $anchor->getAttribute('href');
            if(preg_match('/\/article\//', $href) && !in_array($href, $crawled_urls)) {
                $link_cnt++;
                $crawled_urls[] = $href;
                echo "$href\n";
                if(!$fetch_all && $link_cnt >= $limit_per_category) {
                    break;
                }
            }
        }
    }
    echo "\nTotal links fetched : {$link_cnt}\n";
    sleep(1);
}

echo "\nRemoving already fetched links\n";
foreach($db_urls as $info) {
    if(in_array($info['url'], $crawled_urls) && in_array($info['crawl_status'], array('success', 'failed'))) {
        if (($key = array_search($info['url'], $crawled_urls)) !== false) {
            echo "{$crawled_urls[$key]}\n";
            unset($crawled_urls[$key]);
        }
    }
    else if(in_array($info['url'], $crawled_urls)) {
        $exists[] = $info['url'];
    }
}

echo "\nTotal articles to fetch : " . count($crawled_urls) . "\n\n";

if(count($crawled_urls)) {
    $ins = false;
    $query = 'INSERT INTO crawled_urls (source_site, url, date_create) VALUES ';
    foreach($crawled_urls as $url) {
        if(!in_array($url, $exists)) {
            $ins = true;
            $query .= "('{$source_site}', '{$url}', '" . date('Y-m-d H:i:s') . "'),";
        }
    }
    $query = trim($query, ',');
    if($ins) {
        $objDb->insert($query);
    }

// $crawled_urls = array('https://www.propublica.org/article/after-a-year-of-investigation-the-border-patrol-has-little-to-say-about-agents-misogynistic-and-racist-facebook-group');

    foreach($crawled_urls as $url) {
        $new_articles = $content = array();

        @$dom->loadHTMLFile("{$url}");

        $finder = new DomXPath($dom);
        $h1s = $finder->query("//h1[contains(@class, 'opener__hed')]");
        foreach($h1s as $node) {
            $new_articles[$url]['title'] = $node->textContent;
        }
        if(empty($new_articles[$url]['title'])) {
            $h2s = $finder->query("//h2[contains(@class, 'hed')]");
            foreach($h2s as $node) {
                $new_articles[$url]['title'] = $node->textContent;
                if(!empty($node->textContent)) {
                    break;
                }
            }
        }
        $deks = $finder->query("//p[contains(@class, 'dek')]");
        foreach($deks as $node) {
            $new_articles[$url]['sub_title'] = $node->textContent;
            if(!empty($node->textContent)) {
                break;
            }
        }
        if(empty($new_articles[$url]['sub_title'])) {
            $deks = $finder->query("//h2[contains(@class, 'opener__dek')]");
            foreach($deks as $node) {
                $new_articles[$url]['sub_title'] = $node->textContent;
            }
        }
        $imgs = $finder->query("//img[contains(@class, 'opener__art')]");
        foreach($imgs as $img) {
            $new_articles[$url]['img_path'] = $img->getAttribute('src');
        }
        if(empty($new_articles[$url]['img_path'])) {
            $expression = "//figure[@class='lead-art']//div"; 
            $nodes = $finder->query($expression);

            $imgSrcExpression = ".//img/@src";
            foreach($nodes as $node) {
                $imgNodes = $finder->query($imgSrcExpression, $node);
                if($imgNodes->length > 0) {
                    $new_articles[$url]['img_path'] = $imgNodes->item(0)->nodeValue;
                }
            }
        }
        $spans = $finder->query("//span[contains(@class, 'article-meta-1__byline')]");
        foreach($spans as $span) {
            $new_articles[$url]['author_credit'] = $span->textContent;
        }
        if(empty($new_articles[$url]['author_credit'])) {
            foreach ($finder->query('//p[@class="byline"]') as $ptag) {
                $new_articles[$url]['author_credit'] = $ptag->textContent;
                if(!empty($ptag->textContent)) {
                    break;
                }
            }
        }
        $times = $finder->query("//time[contains(@class, 'article-meta-1__pubdate')]");
        foreach($times as $time) {
            $new_articles[$url]['datetime_text'] = $time->textContent;
        }
        if(empty($new_articles[$url]['datetime_text'])) {
            foreach ($finder->query('//time[@class="timestamp"]') as $ptag) {
                $new_articles[$url]['datetime_text'] = $ptag->nodeValue;
                if(!empty($ptag->textContent)) {
                    break;
                }
            }
        }
        $anchors = $finder->query("//a[contains(@class, 'opener__topics-link')]");
        foreach($anchors as $anchor) {
            $new_articles[$url]['category'] = $anchor->textContent;
        }
//         showDOMNode($dom);
//         $new_articles[$url]['content'] = $GLOBALS['content'];

        $dit = new RecursiveIteratorIterator(
            new RecursiveDOMIterator($dom),
            RecursiveIteratorIterator::SELF_FIRST
        );

        $bodys = $finder->query("//div[contains(@class, 'article-body')]");
        foreach($bodys as $body) {
            foreach($body->childNodes as $cnode) {
                if(preg_match('/newsletter-txt-note/', innerHTML($cnode)) || preg_match('/newsletter-txt-note/', $cnode->nodeValue) || preg_match('/new FormRenderer\(/i', innerHTML($cnode)) || preg_match('/new FormRenderer\(/i', $cnode->nodeValue) || preg_match('/<aside\s+/i', innerHTML($cnode)) || preg_match('/<aside\s+/i', $cnode->nodeValue)) {
                    continue;
                }
                if(isset($cnode->tagName) && $cnode->tagName != 'aside') {
                    if ($cnode->tagName == 'p') {// on few pages P tags has child nodes too. Need to cover that issue
                        $new_articles[$url]['content'][] = "<p>{$cnode->nodeValue}</p>";
                    } else {
                        $new_articles[$url]['content'][] = innerHTML($cnode);
                    }
                }
            }
        }
        //
        $article_date = date('Y-m-d', strtotime($new_articles[$url]['datetime_text']));
        $url_slug = preg_replace('/https:\/\/www\.propublica\.org\/article\//', '', $url);
        $ins_query = "INSERT INTO articles (user_id, category, source_site, title, sub_title, content, url_slug,
                    orig_url, img_path, datetime_text, author_credit, article_date, date_create) VALUES ";
        $ins_query .= "(
                        {$userid},
                        '" . trim(addslashes($new_articles[$url]['category'])) . "',
                        '{$source_site}',
                        '" . trim(addslashes($new_articles[$url]['title'])) . "',
                        '" . trim(addslashes($new_articles[$url]['sub_title'])) . "',
                        '" . trim(addslashes(implode(' ', $new_articles[$url]['content']))) . "',
                        '" . trim(addslashes($url_slug)) . "',
                        '" . trim($url) . "',
                        '" . trim(addslashes($new_articles[$url]['img_path'])) . "',
                        '" . trim(addslashes($new_articles[$url]['datetime_text'])) . "',
                        '" . trim(addslashes($new_articles[$url]['author_credit'])) . "',
                        '" . $article_date . "',
                        '" . date('Y-m-d H:i:s') . "'
                    )";
        $objDb->insert($ins_query);
        $objDb->update('UPDATE crawled_urls
                        SET crawl_status = \'success\'
                        WHERE url = \'' . $url . '\'');
        echo "fetched : {$url}\n";
        sleep(2);
    }
}

// if(count($new_articles)) {
// //     $ins_query = "INSERT INTO articles (user_id, category, source_site, title, content, url_slug,
// //                     orig_url, img_path, datetime_text, author_credit, date_create) VALUES ";
//     foreach($new_articles as $url => $article) {
//         $article_date = date('Y-m-d', strtotime($article['datetime_text']));
//         $ins_query = "INSERT INTO articles (user_id, category, source_site, title, sub_title, content, url_slug,
//                     orig_url, img_path, datetime_text, author_credit, article_date, date_create) VALUES ";
//         $url_slug = preg_replace('/https:\/\/www\.propublica\.org\/article\//', '', $url);
//         $ins_query .= "(
//                         {$userid},
//                         '" . trim(addslashes($article['category'])) . "',
//                         '{$source_site}',
//                         '" . trim(addslashes($article['title'])) . "',
//                         '" . trim(addslashes($article['sub_title'])) . "',
//                         '" . trim(addslashes(implode(' ', $article['content']))) . "',
//                         '" . trim(addslashes($url_slug)) . "',
//                         '" . trim($url) . "',
//                         '" . trim(addslashes($article['img_path'])) . "',
//                         '" . trim(addslashes($article['datetime_text'])) . "',
//                         '" . trim(addslashes($article['author_credit'])) . "',
//                         '" . $article_date . "',
//                         '" . date('Y-m-d H:i:s') . "'
//                     ),";
//         $objDb->update('UPDATE crawled_urls
//                         SET crawl_status = \'success\'
//                         WHERE url = \'' . $url . '\'');
//         $ins_query = trim($ins_query, ',');
//         $objDb->insert($ins_query);
//     }
// 
// //     $objDb->insert($ins_query);
// }

function innerHTML($node) {
    return implode(array_map([$node->ownerDocument,"saveHTML"], 
                             iterator_to_array($node->childNodes)));
}

function printInfo($str)
{
	if(!$GLOBALS['silent'])
		echo $str;
}

function printHelp()
{
    echo "\n\nHelp...Help...Help...\n\n";
    exit;
}

$runTime = time() - $startTime;
echo "\n\n Time Taken : " . $runTime . '(' . round($runTime/60,3) . ') Seconds(Minutes)';
echo "\nCRON SCRIPT " . basename(__FILE__) . ' COMPLETED : ' . date('Y-m-d h:i:s A ') . "\n\n";
printInfo($strOp);

exit;
