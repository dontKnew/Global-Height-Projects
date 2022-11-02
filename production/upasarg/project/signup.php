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
    $rules['username'] = 'required';
    $rules['password'] = 'required|between:6,30';
    $rules['r-password'] = 'required|same:password';

    $validation = $validator->validate($_POST, $rules);

    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
    }
    else if($_POST['password'] != $_POST['r-password']) {
        $response['message'] = 'Both password does not match';
    }
    else {
        $res = $objDb->select('SELECT user_id FROM se_users
                                WHERE user_username = :uname', array(':uname' => $_POST['username']));
        $res_1 = $objDb->select('SELECT user_id FROM se_users
                                    WHERE user_email = :email', array(':email' => $_POST['email']));

        if(isset($res[0]['user_id'])) {
            $response['message'] = 'This username is already taken';
        }
        else if(isset($res_1[0]['user_id'])) {
            $response['message'] = 'This email is already taken';
        }
        else {
            $data = array(
                            ':user_password' => sha1($_POST['password']),
                            ':user_email' => $_POST['email'],
                            ':user_username' => $_POST['username'],
                            ':user_signupdate' => time(),
                            ':user_ip_signup' => $_SERVER['REMOTE_ADDR']
                            );

            $objDb->insert("INSERT INTO se_users (user_email, user_username, user_password, user_signupdate, user_ip_signup)
                                    VALUES (:user_email, :user_username, :user_password, :user_signupdate, :user_ip_signup)", $data);

            $user_id = $objDb->lastInsertId();
            if($user_id > 0) {
                $_SESSION['display']                = 1;
                $_SESSION['sname']                  = '';
                $_SESSION['username']               = $_POST['username'];
                $_SESSION['email']                  = $_POST['email'];
                $_SESSION['id']                     = $user_id;
                $_SESSION['is_user_email_verified'] = 'N';
                $response['success'] = 1;
                $response['message'] = 'Your account has been created';
            }
            else {
                $response['message'] = 'Sorry, some problem occurred. Please try again.';
            }
        }
    }
}

if(count($errors)) {
    $response['message'] = reset($errors);
}

echo json_encode($response);
exit;

?>
