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
$row=mysqli_fetch_assoc(mysqli_query($con,"SELECT propublica FROM crawl_url"));
//var_dump($row);
 $prev_url=$row['propublica'];
//https://themusingsofthebigredcar.com/page/187/
  function getHtml($nodes) {
  $result = '';
  foreach ($nodes as $node) {
    $result .= $node->ownerDocument->saveHtml($node);
  }
  return $result;
}
/*for($page = 3; $page < 187; $page++) {*/
$userid=9850;
$page =1;
$prev_content=file_get_html('https://www.propublica.org');


//Extract Next url
$dom = new DOMDocument();
libxml_use_internal_errors(true);
 @$dom->loadHTML($prev_content,LIBXML_HTML_NODEFDTD);
 
 $dom->preserveWhiteSpace = false;
 //$links = $dom->getElementsByTagName('article');
 $xpath = new DomXpath($dom);
 //$links = $xpath->query('//html/body/div[1]/div/div[1]/div/article');
 //$links = $xpath->query('//*[@id="level1"]');
 $links = $xpath->query('//*[@id="level1"]');
 
 //print_r($links);
 //echo $dom->saveHTML();
 //exit;
 //$url="";
 
  $linkss = $xpath->query('//html/body/main/div[2]/div[1]/div[1]/div[2]/h3');
 //print_r($linkss);
 foreach($linkss as $updatedurl){
  echo $updatedurl = $updatedurl->getElementsByTagName('a')[0]->getAttribute('href');
 }
 
 if($updatedurl==$prev_url){
     echo $updatedurl ;
     //echo "=";
     die("Done");
     echo $prev_url ;
    }else{
         echo $updatedurl ;
     //echo "=";
     echo("crawl it");
     echo $prev_url ;
    }

foreach ($links as $link)
{    
	 $url = $link->getElementsByTagName('a')[0]->getAttribute('href');
	
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
    //$links = $xpath->query('//html/body/div[1]/div/div[1]/div/article[1]/div[2]/header/h1/a');
    //$linkss = $xpath->query('//html/body/div[1]/div/div[1]/div/article');
    
  
    //echo $url;
   /*echo  $url=getHtml(
    $xpath->evaluate(
      '//html/body/div[1]/div/div[1]/div/article/header/div/a/node()'
    )
  );*/
   
     $title1=getHtml(
    $xpath->evaluate(
      '//html/body/main/div[1]/article/header/h2/node()'
    )
  );
  $title2  =  trim($title1,"\n");
	   $title = str_replace(" ", "-", $title2);
	  $title3 = str_replace("-", " ", $title);
     $body =getHtml(
    $xpath->evaluate(
      '//div[@class="article-body"]'
      
    )
  );
  
  /* $date1 =getHtml(
    $xpath->evaluate(
      '//html/body/main/div[1]/article/header/div[2]/time/node()'
    )
  );
  echo $date  = strtotime($date1);*/
  
 echo $date1 =getHtml(
    $xpath->evaluate(
      '//time[@class="timestamp"]'
    )
  );
  
  echo $date  = strtotime(" . $date . ");
  
  //echo $date  = strtotime($date1);
  //exit;
  //echo "Created date is " . date("Y-m-d h:i:sa", $date);
  //exit;
  $body.='<br/>'.'<br/>'.'<a>(Source: '.$url.')</a>';
  //exit;
    
/*$html = file_get_html($linkss);
foreach($html->find('img') as $element) {
    $img = $element->src;
    echo"<img src='".$img."' />"."<br />"."<br />"."<br />"."<br />";
}*/
  //exit;
  
    /*foreach ($linkss as $linkk)
    {
      $url = $linkk->getElementsByTagName('a')[0]->getAttribute('href');
      $title1 = $linkk->getElementsByTagName('h1')[0]->nodeValue;
      $title2  =  trim($title1,"\n");
	  echo $title = str_replace(" ", "-", $title2);
	  $title3 = str_replace("-", " ", $title);
	  $body = $linkk->getElementsByTagName('div')[1]->nodeValue;
	  echo $body = $dom->saveXML($body);
	  exit;
	  $date1 = $linkk->getElementsByTagName('time')[0]->getAttribute('datetime');
	  $date  = strtotime($date1);
	  $img = $linkk->getElementsByTagName('img')[0]->getAttribute('src');
	  $body .='<img  src='.$img.' >';
	  //exit;
	  $body.='<br/>'.'<br/>'.'<a>(Source: '.$url.')</a>';*/
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
mysqli_query($con,"UPDATE crawl_url SET propublica='$url' WHERE 1");
}
if($url=="")
{
	echo"completed";
}
/*}*/
exit;
?>
