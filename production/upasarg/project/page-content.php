<?php

require_once dirname(__FILE__) . '/config/common.php';

$page = $objDb->select('SELECT P.id AS PID, C.id AS CID, P.*,C.*
                                FROM pages P
                                LEFT JOIN page_content C ON P.id = C.id_page
                                WHERE P.url_slug = :url_slug',
                                    array(':url_slug' => $_GET['page']));
if(isset($page[0]['PID'])) {
    $page = $page[0];

    $db_res = $objDb->select('SELECT * FROM pages
                            WHERE id < :id AND status = "published"
                            AND id_parent_page != 0
                            AND has_child != "yes"
                            ORDER BY id DESC LIMIT 1',
                                array(
                                    ':id' => $page['PID'],
                                ));
    if(empty($db_res[0]['id'])) {
        $db_res = $objDb->select('SELECT * FROM pages
                            WHERE status = "published"
                            AND id_parent_page != 0
                            AND has_child != "yes" ORDER BY id DESC LIMIT 1');
    }
    $prev = !empty($db_res[0]['id']) ? '<a href="' . "{$routes['base']}/{$db_res[0]['url_slug']}" . '"><button class="float-left btn btn-outline-secondary">&laquo; Prev</button></a>' : '';

    $db_res = $objDb->select('SELECT * FROM pages
                            WHERE id > :id AND status = "published"
                            AND id_parent_page != 0
                            AND has_child != "yes"
                            ORDER BY id LIMIT 1',
                                array(
                                    ':id' => $page['PID'],
                                ));
    if(empty($db_res[0]['id'])) {
        $db_res = $objDb->select('SELECT * FROM pages
                            WHERE status = "published"
                            AND id_parent_page != 0
                            AND has_child != "yes" ORDER BY id LIMIT 1');
    }
    $next = !empty($db_res[0]['id']) ? '<a style="float:right" href="' . "{$routes['base']}/{$db_res[0]['url_slug']}" . '"><button class="float-left btn btn-outline-secondary">Next &raquo;</button></a>' : '';

    $meta_data['title'] = !empty($page['meta_title']) ? "{$page['meta_title']} | " : "{$page['title']} | ";
    $meta_data['keywords'] = !empty($page['meta_keywords']) ? $page['meta_keywords'] : $page['title'];

    $temp = $page['content'];
    $temp = preg_replace('/^<(h1|h2|h3)(.*?)">(.*?)<\/(h1|h2|h3)>/s', '', $temp);

    $meta_data['description'] = !empty($page['meta_description']) ? $page['meta_description'] : htmlentities(implode(' ', array_slice(explode(' ', preg_replace('/\s+/', ' ', html_entity_decode(strip_tags($temp)))), 0, 50)));

    $contentFile = 'page_content_tpl.php';
}
else {
    redirectPage($routes['error404']);
}

require_once $config['paths']['config'] . '/exit.php';

?>
