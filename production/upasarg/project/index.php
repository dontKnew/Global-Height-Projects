<?php

require_once dirname(__FILE__) . '/config/common.php';

if(isset($_GET['q'])) {
    $blogs = $pages = array();
    $clean_param = trim(addslashes(strip_tags($_GET['q'])));

    $blogs = $objDb->select('SELECT * FROM blog
                                WHERE (title LIKE "%' . $clean_param . '%" OR content LIKE "%' . $clean_param . '%")
                                AND status = "active"');

    $pages = $objDb->select('SELECT P.* FROM pages P
                                 LEFT JOIN page_content C ON C.id_page = P.id
                                 WHERE (C.content LIKE "%' . $clean_param . '%" OR P.title LIKE "%' . $clean_param . '%")
                                 AND P.status = "published"
                                 AND id_parent_page != 0');

    $result_cnt = count($blogs) + count($pages);
    $contentFile = 'search_result_tpl.php';
}
else {
    $news = $objDb->select('SELECT * FROM news WHERE status = "published" ORDER BY id DESC LIMIT 0,6');
    $contentFile = 'index_tpl.php';
}

$meta_data['keywords'] = $config['site_settings']['brand_name'];
$meta_data['description'] = $config['site_settings']['brand_name'];

require_once $config['paths']['config'] . '/exit.php';

?>
