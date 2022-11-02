<div class="about-area">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <!-- Trending Tittle -->
                <div class="about-right mb-90">
                    <div class="section-tittle">
                        <h1><?=$title?></h1>
                    </div>

                    <?php if(!empty($detail[0]['sub_title'])) { ?>
                        <h2 class="section-sub-tittle"><?=$detail[0]['sub_title']?></h2>
                    <?php } ?>

                    <?php if(!empty($detail[0]['img_path'])) { ?>
                    <div class="mb-30">
                        <img src="<?=$detail[0]['img_path']?>" alt="<?=$detail[0]['title']?>" width="100%"/>
                    </div>
                    <?php } ?>

                    <p>
                        <a href="<?=$routes['base']?>/author/<?=$blog_user?>" style="color:#660000;font-size:21px;font-weight: bold;text-decoration:none"><?=ucfirst(substr($blog_user,0,18))?></a>
                        <br>
                        <?php //echo date("F jS Y",$date); ?>
                        <?=$date?>
                    </p>

                    <div class="about-prea">
                        <?=$body?>
                    </div>
                    <?php if(!empty($detail[0]['orig_url'])) { ?>
                    <span class="mb-4 mt-4" style="font-size:14px">
                        <i>(Source : <a href="<?=$detail[0]['orig_url']?>" target="_blank"><?=$detail[0]['orig_url']?></a>)</i>
                    </span>
                    <?php } ?>
                    <div class="row pt-30">
                        <div class="col-sm-4" style="text-align:left"><?=$previous?></div>
                        <div class="col-sm-4">&nbsp;</div>
                        <div class="col-sm-4" style="text-align:right"><?=$next?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container mb-4">
        <div id="disqus_thread"></div>
    </div>
</section>

<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://xklsvblogs.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
