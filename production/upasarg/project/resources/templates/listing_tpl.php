    <section class="contact-section">
        <div class="container search-result" id="_tutorials" data-aos="fade-up">
            <div class="page-title pb-2">
                <h2><?=$total?> notes by <i><?=$user['user_username']?></i></h2>
            </div>
            <?php
            if(count($entries)) {
            ?>
            <div>
                <?php
                    foreach($entries as $entry) {
                    $datenew = date('F-jS-Y' , strtotime($entry['datetime_text']));
                    $article_url = $routes['base'] . '/' . $entry['url_slug'] . '/' . $user['user_username'] . '/' . $datenew;
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="what-cap mb-2">
                            <h4>
                                <a rel="canonical" href="<?="{$article_url}"?>">
                                    <?=$entry['title']?>
                                </a>
                            </h4>
                            <a rel="canonical" href="<?="{$article_url}"?>"><p>
                            <?php
                            $str = $entry['content'];
                            $str1 = substr(strip_tags($str,'utf8'),0,290);
                            if(strlen($str1) <= 6) {
                                echo $str1;
                            }
                            else {
                                echo $str1 . "...";
                            }
                            ?>
                            </p></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php
            }
            ?>
        </div>
        <!--Start pagination -->
        <div class="pagination-area pt-4 pb-4 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <?=$pagination->render()?>
                                <!--<ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End pagination  -->
    </section>
