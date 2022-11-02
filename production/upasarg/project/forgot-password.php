<?php

require_once dirname(__FILE__) . '/config/common.php';

$errors = array();
$response = array(
                    'success' => 0,
                    'redirect' => 0,
                    'message' => ''
                );

if(isset($_SESSION['id'])) {
    $response['redirect'] = 1;
}
else {
    $rules['email'] = 'required|email';

    $validation = $validator->validate($_POST, $rules);

    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
    }
    else {
        $res = $objDb->select('SELECT user_id FROM se_users
                                    WHERE user_email = :email', array(':email' => $_POST['email']));

        if(isset($res[0]['user_id'])) {
            $new_password = randomPassword();
            $mail = array();
            $mail['to'] = $_POST['email'];
            $mail['subject'] = 'Reset Password - ' . $config['site_settings']['brand_name'];
            $mail['body'] = 'Hello' . "<br><br>";
            $mail['body'] .= 'Your new password for <a href="' . $routes['base'] . '">' . $config['site_settings']['site_name'] . '</a>';
            $mail['body'] .= ' is ' . "<br><br><b>" . $new_password . "</b><br><br>";
            $mail['body'] .= 'Thank You';
            $mail['headers'] = 'MIME-Version: 1.0' . "\r\n" . 'Content-type:text/html;charset=UTF-8' . "\r\n";
            $mail['headers'] .= 'From: <' . $config['reply_to'] . '>' . "\r\n";
            @call_user_func_array('mail', $mail);

            $objDb->update('UPDATE se_users SET user_password = :new_password
                            WHERE user_id = :id', array(':id' => $res[0]['user_id'], ':new_password' => sha1($new_password)));
            $response['success'] = 1;
            $response['message'] = 'Please follow the instruction sent to the email to reset your password';
        }
        else {
            $response['message'] = 'Email is not registered with us';
        }
    }
}

if(count($errors)) {
    $response['message'] = implode(', ', $errors);
}

echo json_encode($response);
exit;

?>
