<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();

$status = array('published', 'paused');

if(!empty($_GET['id']) && !empty($_GET['action']) && $_GET['action'] == 'delete') {
    $objDb->delete("DELETE FROM news WHERE id = :id", array(':id' => $_GET['id']));

    redirectPage($routes['admin_list_news'], 'Data deleted successfully', false);
}

if(isset($_GET['status']) && isset($_GET['id']) && in_array($_GET['status'], $status)) {
    $objDb->update('UPDATE news SET status = :status WHERE id = :id',
                    array(':id' => $_GET['id'], ':status' => $_GET['status']));

    redirectPage($routes['admin_list_news'], 'Status changed successfully', false);
}

$data = $objDb->select('SELECT * FROM news ORDER BY id DESC');

$contentFile = 'list_news_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
