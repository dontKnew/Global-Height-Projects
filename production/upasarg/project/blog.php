<?php

require_once dirname(__FILE__) . '/config/common.php';

if(isset($_GET['title'])) {
    $data = $objDb->select('SELECT * FROM blog
                            WHERE status = "active"
                            AND title_slug = :title_slug', array(':title_slug' => $_GET['title']));
    if(!isset($data[0]['blog_id'])) {
        redirectPage($routes['error404']);
    }

    $data = $data[0];

    $db_res = $objDb->select('SELECT * FROM blog
                            WHERE blog_id < :id AND status = "active"
                            ORDER BY blog_id DESC LIMIT 1',
                                array(
                                    ':id' => $data['blog_id'],
                                ));
    if(empty($db_res[0]['blog_id'])) {
        $db_res = $objDb->select('SELECT * FROM blog WHERE status = "active" ORDER BY blog_id DESC LIMIT 1');
    }
    $prev = !empty($db_res[0]['blog_id']) ? '<a href="' . "{$routes['blog']}/{$db_res[0]['title_slug']}" . '"><button class="float-left btn btn-outline-secondary">&laquo; Prev</button></a>' : '';

    $db_res = $objDb->select('SELECT * FROM blog WHERE blog_id > :id AND status = "active" ORDER BY blog_id LIMIT 1',
                                array(
                                    ':id' => $data['blog_id'],
                                ));
    if(empty($db_res[0]['blog_id'])) {
        $db_res = $objDb->select('SELECT * FROM blog WHERE status = "active" ORDER BY blog_id LIMIT 1');
    }
    $next = !empty($db_res[0]['blog_id']) ? '<a style="float:right" href="' . "{$routes['blog']}/{$db_res[0]['title_slug']}" . '"><button class="float-left btn btn-outline-secondary">Next &raquo;</button></a>' : '';

    $meta_data['title'] = !empty($data['meta_title']) ? "{$data['meta_title']} | " : "{$data['title']} - ";
    $meta_data['keywords'] = !empty($data['meta_keywords']) ? $data['meta_keywords'] : $data['title'];
    $meta_data['description'] = !empty($data['meta_description']) ? $data['meta_description'] : htmlentities(implode(' ', array_slice(explode(' ', preg_replace('/\s+/', ' ', strip_tags($data['content']))), 0, 50)));

    $contentFile = 'blog_detail_tpl.php';
}
else {
    $rec_per_page = 10;
    $tot_res = $objDb->select('SELECT COUNT(blog_id) AS TOTAL FROM blog WHERE status = "active"');

    $total = !empty($tot_res[0]['TOTAL']) ? $tot_res[0]['TOTAL'] : 0;

    require_once $config['paths']['vendor'] . '/stefangabos/zebra_pagination/Zebra_Pagination.php';
    $pagination = new Zebra_Pagination();
    $pagination->selectable_pages(6);
    $pagination->records($total);
    $pagination->records_per_page($rec_per_page);
    $start = (($pagination->get_page() - 1) * $rec_per_page);

    $data = $objDb->select("SELECT * FROM blog WHERE status = 'active' ORDER BY blog_id DESC LIMIT {$start}, {$rec_per_page}");
    $contentFile = 'blog_tpl.php';
}

require_once $config['paths']['config'] . '/exit.php';

?>
