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

$userid = 9680;
$fetch_all = false;
$limit = 30;
$source_site = 'oatmeal_comic';
$max_pages = 50;
$base_url = 'https://theoatmeal.com';
$crawled_urls = $exists = array();
$db_all_urls = $objDb->select('SELECT * FROM crawled_urls WHERE source_site = \'' . $source_site . '\'');
$db_urls = [];
foreach($db_all_urls as $val) {
    $db_urls[$val['url']] = $val['crawl_status'];
}

$page = 1;
$done = false;

while($page > 0 && $page <= $max_pages) {

    $new_articles = array();
    echo "\n\npage : {$page}\n\n";
    $page_url = $page == 1 ? "{$base_url}/comics" : "{$base_url}/c2index/page:{$page}";
    $dom = new DOMDocument('1.0');
    @$dom->loadHTMLFile("{$page_url}");

    $finder = new DomXPath($dom);

    $comics = $finder->query("//div[@id='comics_list']//a");
    $images = $finder->query("//div[@id='comics_list']//img");

    if(count($comics)) {
        $i = 0;
        foreach($comics as $comic) {
            $url = $comic->getAttribute('href');
            if(!preg_match('/^\/comics\//', $url)) {
                continue;
            }
            $url = "{$base_url}{$url}";
            $img_src = $images[$i]->getAttribute('src');
            $i++;

            if(array_key_exists($url, $db_urls) && in_array($db_urls[$url], array('success', 'failed'))) {
//                 $done = true;
//                 break;
continue;
            }

            echo "fetching : {$url}\n";
            @$dom->loadHTMLFile("{$url}");

            $finder_1 = new DomXPath($dom);
            $contents = $finder_1->query("//div[@id='comic']");
            $new_articles[$url]['content'] = innerHTML($contents[0]);
            $new_articles[$url]['thumbnail'] = $img_src;
            sleep(1);
        }

        if(count($new_articles)) {
            $ins_query = "INSERT INTO comics (id_user, source_site, content, thumbnail, url_slug,
                            orig_url, date_create) VALUES ";
            foreach($new_articles as $url => $article) {
                $url_slug = preg_replace('/https:\/\/theoatmeal\.com\/comics\//', '', $url);
                $ins_query .= "(
                                {$userid},
                                '{$source_site}',
                                '" . trim(addslashes($article['content'])) . "',
                                '" . trim(addslashes($article['thumbnail'])) . "',
                                '" . trim(addslashes($url_slug)) . "',
                                '" . trim($url) . "',
                                '" . date('Y-m-d H:i:s') . "'
                            ),";

                $objDb->insert('INSERT INTO crawled_urls (source_site, url, crawl_status, date_create)
                                VALUES (\'' . $source_site . '\', \'' . $url . '\', \'success\', \'' . date('Y-m-d H:i:s') . '\')');
            }
                $ins_query = trim($ins_query, ',');
                $objDb->insert($ins_query);
        }
        sleep(1);
    }

    $next_page = $finder->query("//a[contains(@class, 'next')]");
    if(isset($next_page[0]) && !empty($next_page[0]->getAttribute('href')) && !$done)
    {
        $page++;
    }
    else {
        $page = 0;
    }
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
