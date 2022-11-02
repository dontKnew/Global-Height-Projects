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

$userid = 10007;
$fetch_all = false;
$limit = 30;
$source_site = 'alearningaday';
$max_pages = 100;
$base_url = 'https://alearningaday.blog';
$crawled_urls = $exists = array();
$db_all_urls = $objDb->select('SELECT * FROM crawled_urls WHERE source_site = \'' . $source_site . '\'');
$db_urls = [];
foreach($db_all_urls as $val) {
    $db_urls[$val['url']] = $val['crawl_status'];
}

$objDb->update('SET session wait_timeout=28800');
$objDb->update('SET GLOBAL max_allowed_packet=1073741824;');

$page = 1;
$done = false;

while($page > 0 && $page <= $max_pages) {
    echo "\n\npage : {$page}\n\n";
    $url = $page == 1 ? $base_url : "{$base_url}/page/{$page}/";
    $dom = new DOMDocument('1.0');
    @$dom->loadHTMLFile("{$url}");

    $finder = new DomXPath($dom);

    $articles = $finder->query("//article");

    if(count($articles)) {
        $new_articles = array();

        for($i=1; $i<=count($articles); $i++) {

            $titles = $finder->query("//article[position()=$i]/header/h2/a");

            if(!isset($titles[0])) {
                continue;
            }

            $url = $titles[0]->getAttribute('href');

            if(array_key_exists($url, $db_urls) && in_array($db_urls[$url], array('success', 'failed'))) {
                $done = true;
                break;
//                 continue;
            }

            $new_articles[$url]['title'] = $titles[0]->nodeValue;

            $times = $finder->query("//article[position()=$i]//footer//time[contains(@class, 'entry-date')]");
            $new_articles[$url]['datetime_text'] = $times[0]->nodeValue;

            $categories = $finder->query("//article[position()=$i]/footer/span[contains(@class, 'cat-links')]/a");
            $new_articles[$url]['category'] = $categories[0]->nodeValue;

            $contents = $finder->query("//article[position()=$i]/div[contains(@class, 'entry-content')]");
            $new_articles[$url]['content'] = innerHTML($contents[0]);
        }

        if(count($new_articles)) {
            $ins_query = "INSERT INTO articles (user_id, category, source_site, title, content, url_slug,
                            orig_url, datetime_text, article_date, date_create) VALUES ";
            foreach($new_articles as $url => $article) {
                $article_date = date('Y-m-d', strtotime($article['datetime_text']));
                $url_slug = trim(preg_replace('/https:\/\/alearningaday\.blog\/(\d+)\/(\d+)\/(\d+)\//', '', $url), '/');
                $ins_query .= "(
                                {$userid},
                                '" . trim(addslashes($article['category'])) . "',
                                '{$source_site}',
                                '" . trim(addslashes($article['title'])) . "',
                                '" . trim(addslashes($article['content'])) . "',
                                '" . trim(addslashes($url_slug)) . "',
                                '" . trim($url) . "',
                                '" . trim(addslashes($article['datetime_text'])) . "',
                                '" . $article_date . "',
                                '" . date('Y-m-d H:i:s') . "'
                            ),";
                echo "{$url}\n";
                $objDb->insert('INSERT INTO crawled_urls (source_site, url, crawl_status, date_create)
                                VALUES (\'' . $source_site . '\', \'' . $url . '\', \'success\', \'' . date('Y-m-d H:i:s') . '\')');
            }
            $ins_query = trim($ins_query, ',');
            $objDb->insert($ins_query);
        }
        sleep(1);
    }

    $page++;
//     $divs = $finder->query("//div[contains(@class, 'Pagination-right')]//a");
//     if(isset($divs[0]) && !empty($divs[0]->getAttribute('href')) && !$done)
//     {
//         $page++;
//     }
//     else {
//         $page = 0;
//     }
}

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
