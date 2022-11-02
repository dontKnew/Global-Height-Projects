<?php
$arr_cover_img = array(
                'assets/img/slide/upasarg-front-page.jpg',
                );//slide-21.webp//upasarg-front-page.jpg
$cover_img = $arr_cover_img[array_rand($arr_cover_img)];
?>

  <section id="back_cms-page-content" style="padding:0px!important">
<!--     <div id="heroCarousel" class="slide carousel-fade" data-ride="carousel"> -->
    <div class="_container_">
        <img class="d-none d-md-block" src="<?=$cover_img?>" width="100%" class="" alt="<?=$config['site_settings']['brand_name']?>">
        <img class="d-block d-md-none" src="<?=$routes['base']?>/assets/img/upload/upasarg-cover-image-m-1.webp" width="100%" class="" alt="<?=$config['site_settings']['brand_name']?>">
<!--        <img src="assets/img/slide/slide-2.png" width="100%" class="mb-5">
        <img src="assets/img/slide/slide-5.png" width="100%" class="mb-5">
        <img src="assets/img/slide/slide-7.png" width="100%" class="mb-5">
        <img src="assets/img/slide/slide-8.png" width="100%" class="mb-5">
        <img src="assets/img/slide/slide-9.png" width="100%" class="mb-5">
        <img src="assets/img/slide/slide-10.png" width="100%" class="mb-5">
        <img src="assets/img/slide/slide-11.png" width="100%" class="mb-5">
        <img src="assets/img/slide/slide-12.png" width="100%" class="mb-5">
        <img src="assets/img/slide/slide-13.png" width="100%" class="mb-5">-->
      <!--<div class="carousel-inner" role="listbox">
        <div class="carousel-item">
          <div class="carousel-container">
            <img src="assets/img/slide/slide-5.png" width="80%" >
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-container">
            <img src="assets/img/slide/slide-6.png" width="80%" >
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-container">
            <img src="assets/img/slide/slide-2.png" width="80%" >
          </div>
        </div>

        <div class="carousel-item active">
          <div class="carousel-container">
            <img src="assets/img/slide/slide-7.png" width="80%" >
          </div>
        </div>
      </div>-->

<!--      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>-->

    </div>
  </section><!-- End Hero -->


    <!-- ======= Hero Section ======= -->
    <!--<section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        </div>
    </section>--><!-- End Hero Section -->
