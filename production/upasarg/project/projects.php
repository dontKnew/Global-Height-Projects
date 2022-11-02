<?php

require_once dirname(__FILE__) . '/config/common.php';

$contentFile = 'projects_tpl.php';

$meta_data['keywords'] = $config['site_settings']['brand_name'] . ' Projects';
$meta_data['description'] = $config['site_settings']['brand_name'] . ' Projects';

require_once $config['paths']['config'] . '/exit.php';

?>
