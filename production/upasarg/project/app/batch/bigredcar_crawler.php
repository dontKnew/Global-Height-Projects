<script type="text/javascript">
	if (document.location.protocol != "https:") {document.location = document.URL.replace(/^http:/i, "https:")}
</script>
<?php
require 'database_connection.php';
require_once('simple_html_dom.php');
$u_agent = $_SERVER['HTTP_USER_AGENT'];
ini_set('user_agent', $u_agent); 
?>
<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
set_time_limit(0);
$row=mysqli_fetch_assoc(mysqli_query($con,"SELECT bigredcar FROM crawl_url"));
//var_dump($row);
 $prev_url=$row['bigredcar'];
//https://themusingsofthebigredcar.com/page/187/
  function getHtml($nodes) {
  $result = '';
  foreach ($nodes as $node) {
    $result .= $node->ownerDocument->saveHtml($node);
  }
  return $result;
}
/*for($page = 3; $page < 187; $page++) {*/
	$userid=10005;

$page =1;
$prev_content=file_get_html('https://themusingsofthebigredcar.com/page/' . $page);


//Extract Next url
$dom = new DOMDocument();
libxml_use_internal_errors(true);
 @$dom->loadHTML($prev_content,LIBXML_HTML_NODEFDTD);
 
 $dom->preserveWhiteSpace = false;
 //$links = $dom->getElementsByTagName('article');
 $xpath = new DomXpath($dom);
 //$links = $xpath->query('//html/body/div[1]/div/div[1]/div/article');
 $links = $xpath->query('//html/body/div[1]/div/div[1]/div/article[1]');
 
  $linkss = $xpath->query('//html/body/div[1]/div/div[1]/div/article[1]/div[2]/header/h1');
 //print_r($linkss);
 foreach($linkss as $updatedurl){
 echo $updatedurl = $updatedurl->getElementsByTagName('a')[0]->getAttribute('href');
 }
 
 if($updatedurl==$prev_url){
     //echo $updatedurl ;
     //echo "=";
     die("Done");
     //echo $prev_url ;
    }
 //echo $dom->saveHTML();
 print_r($links);
 //exit;
 //$url="";
 
 
foreach ($links as $link)
{    
	 echo $url = $link->getElementsByTagName('a')[0]->getAttribute('href');
     //$titleNode = $link->getElementsByTagName('h1')[0]->nodeValue;
     //$prev_content=file_get_contents($url1);
     $prev_content=file_get_html($url);
     

//Extract Next url
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    @$dom->loadHTML($prev_content);
    $dom->preserveWhiteSpace = false;
    //$links = $dom->getElementsByTagName('article');
    $xpath = new DomXpath($dom);
    echo  $title1=getHtml(
    $xpath->evaluate(
      '//html/body/div[1]/div/div[1]/div/article/header/h1/node()'
    )
  );
  $title2  =  trim($title1,"\n");
	  $title = str_replace(" ", "-", $title2);
	  $title3 = str_replace("-", " ", $title);
    $body =getHtml(
    $xpath->evaluate(
      '//html/body/div[1]/div/div[1]/div/article/div/node()'
    )
  );
  
    $date1 =getHtml(
    $xpath->evaluate(
      '//html/body/div[1]/div/div[1]/div/article/header/div/a/time/node()'
    )
  );
  echo $date  = strtotime($date1);
  
  $body.='<br/>'.'<br/>'.'<a>(Source: '.$url.')</a>';
  $body=mysqli_real_escape_string($con,$body);
if($date=="" || $title=="" || !$date || !$title) echo("Error");

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
$url_title=$title;
$title=$title.$t;
mysqli_set_charset($con,"utf8");
$sql = "INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body, url) VALUES($userid, '" . $date . "', '" . $title3 . "', '" . $body . "', '" . $url_title . "')";
echo $sql;
mysqli_query($con,"INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body, url) VALUES($userid, '" . $date . "', '" . $title3 . "', '" . $body . "', '" . $url_title . "')");
mysqli_query($con,"UPDATE crawl_url SET bigredcar='$url' WHERE 1");
}
if($url=="")
{
	echo"completed";
}
/*}*/
exit;
?>
