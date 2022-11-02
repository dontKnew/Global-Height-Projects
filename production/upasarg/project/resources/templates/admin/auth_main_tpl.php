<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?=$config['site_settings']['site_name']?> - Admin</title>
    <link rel="icon" type="image/x-icon" href="<?=$routes['admin_assets']?>/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=$routes['admin_assets']?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=$routes['admin_assets']?>/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=$routes['admin_assets']?>/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=$routes['admin_assets']?>/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?=$routes['admin_assets']?>/css/forms/switches.css">
</head>
<body class="form">

    <?php require_once $config['paths']['admin_templates'] . '/' . $contentFile; ?>
    <?php require_once $config['paths']['admin_templates'] . '/footer_tpl.php'; ?>

</body>
</html>
