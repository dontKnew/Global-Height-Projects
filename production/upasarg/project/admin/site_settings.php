<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();

$contentFile = 'site_settings_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
