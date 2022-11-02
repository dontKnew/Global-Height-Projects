<?php

require_once $config['paths']['vendor'] . '/autoload.php';

$googleClient = new Google_Client();

if (empty($googleClient->getClientId()))
	$googleClient->setClientId(GOOGLE_CLIENT_ID);

if (empty($googleClient->getClientSecret()))
	$googleClient->setClientSecret(GOOGLE_CLIENT_SECRET);

if (empty($googleClient->getRedirectUri()))
	$googleClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$googleClient->addScope('email');
$googleClient->addScope('profile');

return $googleClient;

?>
