<?php

require_once dirname(__FILE__) . '/../config/common.php';

if(isset($_SESSION['admin_username'])) {
    redirectPage($routes['admin_dashboard']);
}

require_once $config['paths']['admin_classes'] . '/Auth.class.php';
$auth = new Auth();
$errors = [];

if(isset($_POST['submit']) && isset($_POST['key'])) {
    $success = $auth->resetPassword($_POST['key']);
}
else if(!empty($_GET['token'])) {
    $user = $objDb->select('SELECT * FROM admin
                            WHERE status="active"
                            AND MD5(CONCAT("resetadpwd' . $config['site_settings']['salt'] . '", id)) = :token',
                            array(':token' => $_GET['token']));

    if(!isset($user[0]['id'])) {
        redirectPage($routes['error400']);
    }
} else {
    redirectPage($routes['error400']);
}

$contentFile = 'reset_password_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
