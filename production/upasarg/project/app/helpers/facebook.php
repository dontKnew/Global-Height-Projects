<?php

require_once $config['paths']['vendor'] . '/autoload.php';

$facebook = new Facebook\Facebook([
	'app_id' => FACEBOOK_CLIENT_ID,
	'app_secret' => FACEBOOK_CLIENT_SECRET,
	'default_graph_version' => FACEBOOK_GRAPH_VERSION,
	'persistent_data_handler' => 'session',
]);

return $facebook;

?>
