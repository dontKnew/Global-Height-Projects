<?php

require_once dirname(__FILE__) . '/config/common.php';

$search_cri = !empty($_GET['cri']) ? $_GET['cri'] : '';
$search_val = !empty($_GET['value']) ? $_GET['value'] : '';

if(empty($search_cri) || empty($search_val)) {
    redirectPage($routes['base']);
}

if($search_cri == 'author') {
    $user = $objDb->select("SELECT user_id, user_username
                            FROM se_users
                            WHERE user_username = '{$search_val}'");
    if(empty($user[0]['user_id'])) {
        redirectPage($routes['base']);
    }
    $user = $user[0];
}

$rec_per_page = 20;
$base_url = "{$routes['base']}/author/{$user['user_username']}";

$tot_res = $objDb->select("SELECT COUNT(id) AS TOTAL
                            FROM articles
                            WHERE status='active'
                            AND user_id = {$user['user_id']}
                            AND title != ''");

$total = !empty($tot_res[0]['TOTAL']) ? $tot_res[0]['TOTAL'] : 0;

require_once $config['paths']['vendor'] . '/stefangabos/zebra_pagination/Zebra_Pagination.php';
$pagination = new Zebra_Pagination();
$pagination->selectable_pages(6);
$pagination->records($total);
$pagination->base_url($base_url, false);
$pagination->records_per_page($rec_per_page);
$start = (($pagination->get_page() - 1) * $rec_per_page);

$entries = $objDb->select("SELECT A.* FROM articles A
                            WHERE A.status = 'active'
                            AND user_id = {$user['user_id']}
                            AND A.title != ''
                            ORDER BY A.article_date DESC
                            LIMIT {$start}, {$rec_per_page}");
$contentFile = 'listing_tpl.php';

$meta_data['title'] = "{$user['user_username']} | {$config['site_settings']['brand_name']}";
$meta_data['keywords'] = "{$user['user_username']} ";
$meta_data['description'] = "Read notes by {$user['user_username']}";;

require_once $config['paths']['config'] . '/exit.php';

?>
