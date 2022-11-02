<?php

require_once dirname(__FILE__) . '/../config/common.php';

if(!empty($_SESSION['admin_username'])) {
    redirectPage($routes['admin_dashboard']);
}
else {
    redirectPage($routes['admin_login']);
}
