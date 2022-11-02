<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();
$_POST = trimArray($_POST);

$parent_page_cri = '';
$errors = $db_detail = $parent_pages = array();
$placement = array('header' => 'Header',
                    'footer' => 'Footer',
                    'sidebar' => 'Sidebar',
                    'header-footer' => 'Header & Footer',
                    'all' => 'All',
                    );

if(!empty($_GET['action']) && $_GET['action'] == 'slugify' && !empty($_GET['title'])) {
    echo slugify($_GET['title']);
    exit;
}

if(!empty($_GET['id']))
{
    $db_detail = $objDb->select('SELECT P.id AS PID, C.id AS CID, P.*,C.*
                                  FROM pages P
                                  LEFT JOIN page_content C ON P.id = C.id_page
                                  WHERE P.id = :id',
                                        array(':id' => $_GET['id']));

    if(isset($db_detail[0]['PID'])) {
        $db_detail = $db_detail[0];
    }
    $parent_page_cri = ' AND id != ' . $_GET['id'];
}

$parent_pages = $objDb->select('SELECT * FROM pages WHERE has_child = "yes" ' . $parent_page_cri);

if(count($_POST) && isset($_POST['submit'])) {
    $rules['title'] = 'required';
    $rules['has_child'] = 'required';
    $rules['link_placement'] = 'required';
    $rules['login_required'] = 'required';

    $validation = $validator->validate($_POST, $rules);
    if ($validation->fails()) {
        $errors = $validation->errors()->firstOfAll();
    }
    else {
        $extra_cri = isset($db_detail['PID']) ? " AND id != {$db_detail['PID']}" : '';

        $res = $objDb->select("SELECT id FROM pages WHERE url_slug = :url_slug $extra_cri",
                                array(':url_slug' => slugify($_POST['title'])));

        if(isset($res[0]['id'])) {
            $errors['title'] = 'This title is already exists';
            return false;
        }

        $data = array(
                        ':title' => $_POST['title'],
                        ':url_slug' => $_POST['url_slug'],
                        ':id_parent_page' => $_POST['id_parent_page'],
                        ':has_child' => $_POST['has_child'],
                        ':link_placement' => $_POST['link_placement'],
                        ':login_required' => $_POST['login_required'],
                        ':ordering' => $_POST['ordering'],
                        ':date' => date('Y-m-d H:i:s'),
                        ':ip' => $_SERVER['REMOTE_ADDR'],
        );

        $content_data = array(
                        ':content' => $_POST['content'],
                        ':meta_title' => $_POST['meta_title'],
                        ':meta_keywords' => $_POST['meta_keywords'],
                        ':meta_description' => $_POST['meta_description'],
                        ':date' => date('Y-m-d H:i:s'),
                        ':ip' => $_SERVER['REMOTE_ADDR'],
        );

        if(isset($db_detail['id'])) {
            $objDb->update("UPDATE pages SET
                            title = :title,
                            url_slug = :url_slug,
                            id_parent_page = :id_parent_page,
                            has_child = :has_child,
                            link_placement = :link_placement,
                            login_required = :login_required,
                            ordering = :ordering,
                            date_modify = :date,
                            modify_ip = :ip
                            WHERE id = {$db_detail['id']}", $data);

            $objDb->update("UPDATE page_content SET
                            content = :content,
                            meta_title = :meta_title,
                            meta_keywords = :meta_keywords,
                            meta_description = :meta_description,
                            date_modify = :date,
                            modify_ip = :ip
                            WHERE id = {$db_detail['CID']} AND id_page = {$db_detail['PID']}", $content_data);
        }
        else {
            $objDb->insert("INSERT INTO pages (title, url_slug, id_parent_page, has_child, link_placement,
                            login_required, ordering, create_ip, date_create)
                            VALUES (:title, :url_slug, :id_parent_page, :has_child, :link_placement,
                            :login_required, :ordering, :ip, :date)", $data);

            $id = $objDb->lastInsertId();
            $objDb->insert("INSERT INTO page_content (id_page, content, meta_title, meta_keywords,
                            meta_description, create_ip, date_create)
                            VALUES ({$id}, :content, :meta_title, :meta_keywords, :meta_description, :ip, :date)", $content_data);
        }

        $id = !empty($_GET['id']) ? $_GET['id'] : $id;
        redirectPage($routes['admin_create_page'] . '?id=' . $id, 'Data updated successfully', false);
    }
}

$contentFile = 'create_page_tpl.php';

require_once $config['paths']['config'] . '/admin_exit.php';

?>
