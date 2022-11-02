<?php

class Auth
{
    public function __construct()
    {
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
            $res = $objDb->select('SELECT * FROM admin
                                        WHERE email = :email
                                        AND status = "active"', array(':email' => $_POST['email']));

            $user_info = !empty($res[0]['id']) ? $res[0] : array();

            if(isset($user_info['id']) && password_verify($_POST['password'], $user_info['password'])) {
                $_SESSION['admin_role'] = $user_info['role'];
                $_SESSION['admin_id'] = $user_info['id'];
                $_SESSION['admin_username'] = $user_info['username'];
                $_SESSION['admin_email'] = $user_info['email'];
                $objDb->update('UPDATE admin SET last_login = :last_login,
                                                last_login_ip = :last_login_ip
                                            WHERE id = :user_id', array(':last_login' => date('Y-m-d H:i:s'),
                                                                        ':last_login_ip' => $_SERVER['REMOTE_ADDR'],
                                                                        ':user_id' => $user_info['id']));
                redirectPage($routes['admin_dashboard']);
            }
            else {
                $_SESSION['err_msg'] = 'Username or password does not match';
            }
        }
	}

	public function logout()
	{
        global $routes;
        unset($_SESSION['admin_role'], $_SESSION['admin_id'], $_SESSION['admin_username']);
        redirectPage($routes['admin_login']);
	}

    function resetPassword($user_id)
    {
        global $objDb, $errors, $routes;
        trimArray($_POST);

        if($user_id > 0) {
            $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $objDb->update('UPDATE admin
                            SET password=:password_hash
                            WHERE id = :id', array(':id' => $user_id, ':password_hash' => $password_hash));
            redirectPage($routes['admin_login'], 'Password reset successfully', false);
        } else {
            $errors['password'] = 'Opps! Something went wrong';
        }
    }

    function forgotPassword()
    {
        global $objDb, $routes, $errors, $config, $validator;
        $rules['email'] = 'required|email';

        $validation = $validator->validate($_POST, $rules);
        if ($validation->fails()) {
            $errors = $validation->errors()->firstOfAll();
        }
        else {
            $res = $objDb->select('SELECT * FROM admin
                                         WHERE email = :email
                                         AND status = "active"', array(':email' => $_POST['email']));
            $user_info = !empty($res[0]['id']) ? $res[0] : array();
            if(isset($user_info['id'])) {

                $info['reset_link'] = $routes['admin_reset_password'] . '?token=' . md5('resetadpwd' . $config['site_settings']['salt'] . $user_info['id']);
                $info['name'] = $user_info['email'];
                $info['to'] = $_POST['email'];
                $info['subject'] = 'Reset your ' . $config['site_settings']['site_name'] . ' admin password';
                $info['template'] = 'mail/reset_password_mail_tpl.php';
                $result = sendEmail($info);

                if($result === TRUE) {
                    redirectPage($routes['admin_forgot_password'], 'Please follow the email sent to you to reset your password', false);
                }
                $errors['email'] = $result;
            } else {
                $errors['email'] = 'Sorry, this email is not registered with us';
            }
        }
    }
}

?>
