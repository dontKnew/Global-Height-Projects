<?php

require_once dirname(__FILE__) . '/config/common.php';

$news = $objDb->select('SELECT * FROM news WHERE status = "published" ORDER BY id DESC');

$contentFile = 'news_events_tpl.php';

$meta_data['title'] = "News & Events | ";
$meta_data['description'] = 'News & Events';

require_once $config['paths']['config'] . '/exit.php';

?>
