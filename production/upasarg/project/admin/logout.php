<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();

require_once $config['paths']['admin_classes'] . '/Auth.class.php';
$auth = new Auth();
$auth->logout();

require_once $config['paths']['config'] . '/admin_exit.php';
