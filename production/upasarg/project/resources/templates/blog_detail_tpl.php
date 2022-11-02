    <section id="cms-page-content" class="about">
      <div class="container">
            <div class="section-title" data-aos="fade-up">
            </div>

            <div>
                <div class="row">
                    <div class="col-lg-12">
<!--                         <h4 class="mb-4"><?=$data['title']?></h4> -->
                        <?=$data['content']?>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-12 pb-2">
                        <center>
                            <a href="<?=$routes['contact_us']?>">
                                <button class="btn btn-success btn-custom">Contact Us</button>
                            </a>
                        </center>
                    </div>
                </div>

                <div class="row">
                    <?php if(!empty($prev)) { ?>
                    <div class="col col-sm-10"><?=$prev?></div>
                    <?php } if(!empty($next)) { ?>
                    <div class="col col-sm-2"><?=$next?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
