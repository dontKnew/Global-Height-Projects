<?php

function get_File($url,$dest)
{
	$fp = fopen ("/home/xklsvme/public_html/images/10741/".$dest, 'w+');//This is the file where we save the    information
	$ch = curl_init(str_replace(" ","%20",$url));//Here is the file we are downloading, replace spaces with %20
	curl_setopt($ch, CURLOPT_TIMEOUT, 50);
	curl_setopt($ch, CURLOPT_FILE, $fp); // write curl response to file
	//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_exec($ch); // get curl response
	curl_close($ch);
	fclose($fp);
}

function get_inner_html( $node ) { 
    $innerHTML= ''; 
    $children = $node->childNodes; 
    foreach ($children as $child) { 
        $innerHTML .= $child->ownerDocument->saveXML( $child ); 
    } 

    return $innerHTML;  
}

function article_links($url)
{
	$html = file_get_contents($url);
	//echo $html;
	$dom = new DOMDocument;
	libxml_use_internal_errors(true);
	$dom->loadHTML($html);
	libxml_clear_errors();
	$xpath = new DOMXPath($dom);

	//$nodeList = $xpath->query('//a[@class="title-link"]');
	$nodeList = $xpath->query('//h1[@class="hed"]');
	//$nodeList = $xpath->getElementsByTagName('//h1[@class="hed"]');
	
	foreach ($nodeList as $node)
	 {
		$link['text'] = $node->textContent;
		$tagName = $node->getElementsByTagName('a');
		foreach($tagName as $tag){
		    $link['href']= $tag->getAttribute('href');
    		break;
		}
	}
	return $link;
}
$userid=10741;


$url="http://www.propublica.org/";
$links=article_links($url);
print_r($link);

$title=$links['text'];
$date=time();
$curr_url=$links['href'];
require 'database_connection.php';
$sql="select prev_url from art_crawl_url where 1";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($result);
print_r($row);

if($row['prev_url']==$curr_url) die("completed");

$html = file_get_contents($links['href']);
$dom = new DOMDocument;
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();
$xpath = new DOMXPath($dom);

foreach($xpath->query('//div[contains(attribute::id, "google-callout")]') as $e ) {
    // Delete this node
    $e->parentNode->removeChild($e);
}

$nodeList = $xpath->query('//div[@class="article-body"]');


foreach ($nodeList as $node)
{
	$body=strip_tags(get_inner_html($node),"<img><br><p><h1><h2><h3><h4><h5><h6><span><b><i><em>");
	break;
}	

if(isset($title) && isset($body))
{
	//generate url
	echo $url_title=strtolower(trim(preg_replace("/[^a-zA-Z0-9]+/", "-",$title),"-"));
	$i=1;
	$u=$url_title;
	while(mysqli_num_rows(mysqli_query($con,"select `blogentry_id` from `se_blogentries` where url='$url_title'")))
	{
		$i++;
		$url_title=$u."-".$i;
	}
}

if(isset($title) && isset($body) && isset($url_title) && isset($date))
{
	//save images and change image urls
	
	$fp=fopen("tmp/".$url_title.".html",'wb');
	file_put_contents("tmp/".$url_title.".html",$body);
	require_once('simple_html_dom.php');
	require_once('url_to_absolute/url_to_absolute.php');
	$url2 = "tmp/".$url_title.".html";
	$html = file_get_html($url2);
	foreach($html->find('img') as $element) 
	{
		$rnd=rand(500,9999999);
		if(!strpos($element->src,"propublica.org"))
		{
			$abs_url="www.propublica.org".$element->src;
		}
		$abs_url=url_to_absolute($url2, $abs_url);
		$a=explode("/",strrev($abs_url),2);
		$img=strrev($a[0]);
		$img_path="/images/$userid/".$rnd."_".$img;
		get_File($abs_url,$rnd."_".$img);
		$body=str_replace($element->src,$img_path,$body);
		$body=str_replace($abs_url,$img_path,$body);
	}
	
	unlink("tmp/".$url_title.".html");
	$body=strip_tags($body,"<img><br><p><a>");
	$body=@mysqli_real_escape_string($body);
	if(strpos($body,"Like this story?"))
	{
		$a=explode("Like this story?",$body);
		$body=$a[0];
	}
	mysqli_set_charset($con,"utf8");

}
//echo "title=>$title body=>$body url=>$url_title date=>$date";
if(isset($title) && isset($body) && isset($url_title) && isset($date))
{
   $sss="INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body,url) VALUES($userid, '$date', '$title', '$body','$url_title')";
   if(mysqli_query($con,$sss)){
      echo 'hkhkhkhkhjkhjhjkhjkhjjk j uyu yutyuyu u utyu u yu u' ;
   }
    mysqli_query($con,"UPDATE art_crawl_url SET prev_url='$curr_url' WHERE 1");
}
echo $curr_url;
?>