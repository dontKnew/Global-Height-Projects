<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();
$_POST = trimArray($_POST);

// TODO sortable is implemented in template but not passing data to admin.
// echo '<pre>';print_R($_POST);exit;

$errors = $db_detail = $parent_pages = array();

if(!empty($_GET['id']))
{
    $db_detail = $objDb->select('SELECT * FROM news WHERE id = :id',
                                        array(':id' => $_GET['id']));

    if(isset($db_detail[0]['id'])) {
        $db_detail = $db_detail[0];
    }
}

if(count($_POST) && isset($_POST['submit'])) {
    $rules['content'] = 'required';

    $validation = $validator->validate($_POST, $rules);
    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
    }
    else {
        $content_data = array(
                        ':content' => $_POST['content'],
                        ':date' => date('Y-m-d H:i:s'),
                        ':ip' => $_SERVER['REMOTE_ADDR'],
        );

        if(isset($db_detail['id'])) {
            $objDb->update("UPDATE news SET
                            content = :content,
                            date_modify = :date,
                            modify_ip = :ip
                            WHERE id = {$db_detail['id']}", $content_data);
        }
        else {
            $objDb->insert("INSERT INTO news (content, create_ip, date_create)
                            VALUES (:content, :ip, :date)", $content_data);
            $id = $objDb->lastInsertId();
        }

        $id = !empty($_GET['id']) ? $_GET['id'] : $id;
        redirectPage($routes['admin_create_news'] . '?id=' . $id, 'Data updated successfully', false);
    }
}

$contentFile = 'create_news_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
