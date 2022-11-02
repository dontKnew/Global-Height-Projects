<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function redirectPage($url, $msg = '', $isErr = true)
{
    if(!empty($msg)) {
        if($isErr) {
            $_SESSION['err_msg'] = $msg;
        }
        else {
            $_SESSION['suc_msg'] = $msg;
        }
    }

    header('Location: ' . $url);
    exit;
}

function trimArray($array)
{
    if(is_array($array)) {
        array_walk_recursive($array, function (&$val)
        {
            $val = trim($val);
        });
    }

    return $array;
}

function authWall($ajax = false)
{
    global $routes;

    if(!isset($_SESSION['id']) || $_SESSION['id'] < 1) {
        if($ajax) {
            echo json_encode(array('no_session' => true));
        }
        else {
            $_SESSION['login_redirect'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            redirectPage($routes['base']);
        }
        exit;
    }
}

function loadSiteSettings()
{
    global $config, $objDb;

    $settings = $objDb->select("SELECT * FROM site_settings");

    $config['site_settings']['salt'] = '$^2k1!';
    $config['site_settings']['currency_sign'] = '₹';
    $config['site_settings']['currency_code'] = 'INR';
    $config['site_settings']['rzp_api_key'] = 'rzp_test_1i5F4bbb1BrTAQ';
    $config['site_settings']['rzp_api_sec'] = 'ZICwswSrPGotdmb8j7QUK1V5';
    foreach($settings as $key => $value) {
        $config['site_settings'][$value['key_name']] = $value['value'];
    }
}

/**
 * Retrieving Old Input to repopulate the form fields after failed validation
 */
function old($input)
{
    global $db_detail;

    $old_val = isset($_REQUEST[$input]) ? $_REQUEST[$input] : (isset($db_detail[$input]) ? $db_detail[$input] : '');
    return $old_val;
}

function debugArray($arr)
{
    echo '<pre>';print_r($arr);exit;
}

function success_alert()
{
    if(!empty($_SESSION['suc_msg'])) {
        return '<div class="alert alert-success mt-2 border-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                    ' . $_SESSION['suc_msg'] . '
                </div>';
    }
    return '';
}

function error_alert()
{
    if(!empty($_SESSION['err_msg'])) {
        return '<div class="alert alert-danger mt-2 border-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                    ' . $_SESSION['err_msg'] . '
                </div>';
    }
    return '';
}

function error($field)
{
    global $errors;
    if(!empty($errors[$field])) {
        return '<ul class="parsley-errors-list filled" id="parsley-id-1" aria-hidden="false"><li class="parsley-required">' . $errors[$field] . '</li></ul>';
    }
}

function adminAuthWall()
{
    global $routes;

    if(!isset($_SESSION['admin_id'])) {
        redirectPage($routes['admin_login']);
    }
}

function sendEmail($info)
{
    global $config, $routes;

    $mail = new PHPMailer;
    try {
        $mail->CharSet = PHPMailer::CHARSET_UTF8;
        $mail->From = $config['site_settings']['email_from'];
        $mail->FromName = $config['site_settings']['brand_name'];
        $mail->addReplyTo($config['site_settings']['reply_to']);
        $mail->addAddress($info['to'], $info['name']);
        $mail->isHTML(TRUE);
        $mail->Subject = $info['subject'];

        ob_start();
        require_once $config['paths']['templates'] . '/' . $info['template'];
        $mail->Body = ob_get_clean();

        if($mail->send()) {
            return TRUE;
        }
    }
    catch (phpmailerException $e) {
        return $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        return $e->getMessage(); //Boring error messages from anything else!
    }

    return FALSE;
}


function adminMenu() {
    global $routes;
    $menu = array();

    $menu['dashboard']['class'] = 'fa fa-home';
    $menu['dashboard']['url'] = $routes['admin_dashboard'];
    $menu['dashboard']['caption'] = 'Dashboard';

    $menu['pages']['class'] = 'fa fa-file';
    $menu['pages']['url'] = $routes['admin_list_pages'];
    $menu['pages']['caption'] = 'Pages';

    $menu['blogs']['class'] = 'fa fa-pencil';
    $menu['blogs']['url'] = $routes['admin_list_blogs'];
    $menu['blogs']['caption'] = 'Blogs';

    $menu['news']['class'] = 'fa fa-paperclip';
    $menu['news']['url'] = $routes['admin_list_news'];
    $menu['news']['caption'] = 'News';

    $menu['subscribers']['class'] = 'fa fa-envelope';
    $menu['subscribers']['url'] = $routes['admin_list_subscriber'];
    $menu['subscribers']['caption'] = 'Newsletter Subscribers';

    $menu['site_settings']['class'] = 'fa fa-cogs';
    $menu['site_settings']['url'] = $routes['admin_site_settings'];
    $menu['site_settings']['caption'] = 'Site Settings';

    $menu['logout']['class'] = 'fa fa-sign-out';
    $menu['logout']['url'] = $routes['admin_logout'];
    $menu['logout']['caption'] = 'Logout';

    return $menu;
}

function mySqlSlugify($field_nm)
{
    return "REPLACE(REPLACE(REPLACE(TRIM($field_nm), '(', ''), ')', ''), ' ', '-')";
}

function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

function loadHeaderMenu()
{
    global $objDb;
    $headerMenu = $idMap = array();

    $pages = $objDb->select("SELECT * FROM pages
                            WHERE status = 'published'
                            AND link_placement IN ('header', 'header-footer', 'all')
                            ORDER BY ordering");
//     foreach($pages as $page) {
//         if($page['id_parent_page'] == 0) {
//             $headerMenu[$page['url_slug']]['nav']['url'] = $page['url_slug'];
//             $headerMenu[$page['url_slug']]['nav']['title'] = $page['title'];
//             $idMap[$page['id']] = $page['url_slug'];
//             continue;
//         }
//     }
// 
//     foreach($pages as $page) {
//         if($page['id_parent_page'] != 0) {
//             $headerMenu[$idMap[$page['id_parent_page']]]['sub_nav'][] = array('url' => $page['url_slug'],
//                                                                                 'title' => $page['title']);
//         }
//     }
    foreach($pages as $page) {
        if($page['id_parent_page'] == 0) {
            $headerMenu[$page['id']] = array('url' => $page['url_slug'], 'title' => $page['title']);
        }
        if($page['has_child']) {
            foreach($pages as $page_l1) {
                if($page['id'] == $page_l1['id_parent_page']) {
                    $headerMenu[$page['id']]['child'][$page_l1['id']] = array('url' => $page_l1['url_slug'], 'title' => $page_l1['title']);
                    if($page_l1['has_child']) {
                        foreach($pages as $page_l2) {
                            if($page_l1['id'] == $page_l2['id_parent_page']) {
                                $headerMenu[$page['id']]['child'][$page_l1['id']]['child'][$page_l2['id']] = array('url' => $page_l2['url_slug'], 'title' => $page_l2['title']);
                            }
                        }
                    }
                }
            }
        }
    }

    foreach($headerMenu as $key => $menu) {
        if(!isset($menu['url'])) {
            unset($headerMenu[$key]);
        }
    }
// echo '<pre>';print_r($headerMenu);exit;
    return $headerMenu;
}

function loadFooterMenu()
{
    global $objDb;
    $footerMenu = $idMap = array();

    $pages = $objDb->select("SELECT * FROM pages
                            WHERE status = 'published'
                            AND link_placement IN ('footer', 'header-footer', 'all')
                            ORDER BY ordering");
    foreach($pages as $page) {
        if($page['id_parent_page'] == 0) {
            $footerMenu[$page['url_slug']]['nav']['url'] = $page['url_slug'];
            $footerMenu[$page['url_slug']]['nav']['title'] = $page['title'];
            $idMap[$page['id']] = $page['url_slug'];
            continue;
        }
    }

    foreach($pages as $page) {
        if($page['id_parent_page'] != 0) {
            $footerMenu[$idMap[$page['id_parent_page']]]['sub_nav'][] = array('url' => $page['url_slug'],
                                                                                'title' => $page['title']);
        }
    }

    return $footerMenu;
}

//$amount need to be in Paisa (1 rp = 100 paisa)
function addRzpCheckoutForm($amount = 100, $productName = 'Detox At Home') {
    global $config;
    $data = [
        "key"               => $config['site_settings']['rzp_api_key'],
        "amount"            => $amount,
        "name"              => $config['site_settings']['brand_name'],
        "description"       => $productName,
        "theme"             => [
        "color"             => "#F37254"
        ],
        "order_id"          => 123,//$razorpayOrderId,
    ];
    $json = json_encode($data);

    ob_start();
    require_once $config['paths']['templates'] . '/rzp_checkout_form_tpl.php';
    $html = ob_get_clean();
    return $html;
}

function googleCaptchaVerification($captchaType = 'v2')
{
    $gVerify = $status = 0;
    $arrResponse = '';
    if(!empty($_POST['g-recaptcha-response']))
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $GLOBALS['config']['site_settings']['g_recaptcha_v2_secret'] . '&response=' . $_POST['g-recaptcha-response'];
        $objCurl = curl_init();

        $opts = array(CURLOPT_URL            => $url,
                      CURLOPT_RETURNTRANSFER => 1,
                      CURLOPT_CONNECTTIMEOUT => 10,
                      CURLOPT_TIMEOUT        => 20);

        curl_setopt_array($objCurl, $opts);
        $arrResponse = curl_exec($objCurl);
        $status = curl_getinfo($objCurl, CURLINFO_HTTP_CODE);
        curl_close($objCurl);

        if(!empty($arrResponse))
        {
            $gCaptchaResponse = json_decode($arrResponse, true);

            //Match the hostname of the request initiater with the hostname returned in the response by Google
            if($gCaptchaResponse['success'] == 1 && !empty($gCaptchaResponse['hostname']) && ($_SERVER['HTTP_HOST'] == $gCaptchaResponse['hostname']))
                $gVerify = 1;

            unset($gCaptchaResponse);
        }
    }

    if(!in_array($status, array('200', '201')))
    {
        //When we dont get 200, 201 status, it can be any a issue on our end or user end.
        //Initially we are logging such cases and considering such case as successful attempt for better user experience
        $gVerify = 1;

        $msg = 'Google captcha verification error notificaiton<br><br></b>';
        $msg .= '<b>Captcha Type : </b>'.$captchaType.'<br>';
        $msg .= '<b>Response : </b>'.$arrResponse.'<br>';
        $msg .= '<b>Status : </b>'.$status.'<br>';
        $msg .= '<b>Post Data : </b><br>';
        foreach($_POST as $key=>$val)
        {
            $msg .= '<b>'.$key.'</b> => '.$val.'<br>';
        }

        //send data to webmaster
    }
    unset($arrResponse);

    return $gVerify;
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
