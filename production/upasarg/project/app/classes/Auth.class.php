<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Auth
{
    public function __construct()
    {
    }

    public function signup()
    {
        global $objDb, $routes, $config, $validator, $errors;

        $rules['password'] = 'required|min:6|max:10';
        $rules['last_name'] = 'required';
        $rules['first_name'] = 'required';
        $rules['email'] = 'required|email';

        $instagram_id = '';
        if(isset($_POST['acc_type']) && $_POST['acc_type'] == 'influencer') {
            $rules['instagram_id'] = 'required';
            $instagram_id = $_POST['instagram_id'];
        }

        $validation = $validator->validate($_POST, $rules);
        if ($validation->fails()) {
            $errors = $validation->errors()->firstOfAll();
        }
        else {

            if($_POST['acc_type'] == 'influencer') {
                $res = $objDb->select('SELECT id FROM influencer WHERE email = :email',
                                            array(':email' => $_POST['email']));
                if(isset($res[0]['id'])) {
                    $errors['email'] = 'Email already registered. Please choose another email';
                    return false;
                }
                $res = $objDb->select('SELECT id FROM influencer WHERE instagram_id = :instagram_id',
                                        array(':instagram_id' => $_POST['instagram_id']));
                if(isset($res[0]['id'])) {
                    $errors['instagram_id'] = 'This instagram account is already registered';
                    return false;
                }
            }
            else {
                $res = $objDb->select('SELECT id FROM fan WHERE email = :email',
                                            array(':email' => $_POST['email']));
                if(isset($res[0]['id'])) {
                    $errors['email'] = 'Email already registered. Please choose another email';
                    return false;
                }
                $res = $objDb->select('SELECT id FROM fan WHERE instagram_id = :instagram_id',
                                        array(':instagram_id' => $_POST['instagram_id']));
                if(isset($res[0]['id'])) {
                    $errors['instagram_id'] = 'This instagram account is already registered';
                    return false;
                }
            }

            $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $data = array(
                            ':last_name' => $_POST['last_name'],
                            ':first_name' => $_POST['first_name'],
                            ':password' => $password_hash,
                            ':email' => $_POST['email'],
                            ':date' => date('Y-m-d H:i:s'),
                        );

            if($_POST['acc_type'] == 'influencer') {
                $data[':instagram_id'] = $instagram_id;
                $objDb->insert("INSERT INTO influencer (instagram_id, first_name, last_name, email, password, date_create)
                                VALUES (:instagram_id, :first_name, :last_name, :email, :password, :date)", $data);
            }
            else {
                $objDb->insert("INSERT INTO fan (first_name, last_name, email, password, date_create)
                                VALUES (:first_name, :last_name, :email, :password, :date)", $data);
            }

            $user_id = $objDb->lastInsertId();
            if($user_id && $_POST['acc_type'] == 'fan') {
                $activation_link = $routes['activate_account'] . '?token=' . md5($config['site_settings']['salt'] . $user_id);
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->SMTPDebug = 0;
                $mail->Host = $config['site_settings']['smtp_host'];
                $mail->Port = $config['site_settings']['smtp_port'];
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->Username = $config['site_settings']['smtp_user'];
                $mail->Password = $config['site_settings']['smtp_pass'];
                $mail->setFrom($config['site_settings']['email_from'], $config['site_settings']['site_name']);
                $mail->addAddress($_POST['email'], $_POST['first_name']);
                $mail->Subject = 'Welcome to ' . $config['site_settings']['site_name'];

                ob_start();
                require_once $config['paths']['templates'] . '/mail/account_activation_mail_tpl.php';
                $msg_html = ob_get_clean();
                $mail->msgHTML($msg_html);

                if(!$mail->send()) {
                    die("Mailer Error: " . $mail->ErrorInfo);
                } else {
                    redirectPage($routes['login'], 'Sign up completed successfully', false);
                }
            }
            else {
                redirectPage($routes['login'], 'Thank You! We will review the information and get in touch with you soon', false);
            }
        }
    }

    public function activate()
    {
        global $objDb, $routes, $config;
        if(!empty($_GET['token'])) {

            $user_info = $objDb->select('SELECT id FROM fan WHERE status="pending"
                                        AND MD5(CONCAT("' . $config['site_settings']['salt'] . '", id)) = :token',
                                        array(':token' => $_GET['token']));

            if(!empty($user_info[0]['id'])) {
                $objDb->update('UPDATE fan
                                SET status="active"
                                WHERE id = :id', array(':id' => $user_info[0]['id']));

                redirectPage($routes['login'], 'You are all set to login!', false);
            }
        }
    }

    public function login()
    {
        global $objDb, $routes, $validator, $errors, $config;

        $rules['password'] = 'required';
        $rules['email'] = 'required|email';

        $validation = $validator->validate($_POST, $rules);
        if ($validation->fails()) {
            $errors = $validation->errors()->firstOfAll();
        }
        else {
            $table = isset($_POST['acc_type']) && $_POST['acc_type'] == 'influencer' ? 'influencer' : 'fan';
            $res = $objDb->select('SELECT * FROM ' . $table . '
                                        WHERE email = :email
                                        AND status = "active"', array(':email' => $_POST['email']));

            $user_info = !empty($res[0]['id']) ? $res[0] : array();

            if(isset($user_info['id']) && password_verify($_POST['password'], $user_info['password'])) {
                $_SESSION['user_id'] = $user_info['id'];
                $_SESSION['user_email'] = $user_info['email'];
                $_SESSION['user_status'] = $user_info['status'];
                $_SESSION['first_name'] = $user_info['first_name'];
                $_SESSION['last_name'] = $user_info['last_name'];
                if($table == 'influencer') {
                    $_SESSION['instagram_id'] = $user_info['instagram_id'];
                    $_SESSION['acc_type'] = 'influencer';
                }
                else {
                    $_SESSION['acc_type'] = 'fan';
                }

                $objDb->update('UPDATE ' . $table . '
                                SET last_login=:last_login,
                                last_login_ip=:last_login_ip
                                WHERE id = :id', array(':id' => $user_info['id'],
                                                       ':last_login' => date('Y-m-d H:i:s'),
                                                       ':last_login_ip' => $_SERVER['REMOTE_ADDR']));
                if(!empty($_SESSION['login_redirect']))
                    redirectPage($_SESSION['login_redirect']);
                else
                    redirectPage($routes['dashboard']);
            } else {
                $_SESSION['err_msg'] = 'Sorry, Email or password does not match';
            }
        }
    }

    function logout()
    {
        global $routes;
        foreach($_SESSION as $key => $val) {
            unset($_SESSION[$key]);
        }
        redirectPage($routes['login']);
    }

    function resetPassword($user_id)
    {
        global $objDb, $errors, $routes, $validator;

        $rules['password'] = 'required|min:6|max:10';

        $validation = $validator->validate($_POST, $rules);
        if ($validation->fails()) {
            $errors = $validation->errors()->firstOfAll();
        }
        else {
            if($user_id > 0) {
                $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $objDb->update('UPDATE fan
                                SET password=:password_hash
                                WHERE id = :id',
                                array(':id' => $user_id, ':password_hash' => $password_hash));
                redirectPage($routes['login'], 'Password reset successfully', false);
            } else {
                $_SESSION['err_msg'] = 'Opps! Something went wrong';
            }
        }
    }

    function forgotPassword()
    {
        global $objDb, $routes, $validator, $errors, $config;
        $rules['email'] = 'required|email';

        $validation = $validator->validate($_POST, $rules);
        if ($validation->fails()) {
            $errors = $validation->errors()->firstOfAll();
        }
        else {
            $res = $objDb->select('SELECT * FROM fan
                                         WHERE email = :email
                                         AND status = "active"', array(':email' => $_POST['email']));
            $user_info = !empty($res[0]['id']) ? $res[0] : array();
            if(isset($user_info['id'])) {
                $reset_link = $routes['reset_password'] . '?token=' . md5('resetpwd' . $config['site_settings']['salt'] . $user_info['id']);

                $mail = new PHPMailer;
                $mail->isSMTP(); 
                $mail->SMTPDebug = 0;
                $mail->Host = $config['site_settings']['smtp_host'];
                $mail->Port = $config['site_settings']['smtp_port'];
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->Username = $config['site_settings']['smtp_user'];
                $mail->Password = $config['site_settings']['smtp_pass'];
                $mail->setFrom($config['site_settings']['email_from'], $config['site_settings']['site_name']);
                $mail->addAddress($_POST['email'], $user_info['first_name']);
                $mail->Subject = 'Reset your ' . $config['site_settings']['site_name'] . ' password';

                ob_start();
                require_once $config['paths']['templates'] . '/mail/reset_password_mail_tpl.php';
                $msg_html = ob_get_clean();
                $mail->msgHTML($msg_html);

                if(!$mail->send()) {
                    die("Mailer Error: " . $mail->ErrorInfo);
                } else {
                    redirectPage($routes['forgot_password'], 'Please follow the email sent to you to reset your password', false);
                }
            } else {
                $errors['email'] = 'Sorry, this email is not registered with us';
            }
        }
    }
}
?>
