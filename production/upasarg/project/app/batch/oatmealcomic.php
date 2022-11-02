<?php
//https://pastebin.com/agvdYmyr
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
set_time_limit(0);

for($page = 12; $page < 13; $page++) {
        //check from 4 one by one if its working or not 
		$userid=9680;
		require 'database_connection.php';
		//$page =1;
		//$prev_content=file_get_contents('https://theoatmeal.com/comics'); // "https://theoatmeal.com/comics_pg/page" . $page;
		$prev_content=file_get_contents('https://theoatmeal.com/c2index/page:'.$page);
		
		$dom = new DOMDocument();
		libxml_use_internal_errors(true);
		@$dom->loadHTML($prev_content);
		$dom->preserveWhiteSpace = false;
		$xpath = new DomXpath($dom);
		$comics = $xpath->query('//*[@id="comics_list"]');

		// var_dump($comics[0]->getElementsByTagName('img'));

        foreach ($comics as $comic)
        {
                echo 'Fetch images from here: <br>';
                    foreach( $comic->getElementsByTagName('a') as $uniformResourceLocator){
                echo $url = $uniformResourceLocator->getAttribute('href');
                    //echo '<a href="/avc'.$url.'">qwe</a><br>';
                echo $urlToFetch = 'https://theoatmeal.com' . $url;
                    //exit;
                    '<strong>' . $urlToFetch . '</strong><br>';
                    $imagesArray = fetchImagesFromComics($urlToFetch);
                    // var_dump($imagesArray);
                    $body= "";
                    foreach($imagesArray as $imagE){
                        //echo $imagE . '<br><br>';
                        //$body .= '<img src="'.$imagE.'">';
                    echo	 $body.= '<img  src="'.$imagE.'" >'.'<br/>'.'<br/>';
                        //echo"<br/><br/>";
                    }
                $urlToFetch1 = mysqli_real_escape_string($con, $urlToFetch);
                        echo   $body.='<a>(Source:'.$urlToFetch1.')</a>';
                        //exit;
                //Extract date
                $date = date_create();
                $date=date_timestamp_get($date);
                $date=time();

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
                $u=$url;
                $url_title = str_replace("/","_",$u);
                //$url_title = str_replace("$url_title1","https://theoatmeal.com\.$url_title1",$url_title1);
                //$title = $url_title;
                //$url_title1 = explode('_', $url_title)[1];
                $title1 = end(explode('/', $urlToFetch1));
                $title = str_replace("_"," ",$title1);
                
                //exit;
                //preg_match_all( '\/([a-z0-9_-]*[\/]?)$',$urlToFetch, $matches );
                //$title = str_replace("_"," ",$url_title1);
                //$title=$title.$t;

                /*mysqli_set_charset($con,"utf8");
                $sql = "INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body, url) VALUES($userid, '" . $date . "', '" . $title . "', '" . $body . "', '" . $url_title . "')";
                echo $sql;
                mysqli_query($con,"INSERT INTO se_blogentries(blogentry_user_id, blogentry_date, blogentry_title, blogentry_body, url) VALUES($userid, '" . $date . "', '" . $title . "', '" . $body . "', '" . $url_title . "')");
                mysqli_query($con,"UPDATE crawl_url SET avc='$url' WHERE 1");*/
                    
                    
                }

                
                }

		if($url=="")
		{
			echo"completed";
		}
}

function fetchImagesFromComics($url){
    $prev_content=file_get_contents($url);
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    @$dom->loadHTML($prev_content);
    $dom->preserveWhiteSpace = false;
    $xpath = new DomXpath($dom);
    // $comics = $xpath->query("//div[@id='comic']/p/img");
    $comics = $xpath->query("//div[@class='pad']/img");
    var_dump($comics);

    foreach ($comics as $img) {
        $img_sources[] = $img->getAttribute('src');
    }
    if(!isset($img_sources)){
        $comics = $xpath->query("//div[@id='comic']/p/img");
        foreach ($comics as $img) {
            $img_sources[] = $img->getAttribute('src');
        }
    }if(!isset($img_sources)){
                    $comics = $xpath->query("//html/body/div[3]/div/p/img");
                    foreach ($comics as $img) {
                        $img_sources[] = $img->getAttribute('src');
                    }
                }if(!isset($img_sources)){
                    $comics = $xpath->query("//html/body/div[3]/p/a/img");
                    foreach ($comics as $img) {
                        $img_sources[] = $img->getAttribute('src');
                    }
                }if(!isset($img_sources)){
                    $comics = $xpath->query("//html/body/div[3]/div[1]/img");
                    foreach ($comics as $img) {
                        $img_sources[] = $img->getAttribute('src');
                    }
                }
    
    // var_dump($img_sources);
    return $img_sources;
}

?>
