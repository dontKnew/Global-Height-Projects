    <section id="about" class="about">
      <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1><?=$config['site_settings']['brand_name']?> - Articles</h1>
            </div>

            <div>
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <?php foreach($data as $k => $v) { ?>

                        <h5 class="mb-2">
                            <a title="<?=$v['title']?>" href="<?=$routes['blog']?>/<?=$v['title_slug']?>"><?=$v['title']?></a>
                        </h5>
                        <hr>

                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?=$pagination->render()?>
                    </div>
                </div>
            </div>
        </div>
    </section>
