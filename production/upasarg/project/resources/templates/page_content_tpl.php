<?php
    $class = $page['id_parent_page'] == 66666 ? 'portfolio' : '';
    $div_id = $page['id_parent_page'] == 66666 ? 'portfolio' : 'cms-page-content';
    if(mb_strtolower($page['title']) == 'portfolio') {
?>
<!--     <section id="portfolio" class="portfolio mt-4"> -->
    <section id="back_cms-page-content" style="padding:70px 0px 30px 0px !important;background:#000">
        <div class="_container_">
<!--             <img src="<?=$routes['base']?>/assets/img/upload/upasarg-portfolio-2.jpg" width="100%" class=""> -->
            <img src="<?=$routes['base']?>/assets/img/upload/upasarg-portfolio-bg-1.jpg" width="100%" class="">
<!--             <a style="color: #fff;font-size:2rem;font-weight:500;top:470px;position:absolute;left:145px;z-index:439849389483;" href="<?=$routes['base']?>/residential">Residential</a> -->
        </div>
    </section>
<?php
    }
    else if(mb_strtolower($page['title']) == 'team upasarg') {
?>
    <section id="back_cms-page-content" style="padding:20px 0px 0px 0px !important;background:#000">
        <div class="container">
        <?=$page['content']?>
        </div>
    </section>
<?php
    }
    else {
?>

    <section id="<?=$div_id?>" class="<?=$class?> mt-4">
        <div class="container">
        <?=$page['content']?>

        <div class="row mb-4">
            <!--<div class="col-lg-12 pb-2">
                <center>
                    <a href="<?=$routes['contact_us']?>">
                        <button class="btn btn-success btn-custom">Contact Us</button>
                    </a>
                </center>
            </div>-->
        </div>

        <div class="row mb-3">
            <?php if(!empty($prev)) { ?>
            <div class="col col-sm-10"><?=$prev?></div>
            <?php } if(!empty($next)) { ?>
            <div class="col col-sm-2"><?=$next?></div>
            <?php } ?>
        </div>
        </div>
    </section>
<?php
}
?>
