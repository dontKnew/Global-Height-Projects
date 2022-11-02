<?php

require_once dirname(__FILE__) . '/config/common.php';

if(!isset($_SESSION['id'])) {
    redirectPage($routes['base']);
}

foreach($_SESSION as $key => $val) {
    unset($_SESSION[$key]);
}

redirectPage($routes['base']);

?>
