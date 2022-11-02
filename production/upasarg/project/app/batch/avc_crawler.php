<?php
require 'database_connection.php';
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
$row=mysqli_fetch_assoc(mysqli_query($con,"SELECT avc FROM crawl_url"));
//var_dump($row);
 $prev_url=$row['avc'];

//$prev_content=get_data($prev_url);

/*for($page = 1; $page < 37; $page++) {*/
	$userid=9627;

$page =1;
$prev_content=file_get_contents('https://avc.com/page/' . $page);
//$prev_content=file_get_contents('https://avc.com/2020/07/not-so-hyperactive/');


//print_r($prev_content);
//Extract Next url
$dom = new DOMDocument();
libxml_use_internal_errors(true);
 @$dom->loadHTML($prev_content);
 $dom->preserveWhiteSpace = false;
 //$links = $dom->getElementsByTagName('article');
 $xpath = new DomXpath($dom);
 $links = $xpath->query('//html/body/div[1]/main/div/div/article[1]');
 $linkss = $xpath->query('//html/body/div[1]/main/div/div/article[1]/h2');
 //print_r($linkss);
 foreach($linkss as $updatedurl){
  $updatedurl = $updatedurl->getElementsByTagName('a')[0]->getAttribute('href');
 }
 
 if($updatedurl==$prev_url){
     //echo $updatedurl ;
     //echo "=";
      die("Done");
     //echo("Done");
     //echo $prev_url ;
    }

$url="";

foreach ($links as $link)
{
	  $titleNode = $link->getElementsByTagName('h2')[0];
      $title1 = $titleNode->nodeValue;
	  $title2  =  trim($title1,"\n");
echo  $title_colon = str_replace(" ", "-", $title2);
      $title4 = str_replace(":", "", $title_colon);
	  $title3 = str_replace("-", " ", $title_colon);
	  //$new_str = preg_replace('~[\\\\/:*?"<>|]~', ' ', $string);
      $url = $titleNode->getElementsByTagName('a')[0]->getAttribute('href');
      //$time = $titleNode->getElementsByTagName('time');
      $date1 = $link->getElementsByTagName('time')[0]->getAttribute('datetime');
	  $date  = strtotime($date1);
      //$content = $article->getElementsByTagName('div')->getElementsByClassName('ContentArea')[0];
	  //$body = $link->getElementsByTagName('div')[0]->nodeValue;
	  $body =getHtml(
	                      $xpath->evaluate(
                          '//html/body/div[1]/main/div/div/article[1]/div[1]'
                        )
                      );
	  $category = trim($link->getElementsByTagName('div')[7]->nodeValue);
	  echo "<br/>"."<br/>"."<a href='".$url."'>$url</a>";
	  
	   $body.="<br/>"."<br/>"."<a href='".$url."'>(Source: $url)</a>";
	  //echo $title . ':' . $url . $date.$body.$category.'<b>'.'</b>'.'<br>';
	   $body=mysqli_real_escape_string($con,$body);

//echo $body;


if($date=="" || $title4=="" || !$date || !$title4) die("Error");

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
$url_title=$title4;
$title=$title.$t;

mysqli_set_charset($con,"utf8");
$sql = "INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body, url) VALUES($userid, '" . $date . "', '" . $title3 . "', '" . $body . "', '" . $url_title . "')";
echo $sql;
mysqli_query($con,"INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body, url) VALUES($userid, '" . $date . "', '" . $title3 . "', '" . $body . "', '" . $url_title . "')");
mysqli_query($con,"UPDATE crawl_url SET avc='$url' WHERE 1");
}
if($url=="")
{
	echo"completed";
}
/*}*/
?>
