<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?=$config['site_settings']['site_name']?> Admin</title>
    <link rel="icon" type="image/x-icon" href="<?=$routes['admin_assets']?>/img/favicon.ico"/>
    <link href="<?=$routes['admin_assets']?>/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?=$routes['admin_assets']?>/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Font Awesome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="<?=$routes['admin_assets']?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=$routes['admin_assets']?>/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?=$routes['admin_assets']?>/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?=$routes['admin_assets']?>/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="<?=$routes['admin_assets']?>/css/elements/miscellaneous.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <script src="<?=$routes['admin_assets']?>/js/libs/jquery-3.1.1.min.js"></script>

</head>
<body class="sidebar-noneoverflow">

    <!-- Header starts -->
    <?php require_once $config['paths']['admin_templates'] . '/header_tpl.php'; ?>
    <!-- Header ends -->

    <!-- Main body starts -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <?php require_once $config['paths']['admin_templates'] . '/sidebar_tpl.php'; ?>
        <?php require_once $config['paths']['admin_templates'] . '/' . $contentFile; ?>
    </div>
    <!-- Main body ends -->

    <!-- Footer starts -->
    <?php require_once $config['paths']['admin_templates'] . '/footer_tpl.php'; ?>
    <!-- Footer ends -->

</body>
</html>
