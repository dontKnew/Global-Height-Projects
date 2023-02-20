<?php
define("TITLE", "Medicine Courier Services in Delhi/NCR | Rapidex Worldwide Express");
define("DESCRIPTION", "We are one of the ultimate medicine courier service providers in Delhi/NCR. RepidEx deliver medicine at your doorstep conveniently");
define("KEYWORDS", "Medicine Courier Services in Delhi/NCR");
?>


<?php include("include/header.php") ?>
    <div class="jumbotron mans_bread">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4 class="text-white">Track Your Shipment</h4>
                    <div class="tab-pane bg-none fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <form class="" id="contactForm" onSubmit="return false;" >
                            <div class="input-group">
                                <input  id="type_no" name="type_no" class="form-control" required data-error="Please enter your Tracking Details" style="margin-top: 0px;margin-bottom: 0px;height: 49px;" placeholder="Enter your tracking number">
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
                                <h2>Medicine Courier Services in Delhi/NCR</h2>
                                <p>RepidEx deliver medicine at your doorstep conveniently. We are one of the ultimate medicine courier service providers. We are the rapid medicine courier company and we try to be as accurate and faster as possible.  All the medicines/products delivered through our platform are authentic. Also, while delivering the medicines, our team follows strict safety protocols to ensure only the top-notch products get delivered to you. In case your order is delayed, our team will contact you either via SMS, call or email and inform you about the same. You can also check and tracking status of your order on the website. </p>
                            </div>
                        </div>
                        <!--<div class="col-lg-5">-->
                        <!--    <div class="safe-image"> <img src="assets/img/services/Medicine-Courier.webp" alt="image"> </div>-->
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-safe-text">
                                <p>As we all know that health is wealth and medicines are crucial for the betterment of health. That's why we come up with our Express Delivery service for medicines. RepidEx is one of the most trusted names when it comes to delivery. We notify you in each step of shipping the product. You can get all the healthcare products and medicine online at your fingertips. It is so easy process. We are one of the largest Delivery service providers where you can trust for quality online medicine and wellness products   delivery. </p>
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