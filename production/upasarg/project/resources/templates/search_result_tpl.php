    <section id="about" class="about">
      <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h1><?=$result_cnt?> results found matching <i>'<?=trim($_GET['q'])?>'</i></h1>
            </div>

            <div>
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <?php foreach($blogs as $k => $v) { ?>

                        <h5 class="mb-2">
                            <a title="<?=$v['title']?>" href="<?=$routes['blog']?>/<?=$v['title_slug']?>"><?=$v['title']?></a>
                        </h5>
                        <hr>

                        <?php } ?>
                        <?php foreach($pages as $k => $v) { ?>

                        <h5 class="mb-2">
                            <a title="<?=$v['title']?>" href="<?=$routes['base']?>/<?=$v['url_slug']?>"><?=$v['title']?></a>
                        </h5>
                        <hr>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
