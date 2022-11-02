<?php

require_once 'env.php';
require_once 'config.' . ENVIRONMENT . '.php';

session_name('MSSESSIONID');
session_start();

$base = realpath(dirname(__file__) . '/../');

$config['paths'] = [
                    'base'              =>  $base,
                    'resources'         =>  $base . '/resources',
                    'templates'         =>  $base . '/resources/templates',
                    'app_templates'     =>  $base . '/resources/templates/app',
                    'admin_templates'   =>  $base . '/resources/templates/admin',
                    'config'            =>  $base . '/config',
                    'classes'           =>  $base . '/app/classes',
                    'helpers'           =>  $base . '/app/helpers',
                    'vendor'            =>  $base . '/vendor',
                    'admin_classes'     =>  $base . '/app/classes/admin',
                    'assets'            =>  $base . '/assets',
            ];

$config['language'] = 'en';

if(!empty($_COOKIE['site_language']) && is_dir(mb_strtolower($_COOKIE['site_language']))) {
    $config['language'] = mb_strtolower($_COOKIE['site_language']);
}

require_once $config['paths']['classes'] . '/DatabaseUtils.class.php';
$objDb = new DatabaseUtils($config['db']['name'], $config['db']['host'], $config['db']['user'], $config['db']['password']);

require_once $config['paths']['helpers'] . '/functions.php';

loadSiteSettings();

require_once $config['paths']['helpers'] . '/validation.php';
require_once $config['paths']['helpers'] . '/routes.php';
require_once $config['paths']['vendor'] . '/PHPMailer-master/src/Exception.php';
require_once $config['paths']['vendor'] . '/PHPMailer-master/src/PHPMailer.php';
require_once $config['paths']['vendor'] . '/PHPMailer-master/src/SMTP.php';

//require_once $config['paths']['resources'] . '/lang/' . $config['language'] . '/lang.php';

$config['guest_pages'] = [
//                         'index_tpl.php',
//                         'contact_us_tpl.php',
//                         'faq_tpl.php',
//                         'terms_of_services_tpl.php',
//                         'privacy_policy_tpl.php',
                    ];

$headerMenu = loadHeaderMenu();
$footerMenu = loadFooterMenu();

// echo '<pre>';print_r($headerMenu);exit;
define('FACEBOOK_CLIENT_ID', '585801035718732');
define('FACEBOOK_CLIENT_SECRET', '5bbd2925a0b65fbae1a90ae49d505cf3');
define('FACEBOOK_REDIRECT_URL', $routes['base'] . '/fb.php');
define('FACEBOOK_GRAPH_VERSION', 'v10.0');

define('GOOGLE_URI', 'https://accounts.google.com/o/oauth2/auth');
define('GOOGLE_CLIENT_ID', '889278932615-ae5lhnrtci0gt2nskbu44ecrs3om5na2.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'XlWOxtKxEBzIHOEiFkqJex5b');
define('GOOGLE_REDIRECT_URL', $routes['base'] . '/google.php');

$config['site_settings']['g_recaptcha_v2_key'] = '6Lf7_PwcAAAAAE2ysSOkrv_n8SOSd_XQGD2JALQL';
$config['site_settings']['g_recaptcha_v2_secret'] = '6Lf7_PwcAAAAAEmYyRmAqbZc723rAtQy9m4b-Qj8';

$meta_data = array(
                    'title'         => '',
                    'keywords'      => '',
                    'description'   => '',
                    );

?>
