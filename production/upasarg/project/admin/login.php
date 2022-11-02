<?php

require_once dirname(__FILE__) . '/../config/common.php';

if(isset($_SESSION['admin_username'])) {
    redirectPage($routes['admin_dashboard']);
}

require_once $config['paths']['admin_classes'] . '/Auth.class.php';
$auth = new Auth();
$errors = [];

if(isset($_POST['submit'])) {
    $auth->login();
}

$contentFile = 'login_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';
