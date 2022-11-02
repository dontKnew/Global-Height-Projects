<?php

require_once dirname(__FILE__) . '/config/common.php';

authWall();

$contentFile = 'settings_tpl.php';

require_once $config['paths']['config'] . '/exit.php';

?>
