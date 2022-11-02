<?php
set_time_limit(0);
function get_data($url) 
{
	$ch = curl_init();
	$timeout = 0;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	 if(curl_errno($ch))
    {
    echo 'Curl error: ' . curl_error($ch);
    }
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

$userid=9680;
require 'database_connection.php';
$row=mysqli_fetch_assoc(mysqli_query($con,"SELECT oatmealblog FROM crawl_url"));
$latest_url=$row['oatmealblog'];
$latest_content=get_data($latest_url);
//echo $latest_content;

$latest_content=get_data("https://theoatmeal.com/feed/blog2");
$a=explode('<h3 class="inline" style="float: right;"><a href="',$latest_content,2);
$b=explode('"',$a[1],2);
$url="https://theoatmeal.com".$b[0];

if($url==$latest_url)
{
	die("completed");
}
$content=get_data($url);

//Extract title
$a=explode('<title>',$content,2);
$b=explode('-',$a[1],2);
$b[0]=trim($b[0]);
$title=@mysqli_real_escape_string($con,$b[0]);

$a=explode("blog/",$url,2);
$url_title=rawurlencode(str_replace(" ","-",$a[1]));

$tit=$b[0];

//Extract date
$date = date_create();
$date=date_timestamp_get($date);
$date=time();

//Extract content
$a=explode('<div class="post_body">',$content,2);
$b=explode('</div>',$a[1],2);

$body=$b[0]."<br/>Source: "."<a href='".$url."'>$url</a>"."<br/>";

//save images and change image urls

fopen("tmp/".$title.".html",'w');
file_put_contents("tmp/".$title.".html",$body);
require_once('simple_html_dom.php');
require_once('url_to_absolute/url_to_absolute.php');
$url2 = "tmp/".$title.".html";
$html = file_get_html($url2);
foreach($html->find('img') as $element) 
{
	$rnd=rand(500,9999999);
	$abs_url=url_to_absolute($url2, $element->src);
	$a=explode("/",strrev($abs_url),2);
	$img=strrev($a[0]);
	$img_path="/images/$userid/".$rnd."_".$img;
	get_File($abs_url,$img_path);
	$body=str_replace($element->src,$img_path,$body);
	$body=str_replace($abs_url,$img_path,$body);
}

unlink("tmp/".$title.".html");
$body=mysqli_real_escape_string($con,$body)or die(mysqli_error());

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

echo mysqli_query($con,"INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body,url) VALUES($userid, '$date', '$title', '$body','$url_title')");

mysqli_query($con,"UPDATE crawl_url SET oatmealblog='$url' WHERE 1");
echo $url."<br/>";
mysqli_close($con);

?>
