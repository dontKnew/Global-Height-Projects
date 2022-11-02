<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();

$errors = $db_detail = array();

if(!empty($_GET['blog_id']) && !empty($_GET['action']) && $_GET['action'] == 'delete') {
    $objDb->delete("DELETE FROM blog WHERE blog_id = :blog_id", array(':blog_id' => $_GET['blog_id']));
    redirectPage($routes['admin_list_blog'], 'Data deleted successfully', false);
}

if(!empty($_GET['blog_id']))
{
    $db_detail = $objDb->select('SELECT * FROM blog WHERE blog_id = :blog_id',
                                        array(':blog_id' => $_GET['blog_id']));

    if(isset($db_detail[0]['blog_id'])) {
        $db_detail = $db_detail[0];
    }
}

if(count($_POST) && isset($_POST['submit'])) {
    $rules['title'] = 'required';
    $rules['content'] = 'required';
    $rules['date'] = 'required|date';

    $validation = $validator->validate($_POST, $rules);
    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
    }
    else {
        $extra_cri = isset($db_detail['blog_id']) ? " AND blog_id != {$db_detail['blog_id']}" : '';

        $res = $objDb->select("SELECT blog_id FROM blog WHERE title_slug = :title_slug $extra_cri",
                                array(':title_slug' => slugify($_POST['title'])));

        if(isset($res[0]['blog_id'])) {
            $errors['title'] = 'This title is already exists';
            return false;
        }

        $data = array(
                        ':title' => $_POST['title'],
                        ':date' => $_POST['date'],
                        ':title_slug' => slugify($_POST['title']),
                        ':meta_title' => $_POST['meta_title'],
                        ':meta_keywords' => $_POST['meta_keywords'],
                        ':meta_description' => $_POST['meta_description'],
                        ':content' => $_POST['content'],
                        ':date_stamp' => date('Y-m-d H:i:s'),
        );

        if(isset($db_detail['blog_id'])) {
            $objDb->update("UPDATE blog SET
                            title = :title,
                            title_slug = :title_slug,
                            date = :date,
                            content = :content,
                            meta_title = :meta_title,
                            meta_keywords = :meta_keywords,
                            meta_description = :meta_description,
                            date_modify = :date_stamp
                            WHERE blog_id = {$db_detail['blog_id']}", $data);
        }
        else {
            $objDb->insert("INSERT INTO blog (title, title_slug, content, meta_title, meta_keywords,
                            meta_description, date, date_create)
                            VALUES (:title, :title_slug, :content, :meta_title, :meta_keywords,
                            :meta_description, :date, :date_stamp)", $data);
        }

        redirectPage($routes['admin_list_blog'], 'Data updated successfully', false);
    }
}

$contentFile = 'create_blog_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
