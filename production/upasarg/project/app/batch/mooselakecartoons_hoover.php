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

$userid = 96444;
$fetch_all = false;
$limit = 30;
$source_site = 'mooselakecartoons';
$base_url = 'https://mooselakecartoons.com';
$crawled_urls = $exists = array();
$db_all_urls = $objDb->select('SELECT * FROM crawled_urls WHERE source_site = \'' . $source_site . '\'');
$db_urls = [];
foreach($db_all_urls as $val) {
    $db_urls[$val['url']] = $val['crawl_status'];
}

$categories = array(
        'art-culture-1', 'business', 'christmas', 'economy', 'education', 'environment', 'ethics', 'family', 'government', 'health', 'law-order', 'media', 'medical', 'natives', 'politics', 'polls', 'psychology', 'religion', 'science-tech', 'separatism', 'sports', 'young-old'
    );

$done = false;
$context = stream_context_create(
                        array(
                            'http' => array(
                            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36',
                            ),
                        ));

foreach($categories as $category) {

    $new_articles = array();
    $page_url = "{$base_url}/{$category}";
    echo "\n\npage : {$page_url}\n\n";
    $dom = new DOMDocument('1.0');

    $file_content = file_get_contents($page_url, false, $context);
    libxml_use_internal_errors(true);
    @$dom->loadHTML($file_content, LIBXML_HTML_NODEFDTD);
    $dom->preserveWhiteSpace = false;

    $finder = new DomXPath($dom);

    $comics = $finder->query("//div[@id='thumbnails']//img");

    if(count($comics)) {
        foreach($comics as $comic) {
            $img_src = $comic->getAttribute('data-image');
            if(array_key_exists($img_src, $db_urls) && in_array($db_urls[$img_src], array('success', 'failed'))) {
                continue;
            }

            $new_articles[$img_src]['thumbnail'] = $img_src;
        }

        if(count($new_articles)) {
            $ins_query = "INSERT INTO comics (id_user, source_site, thumbnail, date_create) VALUES ";
            foreach($new_articles as $url => $article) {
                echo "{$url}\n";
                $ins_query .= "(
                                {$userid},
                                '{$source_site}',
                                '" . trim(addslashes($article['thumbnail'])) . "',
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
