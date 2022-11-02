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

$userid=9850;
require 'database_connection.php';
$row=mysqli_fetch_assoc(mysqli_query($con,"SELECT startupmanagement FROM crawl_url"));
$latest_url=$row['startupmanagement'];

print_r($latest_url);
$content=get_data("http://startupmanagement.org/blog/");
print_r($content);
$a=explode('<h2 class="blog-title"><a href="',$content);
$b=explode('">',$a[1]);
$url=$b[0];
if($url==$latest_url)
{
	die("completed");
}
else
{
$content=get_data($url);
//Extract title
$a=explode('<h1 class="blog-title"><a',$content,2);
$b=explode('>',$a[1],2);
$c=explode('</a>',$b[1],2);
$title=@mysqli_real_escape_string($con,$c[0]);
$a=explode("/",strrev(trim($url,'/')),2);
$url_title=rawurlencode(str_replace(" ","-",strrev($a[0])));
$tit=$c[0];

//Extract date
$a=explode('<div class="blog-date">',$content,2);
$b=explode(">",$a[1],2);
$c=explode("</a>",$b[1],2);
$date=$c[0];
$date=strtotime($date)+(date("G")*60*60)+(date("i")*60)+date("s");
$date=time();
//Extract content
$a=explode('<div class="blog-content">',$content,2);
$b=explode('<div class="clear"></div>',$a[1],2);

/*$body="<br/>Source:  "."<a href='".$url."'>$url</a>"."<br/>"."<br/>";
$body.=$b[0];*/
/*$body.="<br/>Source:".""."<a href='".$url."'>$url</a>";*/
fopen("tmp/".$title.".html",'w');
file_put_contents("tmp/".$title.".html",$body);
require_once('simple_html_dom.php');
require_once('url_to_absolute/url_to_absolute.php');
$url2 = "tmp/".$title.".html";
$html = file_get_html($url2);
print_r($html);

print_r($body);
foreach($html->find('img') as $element) 
{
	$abs_url=url_to_absolute($url2, $element->src);
	$a=explode("/",strrev($abs_url),2);
	$img=strrev($a[0]);
	$img_path="/images/$userid/$img";
	get_File($abs_url,$img_path);
	$body=str_replace($element->src,$img_path,$body);
	$body=str_replace($abs_url,$img_path,$body);
}
$body=@mysqli_real_escape_string($con,$body);
unlink("tmp/".$title.".html");
$body.="<br/>Source:".""."<a href='".$url."'>$url</a>";

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
mysqli_query($con,"INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body, url) VALUES($userid, '$date', '$title', '$body', '$url_title')");

mysqli_query($con,"UPDATE crawl_url SET startupmanagement='$url' WHERE 1");
echo $url."<br/>";
}
mysqli_close($conn);


?>
