    <!-- ======= Footer ======= -->
    <footer id="footer"><!-- style="position:fixed;width:100%;min-height:300px!important;z-index:5489584594"-->

        <div class="footer-top">
        <div class="container">
            <div class="mb-4 mt-2 d-block d-md-none">
                <div class="col-lg-8 col-md-8 text-center" style="margin:auto;display:block">
                    <a href="<?=$routes['base']?>">
                    <img alt="<?=$config['site_settings']['brand_name']?>" src="<?=$routes['base']?>/assets/img/transparent-logo-2.webp" loading="lazy" width="100%" class="img-fluid"></a>
                    </a>
                </div>
            </div>

            <?php
//             if($contentFile != 'index_tpl.php') {
            ?>
            <div class="row">
            <div class="col-lg-12 col-md-12 text-center footer-links">
<!--                 <h4><?=$config['site_settings']['brand_name']?></h4> -->
                <!--<p>
                <a style="color:#b4aca8;font-size:14px" href="tel:<?=preg_replace('/\s+/', '', $config['site_settings']['contact_number'])?>"><i class="icofont-phone"></i><?=$config['site_settings']['contact_number']?></a></p>
                <p>
                <?=$config['site_settings']['contact_address']?>&nbsp;|&nbsp;</p>-->
                <p>
                <a style="color:#b4aca8;font-size:14px" href="<?=$routes['tos']?>"><strong>Terms of Services</strong></a>&nbsp;|&nbsp;
                <a style="color:#b4aca8;font-size:14px" href="<?=$routes['privacy_policy']?>"><strong>Privacy</strong></a>&nbsp;|&nbsp;
                <a style="color:#b4aca8;font-size:14px" href="<?=$routes['contact_us']?>"><strong>Contact Us</strong></a>
                </p>
            </div>

            <!-- Dynamic Footer links -->
            <?php //foreach($footerMenu as $menu) {
//             echo '<div class="col-lg-2 col-md-6 footer-links">';
            //$url = !empty($menu['nav']['url']) ? "{$routes['base']}/{$menu['nav']['url']}" : '#';
//                 echo '<h4>' . $menu['nav']['title'] . '</h4>';
            ?>
                <?php //if(isset($menu['sub_nav'])) {
             /*   echo '<ul>';
                foreach($menu['sub_nav'] as $submenu) {
                    echo '<li><i class="bx bx-chevron-right"></i> <a href="' . "{$routes['base']}/{$submenu['url']}" . '">' . $submenu['title'] . '</a></li>';
                }
                echo '</ul>';
                } 
            echo '</div>';
            }*/ ?>
            <!-- END Dynamic Footer links -->

<!--            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=$routes['base']?>/about-us">About Us</a></li>
                </ul>
            </div>-->

<!--            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Join Our Newsletter</h4>
                <p>Signup for our Latest News and Articles</p>
                <form action="<?=$routes['subscribe']?>" method="post" id="frm-subscribe">
                    <input type="email" name="email" required placeholder="Email Address">
                    <input type="button" value="Subscribe" onclick="subscribe()">
                </form>
                <span id="subscribe-msg" style="display:none;padding:5px" class="alert-success"></span>
            </div>-->

            </div>
            <?php
//             }
            ?>
        </div>
        </div>

        <?php
        $btn_class = $contentFile == 'index_tpl.php' ? 'small-xklsv-btn' : '';
        ?>
        <div class="container d-md-flex d-flex justify-content-center text-center">

        <div class="text-center">
            <div class="copyright pb-3">
            &copy; Copyright <strong><span><?=$config['site_settings']['brand_name']?></span></strong>. All Rights Reserved.
            </div>
            <div style="margin-bottom:30px">
                <a target="_blank" id="xklsvbtn" style="text-decoration:none; text-align:center" href="https://services.xklsv.com">xklsv</a>
            </div>
        </div>
<!--        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="<?=$config['site_settings']['twitter']?>" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="<?=$config['site_settings']['facebook']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="<?=$config['site_settings']['instagram']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="<?=$config['site_settings']['youtube']?>" class="google-plus"><i class="bx bxl-youtube"></i></a>
        </div>-->
        </div>
    </footer><!-- End Footer -->

<!--     <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->

    <!-- Vendor JS Files -->
<!--     <script src="<?=$routes['base']?>/assets/vendor/jquery/jquery.min.js"></script> -->
    <script src="<?=$routes['base']?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$routes['base']?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?=$routes['base']?>/assets/vendor/php-email-form/validate.js"></script>
<!--     <script src="<?=$routes['base']?>/assets/vendor/jquery-sticky/jquery.sticky.js"></script> -->
    <script src="<?=$routes['base']?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?=$routes['base']?>/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?=$routes['base']?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?=$routes['base']?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?=$routes['base']?>/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=$routes['base']?>/assets/js/main.js?v=7"></script>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Auth modal box -->
    <?php require_once $config['paths']['templates'] . '/includes/auth_model_tpl.php'; ?>

    <script>
        $(document).ready(function(){
            if ($('.custom-loader').length > 0) {
                $('.custom-loader').removeClass('custom-loader');
            }
            $('.flip-content').click(function() {
                $('.modal-content').hide();
                $('#' + $(this).data('target')).show();
            });
            $('#we-treat,#courses').slick({
                infinite: true,
                dots:true,
                slidesToShow: 3,
                centerMode: true,
                autoplay:true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
                            slidesToScroll: 1
                        }
                    }
                ],
            });
        });
        var signupform = $('#frm-signup');
        var loginform = $('#frm-login');
        var forgotpwdform = $('#frm-forgot-pwd');
        signupform.on('submit', function(ev){
            ev.preventDefault();
            $.ajax({
                url: '<?=$routes['signup']?>',
                type: 'POST',
                data: new FormData($("#frm-signup")[0]),
                contentType: false,
                processData: false,
                success: function(data) {
                    obj = JSON.parse(data);
                    if (obj.success == 1) {
                        $('#signup-error').removeClass('alert-warning').addClass('alert-success').text(obj.message).show();
                        document.location.href = "<?=$routes['mypage']?>";
                    }
                    else if (obj.redirect == 1) {
                        location.reload();
                    }
                    else {
                        $('#signup-error').removeClass('alert-success').addClass('alert-warning').text(obj.message).show();
                    }
                }
            });
        });
        forgotpwdform.on('submit', function(ev){
            ev.preventDefault();
            $.ajax({
                url: '<?=$routes['forgot_password']?>',
                type: 'POST',
                data: new FormData($("#frm-forgot-pwd")[0]),
                contentType: false,
                processData: false,
                success: function(data) {
                    obj = JSON.parse(data);
                    if (obj.success == 1) {
                        $('#forgot-error').removeClass('alert-warning').addClass('alert-success').text(obj.message).show();
                    }
                    else if (obj.redirect == 1) {
                        location.reload();
                    }
                    else {
                        $('#forgot-error').removeClass('alert-success').addClass('alert-warning').text(obj.message).show();
                    }
                }
            });
        });
        loginform.on('submit', function(ev){
            ev.preventDefault();
            $.ajax({
                url: '<?=$routes['login']?>',
                type: 'POST',
                data: new FormData($("#frm-login")[0]),
                contentType: false,
                processData: false,
                success: function(data) {
                    obj = JSON.parse(data);
                    if (obj.success == 1) {
                        document.location.href = location.href;
                    }
                    else if (obj.redirect == 1) {
                        location.reload();
                    }
                    else {
                        $('#login-error').removeClass('alert-success').addClass('alert-warning').text(obj.message).show();
                    }
                }
            });
        });
        function subscribe() {
            $('#subscribe-msg').text('');
            $.ajax({
                url: '<?=$routes['subscribe']?>',
                type: 'POST',
                data: new FormData($("#frm-subscribe")[0]),
                contentType: false,
                processData: false,
                success: function(data) {
                    obj = JSON.parse(data);
                    if (obj.success == 1) {
                        $('#subscribe-msg').removeClass('alert-warning').addClass('alert-success').text(obj.message).show();
                    }
                    else {
                        $('#subscribe-msg').removeClass('alert-success').addClass('alert-warning').text(obj.message).show();
                    }
                }
            });
        }
    </script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="<?=$routes['base']?>/assets/css/custom.css?v=28" rel="stylesheet">

    <link href="https://parsleyjs.org/src/parsley.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<!--     <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6196a035d6821688"></script> -->

    <!-- AddToAny BEGIN -->
    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_whatsapp"></a>
    <a class="a2a_button_google_gmail"></a>
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_linkedin"></a>
    </div>
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <!-- AddToAny END -->
