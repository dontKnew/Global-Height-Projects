<?php

require_once dirname(__FILE__) . '/config/common.php';

authWall();

if (isset($_POST['submit'])) {
//     $rules['user_fname'] = 'required';
//     $rules['user_lname'] = 'required';
    $rules['user_email'] = 'required|email';
    $rules['user_username'] = 'required|min:3';
    $rules['user_password'] = 'min:6|max:20';
    $rules['confirm_password'] = 'same:user_password';

    $validation = $validator->validate($_POST, $rules);
    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
    }
    else {
        $res = $objDb->select('SELECT user_id FROM se_users
                                WHERE user_username = :uname AND user_id != :user_id',
                                array(':uname' => $_POST['user_username'],
                                      ':user_id' => $_SESSION['id']));

        $res_1 = $objDb->select('SELECT user_id FROM se_users
                                 WHERE user_email = :email AND user_id != :user_id',
                                        array(':email' => $_POST['user_email'],
                                              ':user_id' => $_SESSION['id']));
        if(isset($res[0]['user_id'])) {
            $response['user_username'] = 'This username is already taken';
        }
        else if(isset($res_1[0]['user_id'])) {
            $response['user_email'] = 'This email is already taken';
        }
        else {
            $extra_field = '';
            $data = array(  ':user_username' => $_POST['user_username'],
                            ':user_email' => $_POST['user_email'],
                            ':user_fname' => $_POST['user_fname'],
                            ':user_lname' => $_POST['user_lname'],
                            ':user_id' => $_SESSION['id']);

            if(!empty($_POST['user_password']) && !empty($_POST['confirm_password'])) {
                $data[':user_password'] = sha1($_POST['user_password']);
                $extra_field = ', user_password = :user_password';
            }

            $objDb->select('UPDATE se_users SET
                        user_email = :user_email,
                        user_fname = :user_fname,
                        user_lname = :user_lname,
                        user_username = :user_username
                        ' . $extra_field . '
                        WHERE user_id = :user_id',
                        $data);

            redirectPage($routes['mypage'], 'Profile has been updated successfully!', false);
        }
    }
}

$res = $objDb->select('SELECT * FROM se_users WHERE user_id = :id', array(':id' => $_SESSION['id']));
$db_detail = $res[0];

$contentFile = 'mypage_tpl.php';

require_once $config['paths']['config'] . '/exit.php';

?>
