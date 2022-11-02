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
    $rules['password'] = 'required|min:6|max:10';
    $rules['email'] = 'required';

    $validation = $validator->validate($_POST, $rules);

    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
    }
    else {
        $res = $objDb->select('SELECT * FROM se_users
                                WHERE user_email = :email
                                OR user_username = :uname', array(':email' => $_POST['email'],
                                                                       ':uname' => $_POST['email']));

        if(!empty($res[0]['user_id']) && !empty($res[0]['user_password']) && sha1($_POST['password']) == $res[0]['user_password']) {
            $response['success'] = 1;
            $_SESSION['id'] = $res[0]['user_id'];
            $_SESSION['fname'] = $res[0]['user_fname'];
//             $_SESSION['credits'] = $res[0]['credits'];
        }
        else {
            $response['message'] = 'Sorry, Email or password does not match';
        }
    }
}

if(count($errors)) {
    $response['message'] = implode(', ', $errors);
}

echo json_encode($response);
exit;

?>
