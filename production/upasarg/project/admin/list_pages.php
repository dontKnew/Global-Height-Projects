<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();

$status = array('published', 'paused');

if(!empty($_GET['id']) && !empty($_GET['action']) && $_GET['action'] == 'delete') {
    $objDb->delete("DELETE FROM pages WHERE id = :id", array(':id' => $_GET['id']));

    redirectPage($routes['admin_list_pages'], 'Data deleted successfully', false);
}

if(isset($_GET['status']) && isset($_GET['id']) && in_array($_GET['status'], $status)) {
    $objDb->update('UPDATE pages SET status = :status WHERE id = :id',
                    array(':id' => $_GET['id'], ':status' => $_GET['status']));

    redirectPage($routes['admin_list_pages'], 'Status changed successfully', false);
}

$data = $objDb->select('SELECT * FROM pages ORDER BY id DESC');

$contentFile = 'list_pages_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
