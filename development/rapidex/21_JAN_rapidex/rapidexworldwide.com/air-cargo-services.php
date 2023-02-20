<?php
define("TITLE", "International Courier & Air Cargo Services in Delhi/NCR | Rapidex Worldwide Express");
define("DESCRIPTION", "Rapidex Worldwide Express Offer international courier and air cargo services in Delhi/NCR. We are also specialized in faster deliveries. We always put efforts in keeping the services at its best.");
define("KEYWORDS", "Air Cargo Services in Delhi/NCR, International Courier and Cargo Services, Air Cargo Services in Delhi");
?>



<?php include("include/header.php") ?>

    <div class="jumbotron mans_bread">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4 class="text-white">Track Your Shipment</h4>
                    <div class="tab-pane bg-none fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <form class="" id="contactForm" onSubmit="return false;">
                            <div class="input-group">
                                <input id="type_no" name="type_no" class="form-control" required data-error="Please enter your Tracking Details" style="margin-top: 0px;margin-bottom: 0px;height: 49px;" placeholder="Enter your tracking number">
                                <div class="input-group-prepend d-block mans-track">
                                    <button type="submit" class="default-btn-one newcss disabled mt-0 bg-logorange" onclick="trackOrder()" style="pointer-events: all; cursor: pointer;height:49px;">Track</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="about-text-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-safe-text">
                                <h2>Air Cargo Services in Delhi/NCR</h2>
                                <p>We are the best Air cargo agent. We provide you a broad, quality and yet a worthwhile range of Domestic Air Cargo Services. We also provide our customers free home pickup services. We ensure to give you a proof of delivery
                                    on every invoice. We have a wide range of shipping services so that you can always find the right option for the things you want to ship whether it's express shipping or less-urgent delivery, small boxes or heavyweight
                                    freight, a single package or multiple parcels at the same time. We have got Customer Service centers. You can call anytime when you need help, or choose to chat online on <a href="https://rapidexworldwide.com/">Rapidexworldwide</a>.</p>

                            </div>
                        </div>
                        <!--<div class="col-lg-5">-->
                        <!--    <div class="safe-image"> <img src="assets/img/freight/freight3.webp" alt="Enquire Now"> </div>-->
                        <!--    <div class="enQ"><a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="cursor:pointer;" class="Enquiry">Get Charges</a></div>-->
                        <!--</div>-->
                         <style>
                            #enquiry_form_footer{
                                font-size: 20px !important;
                                text-align:center;
                                margin-left:22px;
                            }
                        </style>
                        
                        <?php include("/home4/elect7wk/rapidexworldwide.com/international-courier-service-delhi/include/enquiry_form.php"); ?>
                    </div>
                    <div class="row px-3">
                        <p><a href="https://rapidexworldwide.com/">Rapidex Worldwide Express</a> Offer the phenomenal Air Courier service. We provide the best possible air services. We are also specialized in faster deliveries. We always put efforts in keeping
                            the services at its best. </p>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-safe-text">
                                <div class="our-services-area">
                                    <h1 class="effectBox mtEffect">You may be interested in:</h1>
                                    <div class="container">
                                        <?php require_once("".ROOT_PATH."/include/component/services_page_box.php") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <?php require_once("".ROOT_PATH."/include/component/services_sidebar.php") ?>
                    <div class="mt"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include("include/component/pickup_location.php") ?>


<?php include("include/footer.php") ?>