<?php

// Open graph image
if(!empty($page['content']) || !empty($data['content'])) {
    $parse_content = !empty($page['content']) ? $page['content'] : $data['content'];
    $og_image = $og_image_mime = '';
    $arr_img_match = $arr_ext = array();
    $mimes = array(
                    'jpg' => 'image/jpeg',
                    'jpeg' => 'image/jpeg',
                    'png' => 'image/png',
                    'webp' => 'image/webp',
                );

    preg_match('/src="(.*?)"/', $parse_content, $arr_img_match);

    if(!empty($arr_img_match[1]) && preg_match('/\.(jpg|jpeg|png|webp)/i', $arr_img_match[1], $arr_ext)) {
        $og_image = preg_replace('/(.*?)\/assets\//', $routes['base'] . '/assets/', $arr_img_match[1]);
        $og_image_mime = isset($mimes[$arr_ext[1]]) ? $mimes[$arr_ext[1]] : '';
    }
}
// END Open graph image

// if(!isset($_SESSION['user_id']) || $contentFile == 'profile_tpl.php' || in_array($contentFile, $config['guest_pages'])) {
    require_once $config['paths']['templates'] . '/main_tpl.php';
// }
// else {
//     require_once $config['paths']['app_templates'] . '/main_tpl.php';
// }

if(isset($_SESSION['suc_msg'])) {
    unset($_SESSION['suc_msg']);
}
if(isset($_SESSION['err_msg'])) {
    unset($_SESSION['err_msg']);
}

?>
