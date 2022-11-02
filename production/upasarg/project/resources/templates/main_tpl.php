<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?=$meta_data['title']?><?=$config['site_settings']['brand_name']?></title>
    <meta name="description" content="<?=$meta_data['description']?>">
    <meta name="keywords" content="<?=$meta_data['keywords']?>">

    <!-- START Open Graph meta -->
    <?php if(!empty($og_image)) { ?>
    <meta property="og:image" content="<?=$og_image?>">
    <meta property="og:image:secure_url" content="<?=$og_image?>">
    <meta property="og:image:type" content="<?=$og_image_mime?>">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="400">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$_SERVER['REQUEST_URI']?>" />
    <meta property="og:title" content="<?=$meta_data['title']?><?=$config['site_settings']['brand_name']?>" />
    <meta property="og:description" content="<?=$meta_data['description']?>" />
    <?php } ?>
    <!-- END Open Graph meta -->

    <!-- Favicons -->
    <link href="<?=$routes['base']?>/assets/img/favicon.ico" rel="icon">
    <link href="<?=$routes['base']?>/assets/img/favicon.ico" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="<?=$routes['base']?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$routes['base']?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<!--     <link href="<?=$routes['base']?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
<!--     <link href="<?=$routes['base']?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
<!--    <link href="<?=$routes['base']?>/assets/vendor/venobox/venobox.css" rel="stylesheet">-->
<!--     <link href="<?=$routes['base']?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
<!--     <link href="<?=$routes['base']?>/assets/vendor/aos/aos.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="<?=$routes['base']?>/assets/css/style_back_2022_01_12.css?v=50" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body <?php if($contentFile == 'index_tpl.php' || (isset($page['title']) && mb_strtolower($page['title']) == 'portfolio')){echo 'class="black-bg"';} ?>>

    <!-- Header starts -->
    <?php require_once $config['paths']['templates'] . '/includes/header_tpl.php'; ?>
    <!-- Header ends -->

    <main id="main">

        <!-- Main body starts -->
        <?php require_once $config['paths']['templates'] . '/' . $contentFile; ?>
        <!-- Main body ends -->

    </main><!-- End #main -->

    <!-- Footer starts -->
    <?php require_once $config['paths']['templates'] . '/includes/footer_tpl.php'; ?>
    <!-- Footer ends -->

</body>

</html>
