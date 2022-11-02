    <section id="about" class="about">
      <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1><?=$config['site_settings']['brand_name']?> - News & Events</h1>
            </div>

            <div>
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <?php foreach($news as $k => $v) { ?>

                        <h5 class="mb-2">
                            <?=$v['content']?>
                        </h5>
                        <hr>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
