<?php
define("TITLE", "Top International Courier/Parcel Delivery Services In Delhi/NCR | Rapidex Worldwide Express");
define("DESCRIPTION", "Rapidex Worldwide Express is the best Cheapest & Fastest International courier and parcel delivery services near you to select. We are the most trusted international courier services provider in Delhi/NCR.");
define("KEYWORDS", "International Courier Services In Delhi, International Courier Services, International Courier Service Provider In Delhi, International Parcel Delivery Service in Delhi, Cheapest International Courier Service in Delhi, Fastest International Courier Service
In Delhi, Best International Courier Serivce In Delhi, Best Courier Service In Delhi For International, Worldwide Courier Delivery Service In Delhi, Top International Courier Services In Delhi/NCR, International Courier Services In Delhi/NCR, Courier
Services In Delhi/NCR, Best International Courier Services near me, International Courier Services near me, International Courier Delivery, International Courier Delivery near me, International Courier Charges, International Courier Charges near me, International
Courier near me, International Parcel, International Parcel near me, International shipping, International shipping near me, International Courier Services, International Courier Services near me, International Parcel Services, International Parcel Services
near me, International Courier Agency, International Courier Agency near me, International Parcel Agency, International Parcel Agency near me, International Courier Agent, International Courier Agent near me, International Parcel Agent, International
Parcel Agent near me, International Courier Offices, International Courier Offices near me, International Air Courier Service , International Air Courier Service near me, International Courier Delivery, International Courier Delivery near me, International
Courier Delivery Company, International Courier Delivery Company near me, Cheapest International Courier Company, Cheapest International Courier Company near me, International Courier Charges, Best International Courier Charges, Top Courier Service For
International, Cheapest Courier Service For International, Fastest Delivery Service For International, Relaible Courier Service For International, Cheap Courier Service For International");
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
                                <h2>International Courier Services in Delhi/NCR</h2>
                                <p>Rapidex Worldwide Express is the best International courier services near you to select. We are an extensive solution for the international cargo and courier services. Rapidex Worldwide Express offer flexible international cargo solutions to our customers. After assessing the size of the courier, budget, and time-frame of the delivery, we provide you with sea and air freight solutions. Irrespective of the size of your courier, we provide you safe delivery of the courier to its destination in the lesser time.</p>

                            </div>
                        </div>
                        <!--<div class="col-lg-5">-->
                        <!--    <div class="safe-image"> <img src="assets/img/services/International-Courier.webp" alt="image"> </div>-->
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
                                <p>Rapidex Worldwide Express has been working as a logistics company and has the most of contacts in the market. We are the most trusted international courier service provider and logistics services providers across the world. We have a team of professionals and we assure you the safety of your belongings. So, you need not bother about any damage to your packages. We are proud that we are the best logistics company for international courier services who offers flexible and relatively cheap courier and logistics services to the customers.</p>
                                <p>Rapidex Worldwide Express was established with the goal to offer the best and cost-effective international courier & cargo, solutions to the customers in India from other countries as well as outside India. We are the most trusted international courier services provider. Our services meet with all the international courier delivery standards which include timely pickup, safe packaging, and timely delivery of the courier in India from other countries and from India to over overseas. We also offer different types of courier services depending on their budget and the need of customer.</p>
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