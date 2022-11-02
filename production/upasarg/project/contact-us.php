<?php

require_once dirname(__FILE__) . '/config/common.php';

if(count($_POST) && isset($_POST['email'])) {
    $rules['email'] = 'required|email';
    $rules['full_name'] = 'required';
    $rules['phone'] = 'required';
    $rules['subject'] = 'required';
    $rules['message'] = 'required';
    $rules['g-recaptcha-response'] = 'required';

    $validation = $validator->validate($_POST, $rules);
    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
        echo implode(', ', $errors);
        exit;
    }
    else if(!googleCaptchaVerification()) {
        echo 'The captcha validation code does not match';
        exit;
    }
    else {
        $info['to'] = $config['site_settings']['email_from'];
//         $info['to'] = 'fvmfvm.1985@gmail.com';
        $info['name'] = 'Admin';
        $info['phone'] = $_POST['phone'];
        $info['subject'] = $_POST['subject'];
        $info['template'] = 'mail/contact_us_mail_tpl.php';
        if(sendEmail($info) == 1)
        echo 'OK';
        exit;
    }
}

$contentFile = 'contact_us_tpl.php';

$meta_data['title'] = "Contact Us | ";
$meta_data['description'] = 'Contact Us';

require_once $config['paths']['config'] . '/exit.php';

?>
