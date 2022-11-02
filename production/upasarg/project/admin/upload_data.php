<?php

require_once dirname(__FILE__) . '/../config/common.php';

adminAuthWall();

$accepted_origins = array("https://upasarg.com");

$imageFolder = $config['paths']['assets'] . '/img/upload';
$imageUrl = $routes['assets'] . '/img/upload';

reset($_FILES);
$temp = current($_FILES);
if(is_uploaded_file($temp['tmp_name'])){
    $filetowrite = $imageFolder . '/' . $temp['name'];
    if(isset($_SERVER['HTTP_ORIGIN'])){
        // Same-origin requests won't set an origin. If the origin is set, it must be valid.
        if(in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)){
            header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
        }else{
            header("HTTP/1.1 403 Origin Denied");
            return;
        }
    }

    // Sanitize input
    if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
        header("HTTP/1.1 400 Invalid file name.");
        return;
    }

    // Verify extension
    if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array('gif', 'jpg', 'png', 'jpeg', 'webp'))) {
        header("HTTP/1.1 400 Invalid extension.");
        return;
    }
    // Check file size
    if($temp['size'] > 2000000) {
        header("HTTP/1.1 400 File should be below 2 MB.");
        return;
    }
    // Avoid overwrite or duplicate
    if(file_exists($filetowrite)) {
        header("HTTP/1.1 File already exists.");
        return;
    }

    move_uploaded_file($temp['tmp_name'], $filetowrite);

    echo json_encode(array('location' => $imageUrl . '/' . $temp['name']));
} else {
    header("HTTP/1.1 500 Server Error");
}
