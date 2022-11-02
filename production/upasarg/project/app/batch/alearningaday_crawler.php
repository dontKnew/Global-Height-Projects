<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
set_time_limit(0);
function getHtml($nodes) {
  $result = '';
  foreach ($nodes as $node) {
    $result .= $node->ownerDocument->saveHtml($node);
  }
  return $result;
}
function get_data($url) 
{
	$ch = curl_init();
	$timeout = 0;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
function get_File($url,$dest)
{
	$fp = fopen ($_SERVER['DOCUMENT_ROOT'].$dest, 'w+');//This is the file where we save the    information
	$ch = curl_init(str_replace(" ","%20",$url));//Here is the file we are downloading, replace spaces with %20
	curl_setopt($ch, CURLOPT_TIMEOUT, 50);
	curl_setopt($ch, CURLOPT_FILE, $fp); // write curl response to file
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_exec($ch); // get curl response
	curl_close($ch);
	fclose($fp);
}
$userid=10007;
//echo $userid;
require 'database_connection.php';
$row=mysqli_fetch_assoc(mysqli_query($con,"SELECT alearningaday FROM crawl_url"));
print_r($row);
$prev_url=$row['alearningaday'];
$prev_content=get_data($prev_url);
var_dump($prev_content);
//Extract Next url
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($prev_content);
$dom->preserveWhiteSpace = false;
$links = $dom->getElementsByTagName('a');
$url="";
foreach ($links as $link)
{
	
		$rel=$link->getAttribute('rel');
		if($rel=='next')
		{
			$url=$link->getAttribute('href');
		}
}
if($url=="")
{
	die("completed");
}


$content=get_data($url);
$dom->loadHTML($content);
$xpath = new DOMXpath($dom);
//Extract title
$title=getHtml(
    $xpath->evaluate(
      '//*[contains(concat(" ", normalize-space(@class), " "), " post-title ")][1]/node()'
    )
  );

//get url form of the title
$a=explode("/",strrev(trim($url,'/')),2);
$url_title=rawurlencode(str_replace(" ","-",strrev($a[0])));
$url_title=str_replace(".html","",$url_title);
/*$tit=$b[0];*/

//Extract date
 $date=getHtml(
    $xpath->evaluate(
      '//*[contains(concat(" ", normalize-space(@class), " "), " permalink ")][1]/node()'
    )
  );
$date=strtotime($date);

//Extract content
$body=getHtml(
    $xpath->evaluate(
      '//*[contains(concat(" ", normalize-space(@class), " "), " post-inside ")][1]/node()'
    )
  );
 $body.="<br/>"."<br/>"."<a href='".$url."'>$url</a>";
 
//save images and change image urls
fopen("tmp/".$url_title.".html",'w');
file_put_contents("tmp/".$url_title.".html",$body);
require_once('simple_html_dom.php');
require_once('url_to_absolute/url_to_absolute.php');
$url2 = "tmp/".$url_title.".html";

$html = file_get_html($url2);
foreach($html->find('img') as $element) 
{
	$abs_url=url_to_absolute($url2, $element->src);
	$a=explode("/",strrev($abs_url),2);
	$img=strrev($a[0]);
	$img_path="/images/$userid/$img";
	echo $img_path;
	get_File($abs_url,$img_path);
	$body=str_replace($element->src,$img_path,$body);
	$body=str_replace($abs_url,$img_path,$body);
}
unlink("tmp/".$url_title.".html");
$body=mysqli_real_escape_string($con,$body);

echo $body;



if($date=="" || $title=="" || !$date || !$title) die("Error");

$t="";
$m=0;
do
{
	$result=mysqli_query($con,"SELECT blogentry_title FROM se_blogentries WHERE blogentry_title='".$title.$t."' AND blogentry_user_id=$userid");
	if($result)
	{
		$m=mysqli_num_rows($result);
	}
	if($m!=0 || $m!='')
	{
		$t+=$m;
	}
	
}while($m>0);
$title=$title.$t;
mysqli_set_charset($con,"utf8");
$sql = "INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body, url) VALUES($userid, '$date', '$title', '$body', '$url_title')";
echo $sql;
mysqli_query($con,"INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body, url) VALUES($userid, '$date', '$title', '$body', '$url_title')");


mysqli_query($con,"UPDATE crawl_url SET alearningaday='$url' WHERE 1");
mysqli_close($conn);
echo $url;

?>
