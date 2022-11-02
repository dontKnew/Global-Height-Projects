<?php

require_once dirname(__FILE__) . '/config/common.php';

$errors = array();
$response = array(
                    'success' => 0,
                    'redirect' => 0,
                    'message' => ''
                );

if(count($_POST) && isset($_POST['email'])) {
    $rules['email'] = 'required|email';

    $validation = $validator->validate($_POST, $rules);
    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
    }
    else {
        $count = $objDb->select('SELECT COUNT(id) AS TOT FROM subscriber WHERE email = :email', array(':email' => $_POST['email']));
        // if already subscribed
        if($count[0]['TOT'] > 0)
        {
            $response['message'] = 'You have already subscribed';
        }
        else {
            $objDb->insert('INSERT INTO subscriber (email, date_create)
                            VALUES (:email, :date_create)',
                                array(':email' => $_POST['email'], ':date_create' => date('Y-m-d H:i:s')));
            $response['success'] = 1;
            $response['message'] = 'Thank you for subscribing!';
        }
    }
}

if(count($errors)) {
    $response['message'] = implode(', ', $errors);
}

echo json_encode($response);
exit;
