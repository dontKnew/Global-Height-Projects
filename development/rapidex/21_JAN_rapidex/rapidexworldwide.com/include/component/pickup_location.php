<?php 
    require_once '/home4/elect7wk/rapidexworldwide.com/admin/config/config1.php'; 
    $db = getDbInstance();
    $pickup_location = $db->get("pickup_location");
?>

<div class="section-content mt-4 mb-4">

    <div class="row d-flex justify-content-center">


        <div class="col-lg-12 col-md-12">


            <!-- BLOG START -->

            <div class="blog-post-single-outer container mb-5">

                <div class="blog-post-single">


                    <div class="wt-post-info">


                        <div class="wt-post-title ">


                            <h3 class=" effect-head ">We have pickups all over India including these locations:-

                            </h3>


                        </div>


                        <div class="wt-post-discription">


                            <div class="row">

                                <div class="col-lg-12 col-md-12">

                                    <div class="widget tw-sidebar-tags-wrap">


                                        <div class="tagcloud">
                                            <?php foreach($pickup_location as $p): ?>
                                                <a href="<?= ($p['redirect_url']!=="")?$p['redirect_url']:"javascript:void" ?>" ><?= $p['location'] ?></a>
                                            <?php endforeach; ?>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>


                </div>

            </div>

        </div>


    </div>


</div>