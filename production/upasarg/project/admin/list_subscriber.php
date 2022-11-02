<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();

$status = array('verified', 'unverified');

if(!empty($_GET['id']) && !empty($_GET['action']) && $_GET['action'] == 'delete') {
    $objDb->delete("DELETE FROM subscriber WHERE id = :id", array(':id' => $_GET['id']));

    redirectPage($routes['admin_list_subscriber'], 'Data deleted successfully', false);
}

if(isset($_GET['status']) && isset($_GET['id']) && in_array($_GET['status'], $status)) {
    $objDb->update('UPDATE subscriber SET status = :status WHERE id = :id',
                    array(':id' => $_GET['id'], ':status' => $_GET['status']));

    redirectPage($routes['admin_list_subscriber'], 'Status changed successfully', false);
}

$data = $objDb->select('SELECT * FROM subscriber ORDER BY id DESC');

$contentFile = 'list_subscriber_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
