<?php

require_once dirname(__FILE__) . '/config/common.php';

authWall();

$errors = array();
$blogid = isset($_REQUEST['bid']) ? $_REQUEST['bid'] : 0;

if($blogid) {
    $db_detail = $objDb->select("SELECT blogentry_id, blogentry_title, blogentry_body
                                    FROM se_blogentries WHERE blogentry_id = :id", array(':id' => $blogid));

    $blog_detail = $db_detail = isset($db_detail[0]) ? $db_detail[0] : array();
}

if (isset($_POST['submit'])) {
    $rules['blogentry_title'] = 'required';
    $rules['blogentry_body'] = 'required';
    $rules['captcha_code'] = 'required';

    $validation = $validator->validate($_POST, $rules);
    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
    }
//     else if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0) {
//         $errors['captcha_code'] = 'The Validation code does not match';
//     }
    else {
        $title = $url = htmlentities($_POST['blogentry_title']);
		$title = str_replace("'", "&#39;", $title);
		$url = strtolower(trim(preg_replace("/[^a-zA-Z0-9]+/", "-", $url), "-"));
		$body = str_replace("'", "&#39;", $_POST['blogentry_body']);
		$ip = $_SERVER['REMOTE_ADDR'];

		if(!empty($blog_detail['blogentry_id'])) {
            $objDb->UPDATE("UPDATE se_blogentries SET
                            blogentry_title = :blogentry_title,
                            blogentry_body = :blogentry_body,
                            ip = $ip
                            WHERE blogentry_id = :blogentry_id
                            AND blogentry_user_id = :blogentry_user_id", array(
                                ':blogentry_user_id' => $_SESSION['id'],
                                ':blogentry_id' => $blogid,
                                ':blogentry_title' => $title,
                                ':blogentry_body' => $body,
                                ':ip' => $ip
                            ));
            redirectPage($routes['my_articles'], 'Data updated successfully', false);
		}
		else {
            $i = 1;
            $org_url = $url;
            $similar_blog = $objDb->select("SELECT blogentry_id FROM se_blogentries
                                            WHERE url = :url", array(':url' => $url));
            foreach ($similar_blog as $blog)
            {
                $i++;
                $url = $org_url . "-" . $i;
            }
            $objDb->insert("INSERT INTO se_blogentries (blogentry_user_id, blogentry_date,
                            blogentry_title, blogentry_body, url, ip) VALUES (:blogentry_user_id, :blogentry_date,
                            :blogentry_title, :blogentry_body, :url, :ip)", array(
                                ':blogentry_user_id' => $_SESSION['id'],
                                ':blogentry_date' => time(),
                                ':blogentry_title' => $title,
                                ':blogentry_body' => $body,
                                ':url' => $url,
                                ':ip' => $ip
                            ));
            redirectPage($routes['my_articles'], 'Data updated successfully', false);
		}
    }
}

$contentFile = 'write_article_tpl.php';

require_once $config['paths']['config'] . '/exit.php';

?>
