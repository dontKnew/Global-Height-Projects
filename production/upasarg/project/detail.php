<?php

require_once dirname(__FILE__) . '/config/common.php';

if(isset($_GET['title']))
{
	$btitle = explode("/",$_GET['title']);
    $btitle = $btitle[0];
	$rawurl_title = rawurlencode($btitle);
}

// $detail = $objDb->select("SELECT blogentry_id, blogentry_body, blogentry_title,
//                             blogentry_user_id, blogentry_date
//                             FROM se_blogentries
//                             WHERE enable=1 AND (url like '%$btitle%' OR url like '%$rawurl_title%')");

$detail = $objDb->select("SELECT * FROM articles WHERE status = 'active' AND url_slug = :url_slug", array(':url_slug' => $btitle));

if(empty($detail[0]['id'])) {
    redirectPage($routes['base']);
}

// $id=$detail[0]['blogentry_id'];
// $user_id=$detail[0]['blogentry_user_id'];
// $title1=$detail[0]['blogentry_title'];
// $title = str_replace("-"," ",$title1);
// $body=$detail[0]['blogentry_body'];
// $date=$detail[0]['blogentry_date'];

$img_path = $detail[0]['img_path'];
$id=$detail[0]['id'];
$user_id=$detail[0]['user_id'];
$title = $title1=$detail[0]['title'];
// $title = str_replace("-"," ",$title1);
$body=$detail[0]['content'];
$date=$detail[0]['datetime_text'];

$user=$objDb->select("SELECT user_username FROM `se_users` WHERE `user_id`='$user_id'");
$blog_user=$user[0]['user_username'];

$meta_keywords=$title1;
$meta_keywords=str_replace(",","",$meta_keywords);
$meta_keywords=str_replace(" ",", ",$meta_keywords);
$meta_description=$body;
$meta_description=str_replace("\r\n","",$meta_description);
$meta_description=strip_tags($meta_description);
$meta_description=substr($meta_description,0,250);
//Find next and previous blog entries
// $min_max_res = $objDb->select("SELECT min(blogentry_id) as min_id, max(blogentry_id) as max_id
//                         FROM `se_blogentries` WHERE blogentry_user_id=$user_id and enable=1");
$min_max_res = $objDb->select("SELECT min(id) as min_id, max(id) as max_id
                        FROM `articles` WHERE user_id = $user_id and status = 'active'");

foreach($min_max_res as $r)
{  
    if(!empty($r['min_id'])) {
        $min_id=$r['min_id'];
    }
    if(!empty($r['max_id'])) {
        $max_id=$r['max_id'];
    }
}
$user=str_replace(" ","-",$blog_user);
if($id==$max_id)
{
	$next="";
}
else
{
// 	$nxt=$objDb->select("select blogentry_title,blogentry_date,url from se_blogentries where (blogentry_user_id=$user_id and blogentry_id > $id and enable=1) order by blogentry_id limit 1");
// 	$next_title=substr($nxt[0]['blogentry_title'],0,30);
// 	$next_url=$nxt[0]['url'];
// 	$next_date=str_replace(" ","-",date("F jS Y",$nxt[0]['blogentry_date']));
// 	$next="<a href='https://xklsv.me/$next_url/$user/$next_date'>$next_title...<span style='color:black;'> Next&raquo;</span></a>";

	$nxt = $objDb->select("SELECT * FROM articles WHERE (user_id = $user_id AND id > $id AND status = 'active') ORDER BY id LIMIT 1");
	$next_title = substr($nxt[0]['title'],0,30);
	$next_url = $nxt[0]['url_slug'];
	$next_date = str_replace(" ","-",date("F jS Y", strtotime($nxt[0]['datetime_text'])));
	$next = "<a title=\"{$nxt[0]['title']}\" href='https://xklsv.me/$next_url/$user/$next_date'><button class=\"float-left btn btn-outline-secondary width-100\"><b>Next  &raquo;</b></button></a>"; // $next_title...
}
if($id==$min_id)
{
	$previous="";
}
else
{
// 	$prev=$objDb->select("select blogentry_title,blogentry_date,url from se_blogentries where (blogentry_user_id=$user_id and blogentry_id < $id and enable=1) order by blogentry_id desc limit 1");
// 	$previous_title=substr($prev[0]['blogentry_title'],0,30);
//     $previous_url=$prev[0]['url'];
// 	$previous_date=str_replace(" ","-",date("F jS Y",$prev[0]['blogentry_date']));
// 	$previous="<a href='https://xklsv.me/$previous_url/$user/$previous_date'><span style='color:black; '>&laquo; Previous </span>$previous_title...</a>";

	$prev = $objDb->select("SELECT * FROM articles WHERE (user_id = $user_id AND id < $id and status = 'active') ORDER BY id DESC LIMIT 1");
	$previous_title = substr($prev[0]['title'],0,30);
    $previous_url = $prev[0]['url_slug'];
	$previous_date = str_replace(" ", "-", date("F jS Y", strtotime($prev[0]['datetime_text'])));
	$previous = "<a title=\"{$prev[0]['title']}\" href='https://xklsv.me/$previous_url/$user/$previous_date'><button class=\"float-left btn btn-outline-secondary width-100\"><b>&laquo; Previous</b></button></a>"; // $previous_title...
}

// title meta
$req=explode("/",$_SERVER['REQUEST_URI']);
$meta_data['title'] = "{$title} | " . ucfirst($blog_user);
// $meta_data['keywords'] = "blogs, " . $req[3] . ", " . $meta_keywords;
$meta_data['keywords'] = "blogs, {$detail[0]['datetime_text']}, {$meta_keywords}";
$meta_data['description'] = substr($meta_description,0,500) . "...";

$contentFile = 'detail_tpl.php';

require_once $config['paths']['config'] . '/exit.php';

?>
