
    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title mt-5" data-aos="fade-up">
                <h1>Get in touch</h1>
            </div>

<!--        <div class="map-section mb-4">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=<?=$config['site_settings']['contact_address']?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
        </div> -->

            <div class="row justify-content-center mb-5" data-aos="fade-up">
                <div class="col-lg-10">
                    <div class="info-wrap mb-3">
                        <div class="row">
                            <div class="col-lg-8 info">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p><?=$config['site_settings']['contact_address']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="info-wrap mb-3">
                        <div class="row">
                            <div class="col-lg-8 info mt-4 mt-lg-0">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p><?=$config['site_settings']['email_from']?><br>charu.upasarg@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="info-wrap mb-3">
                        <div class="row">
                            <div class="col-lg-8 info mt-4 mt-lg-0">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p><?=$config['site_settings']['contact_number']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="contact-us" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-rule="minlen:10" data-msg="Please enter valid phone number" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>

                <div class="form-group text-center">
                    <div class="g-recaptcha" data-sitekey="<?=$config['site_settings']['g_recaptcha_v2_key']?>"></div>
                    <?=error('g-recaptcha-response')?>
                </div>

              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>-->

      </div>
    </section><!-- End Contact Section -->

<!-- Creates the bootstrap modal where the image will appear -->
<!--<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="imgGalleryPreview" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
        <img loading="lazy" src="" id="imagepreview" width="100%" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>-->

<script>
// $(".img_gallery").on("click", function() {
//    $('#imagepreview').attr('src', $(this).find('img').attr('src'));
//    $('#imagemodal').modal('show');
// });
</script>
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
