<?php

if(in_array($contentFile, array('login_tpl.php', 'reset_password_tpl.php', 'forgot_password_tpl.php'))) {
    require_once $config['paths']['admin_templates'] . '/auth_main_tpl.php';
}
else {
    require_once $config['paths']['admin_templates'] . '/main_tpl.php';
}

if(isset($_SESSION['suc_msg'])) {
    unset($_SESSION['suc_msg']);
}
if(isset($_SESSION['err_msg'])) {
    unset($_SESSION['err_msg']);
}

?>
