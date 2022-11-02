<?php

require_once dirname(__FILE__) . '/config/common.php';

authWall();

$articles = $objDb->select('SELECT * FROM se_blogentries WHERE blogentry_user_id = :id', array(':id' => $_SESSION['id']));

$contentFile = 'my_articles_tpl.php';

require_once $config['paths']['config'] . '/exit.php';

?>
