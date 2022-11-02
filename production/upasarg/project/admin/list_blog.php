<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();

$detail = [];
$status = array('active', 'paused');
$data = $objDb->select('SELECT * FROM blog ORDER BY blog_id DESC');

if(isset($_GET['id'])) {
    foreach($data as $k => $v) {
        if($v['blog_id'] == $_GET['blog_id']) {
            $detail = $v;
        }
    }
}

if(isset($_GET['status']) && isset($_GET['blog_id'])) {
    $objDb->update('UPDATE blog SET status = :status WHERE blog_id = :blog_id',
                    array(':blog_id' => $_GET['blog_id'], ':status' => $_GET['status']));

    redirectPage($routes['admin_list_blog'], 'Status changed successfully', false);
}

$contentFile = 'list_blog_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
