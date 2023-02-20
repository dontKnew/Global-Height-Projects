<?php
define("TITLE", "Aramex International Courier in Delhi | Best rates for International Courier");
define("DESCRIPTION", "Rapidex Worldwide Express has all of connections and experience that are needed to run a successful Courier Services in Delhi/NCR with Aramex International Courier Services.");
define("KEYWORDS", "Aramex International Courier Services in Delhi, Aramex International Courier Services, Aramex Courier Services in Delhi, Aramex Courier Services, International Courier in Delhi, Courier Service in Delhi");
?>


<?php include("include/header.php") ?>
<style>
    
    .offer-page.country-select.inside input, .offer-page .country-select.inside input[type=select] {
        font-size: 18px;
        font-weight: 700;
        color: #101453;
    }
    .country-select.inside input, .country-select.inside input[type=select] {
        padding-right: 6px;
        padding-left: 52px;
        margin-left: 0;
        padding-top: 0.9rem;
        padding-bottom: 0.9rem;
        border-radius: 0 !important;
    }
    .country-select input, .country-select input[type=select] {
        position: relative;
        z-index: 0;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        padding-right: 36px;
        margin-right: 0;
    }

    .country-select * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .flag-img{
        width: 26px;
        position: absolute;
        top: 41px;
        right: 21px;

    }
</style>

<style type="text/css">
        .mysear ul{
            margin-top: 0px;
            background: #fff;
            color: #000;
        }
        .mysear li{
            padding: 5px;
            cursor: pointer;
            color: black;
            width: 223px;
        }
        .mysear li:hover{
            background: #f0f0f0;
        }

        .jumbotron{
            margin-bottom:0 !important;
        }
        .statelist::-webkit-scrollbar {
            width: 0.2em;
        }

        .statelist::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .statelist::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }

        .statelist{position:absolute;
            max-height: 300px;
            overflow-y: scroll;
            z-index:999999;
            background-color: #fff;
            cursor: pointer;
            min-width: 75% !important;
            /*border-bottom: 1px solid #ccc;*/
        }

        .state1list::-webkit-scrollbar {
            width: 0.2em;
        }

        .state1list::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .state1list::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }

        .state1list{position: absolute;
            max-height: 144px;
            overflow-y: scroll;
            z-index: 999999;
            background-color: #fff;
            width: fit-content;
            cursor: pointer;

        }


        /*safe-icon-sec*/
        .safe-sec{
            width:100%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            flex-wrap:wrap;
        }
        .s-icon{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            padding:1rem 0.2rem;
            /*box-shadow:0px 0px 4px 1px grey;*/
            /*margin:5px;*/
            width:19%;
            min-height:150px;
        }
        .s-icon-sec{
            width:100%;
            /*min-height:150px;*/
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .s-icon-sec img{
            width:40%;
        }
        .s-icon span{
            text-align:center;
            margin-top:1rem;
            font-size:14px;

        }
        .tw-checked-list ul {
            list-style: none;
            margin-bottom: 0px;
            padding:0 !important;
            margin-top: 20px;
        }

        .tw-checked-list ul li {
            position: relative;
            font-size: 16px;
            margin-bottom: 13px;
            padding-left: 15px;
        }
        .tw-checked-list ul li a{  color: #000;    font-size: 14px;}
        .tw-checked-list ul li:after {
            content: '\f105';
            font-family: 'FontAwesome';
            color: #ff8a00;
            left: 0px;
            top: 0px;
            position: absolute;
        }

        .statelist ul li{
            color: #000;
            text-align: left;
            padding-left: 10px;
            color: #000;
            text-align: left;
            padding-left: 10px;
            padding-top:0px;
            padding-bottom: 0px;
        }
        .statelist ul li a img{
            width: 26px;
            margin-top: -3px;
            margin-bottom: -5px;
            float: right;
            margin-right: 17px;
        }
        .statelist ul li:hover{
            background-color: #e8e8e8;
        }
        .diagon-full {
            margin-bottom:26px !important;
        }
        .alert-info{
            background-color:#cd1212;
            font-size:22px;
            color:white;
            font-weight:800;
        }
        #dropdownMenuClickableInside input::placeholder {

            font-size:16px;
        }

        /*searchbox======================*/
        .centered {
            margin-bottom: 1rem;
            text-align: center;
            vertical-align: middle;
        }

        .form-group {
            position: relative;
        }

        .form-arrow {
            position: absolute;
            top: 0.65rem;
            right: 0.5rem;
            z-index: 10;
            font-size: 1.35rem;
            line-height: inherit;
            color: var(--color-darks);
        }

        .form .dropdown {
            position: relative;
        }

        .form .dropdown-select {
            position: relative;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            cursor: pointer;
            user-select: none;
            width: 100%;
            height: auto;
            padding: 0.75rem 1.25rem;
            border: none;
            outline: none;
            border-radius: 0.25rem;
            color: var(--color-black);
            background-clip: padding-box;
            background-color: var(--color-white);
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease-in-out;
        }

        .form .dropdown-menu {
            position: absolute;
            display: none;
            top: 100%;
            left: 0;
            width: 100%;
            z-index: 10;
            border-radius: 0.25rem;
            background-color: var(--color-white);
            box-shadow: var(--shadow-large);
            transition: all 0.3s ease-in-out;
        }
        .offer-sec{
            margin-top:0.5rem;
            margin-bottom:0rem;
        }

        .form .dropdown-menu-inner {
            max-height: 16rem;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .form .dropdown-menu-inner::-webkit-scrollbar {
            width: 5px;
            height: auto;
        }

        .form .dropdown-menu-inner::-webkit-scrollbar-thumb {
            border-radius: 0.25rem;
            background-color: red;
            box-shadow: var(--shadow-small);
        }

        .form .dropdown-menu-item {
            font-family: inherit;
            font-size: 1rem;
            font-weight: normal;
            line-height: inherit;
            cursor: pointer;
            user-select: none;
            padding: 0.65rem 1.25rem;
            background-color: var(--color-white);
            transition: all 0.2s ease-in-out;
        }

        .form .dropdown-menu-item:hover {
            color: var(--color-black);
            background-color: var(--color-greys);
        }

        .form .dropdown-menu-item.is-select,
        .form .dropdown-menu-item.is-select:hover {
            color: var(--color-white);
            background-color: var(--color-blues);
        }

        .form .dropdown-menu-search {
            display: block;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            width: 100%;
            height: auto;
            padding: 0.65rem 1.25rem;
            border: none;
            outline: none;
            color: var(--color-black);
            background-clip: padding-box;
            background-color: var(--color-light);
        }
        .list-unstyled a li img{
            height:26px !important;
            width:32px!important;

        }
        .list-unstyled a li{
            padding:3px !important;
        }
        .wrapper-column {
            max-width: 40rem;
            height: auto;
            margin: 0 auto;
            padding: 1rem 0rem;
            border-radius: 0.25rem;
            background-color: var(--color-white);
            box-shadow: var(--shadow-medium);
        }
        .wrapper-column form{
            background-color:white;
            color:black;
        }
        .wrapper-column .form .dropdown-menu{
            background-color:white;
            color:black;
        }
        .list-unstyled {
            margin-bottom:5px;
        }
        .list-unstyled a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
        .list-unstyled a li{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 90%;
            font-size:16px;
        }


        #dropdownMenuClickableInside{
            width:80%;
        }
        #dropdownMenuClickableInside input{
            height:45px;
        }


        @media only screen and (max-width: 991px){
            .search-section{
                padding-right: 0px !important;
                padding-left: 0px !important;
                width: 100%;
                search-section
            }

            #dropdownMenuClickableInside {
                width: 100%;
            }

            .statelist {
                position: absolute;
                max-height: 400px;
                overflow-y: scroll;
                z-index: 999999;
                background-color: #fff;
                cursor: pointer;
                min-width: 100% !important;
                /* border-bottom: 1px solid #ccc; */
            }
        }
    </style>
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
                <div class="col-md-12 col-sm-12">
                    <div class="about-safe-text mb-0 text-center">
                      <h2 class="mans_headeff mb-3" style="font-size:2rem;">Aramex International Courier Services in Delhi</h2>
                    </div>
                    <!--<img src="assets/img/arabg.jpeg" alt="Aramex International Courier Services">-->
                    <img src="assets/img/page-banner/banner.jpg" alt="D-Express International Courier Services">

                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="about-safe-text mb-0">

                                <p>Today, internet must need everyone in the society. We arrange everything online. Our banking, keeping the agenda and being able to transfer all kinds of data in a fast way. This also includes online purchases. With the rise of web shops, consumers have the opportunity to shop 24X7 from the comfort of their home. As an entrepreneur, you can of course count on a nice growth. Reaching your target group is therefore not only easier with the advent of the internet, but also faster and larger. How well are you as an entrepreneur prepared for the growth of your web shop? And how do you arrange the logistics for your customers? A rapid increase in your business automatically means more deals and shipments. As an online entrepreneur, you don't always have your own delivery. In that case, it is nice if you hire Aramex International Courier Services in Delhi. But what are the advantages of working with a Top International Courier Services Aramex in Delhi? </p>





                            </div>

                        </div>
                    </div>
                                                        <?php include "international-courier-service-delhi/include/enquiry_form.php" ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-safe-text">
                                <div class="mansi-area">
                                    <h1 class="mt-4">Working With a Courier? These Are the Benefits for Your Company</h1>

                                    <div class="">
                                        <p>If you want to enter into a partnership with a courier service, you can count on quite a few advantages as an entrepreneur. Not only can you fully concentrate on what you are good at, but you can also be sure that the logistics are in good hands. Especially if you regularly have to send parcels to abroad from Delhi, the Aramex International Courier in Delhi, it is nice if you can rely on an Armex courier service. This collaboration gives you as an entrepreneur, quite a few advantages. Some of these are:
                                        </p>
                                        <ul>
                                            <li>	Efficient time saving for you as an entrepreneur</li>
                                            <li>	Professional approach to your customers</li>
                                            <li>	Limiting the risk- such as damage, loss, etc.</li>
                                            <li>	Flexible shipping at any time</li>
                                            <li>	A Top courier service is distinctive and thinks along</li>

                                        </ul>
                                        <p>A <a href="https://rapidexworldwide.com/">top International courier service</a> goes further than just delivering your packages. In addition, the courier company has direct contact with your customers and is therefore the business card for your company. The appearance and reliability of a courier service is therefore of great importance. There are a number of things you should take into account when you are looking for a good courier like International Courier Services-Aramex in Delhi that meets your needs in Delhi.</p>
                                        <p>For example, you may be looking for a Delhi - International Courier Services, or a courier who also provides evening and weekend deliveries. Do you often have express transport packages? Then choose a courier service that also provides express deliveries. With these considerations, you always make the right choice for a courier service that matches the logistics needs of your company. Aramex Courier in Delhi is giving a very good service in Delhi for your international shipments.</p>
                                        <hr>
                                        <h1 class="mt-4">Why Choose Aramex International Courier Services?</h1>
                                        <div class="mans_whyc">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mans_whbox mt-4">
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                                <img src="assets/img/csico.png" alt="Call us for Aramex International Courier Service">
                                                            </div>
                                                            <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                                <h5>Efficient and easily accessible customer service</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mans_whbox mt-4">
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                                <img src="assets/img/docico.png" alt="Aramex Courier Company">
                                                            </div>
                                                            <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                                <h5>collection and delivery of your documents at home or in the office
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mans_whbox mt-4">
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                                <img src="assets/img/insuico.png" alt="Aramex Courier Services in Delhi">
                                                            </div>
                                                            <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                                <h5>insurance also<br> extendable to documents</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mans_whbox mt-4">
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                                <img src="assets/img/delivico.png" alt="Aramex Delivery Services">
                                                            </div>
                                                            <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                                <h5>Fast and timely<br> delivery
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mans_whbox mt-4">
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                                <img src="assets/img/trackico.png" alt="">
                                                            </div>
                                                            <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                                <h5>Excellent shipment<br> Tracking</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mans_whbox mt-4">
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                                <img src="assets/img/netico.png" alt="Worldwide Aramex Courier Services">
                                                            </div>
                                                            <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                                <h5>Wide Network all over<br> the world</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h1 class="mt-4">Aramex and Rapidex Worldwide Express</h1>
                                        <p>International shipping with Rapidex Worldwide Express is easy, we completely unburden you and it may just be that it is cheaper. For your international shipments, we have agreements with a number of large and smaller international carriers. Depending on the destination, we choose the most reliable partner. Thanks to the volume we can offer, we can charge very competitive rates, often more competitive than if you offer it yourself at the same partner. In addition, we monitor your shipment and notify you when unforeseen circumstances arise. For transport to and from Delhi, we are able to transport the shipments in an affordable price. </p>
                                    </div>
                                    <hr>
                                    <div class="section-content container">
                             <div class="row d-flex justify-content-center">

        <div class="col-lg-12 col-md-12">

            <!-- BLOG START -->
            <div class="blog-post-single-outer offer-sending mb-0">
                <div class="blog-post-single bg-white">

                    <div class="wt-post-info">



                        <div class="wt-post-title ">

                            <h2 style="font-size:1.7rem;">Popular Countries for Sending International Courier from Delhi
                            </h2>

                        </div>

                        <div class="wt-post-discription">

                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="tw-checked-list">
                                        <ul>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/usa.php" target="_blank" title="Send International Courier from Delhi to USA">Courier from Delhi to USA</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/australia.php" target="_blank" title="Send International Courier from Delhi to Australia">Courier from Delhi to Australia</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/canada.php" target="_blank" title="Send International Courier from Delhi to Canada">Courier from Delhi to Canada</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/uk.php" target="_blank" title="Send International Courier from Delhi to UK">Courier from Delhi to UK</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/uae.php" target="_blank" title="Send International Courier from Delhi to UAE">Courier from Delhi to UAE</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/newzealand.php" target="_blank" title="Send International Courier from Delhi to new-zealand">Courier from Delhi to New Zealand</a></li>
                                        </ul>
                                    </div>
                                </div>



                                <div class="col-lg-3 col-md-6">
                                    <div class="tw-checked-list">
                                        <ul>

                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/germany.php" target="_blank" title="Send International Courier from Delhi to Germany">Courier from Delhi to Germany</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/france.php" target="_blank" title="Send International Courier from Delhi to France">Courier from Delhi to France</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/italy.php" target="_blank" title="Send International Courier from Delhi to Italy">Courier from Delhi to Italy</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/malaysia.php" target="_blank" title="Send International Courier from Delhi to Malaysia">Courier from Delhi to Malaysia</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/south-africa.php" target="_blank" title="Send International Courier from Delhi to South Africa">Courier from Delhi to South Africa</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/singapore.php" target="_blank" title="Send International Courier from Delhi to Singapore">Courier from Delhi to Singapore</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="tw-checked-list">
                                        <ul>

                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/hong-kong.php" target="_blank" title="Send International Courier from Delhi to Hongkong">Courier from Delhi to Hongkong</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/china.php" target="_blank" title="Send International Courier from Delhi to China">Courier from Delhi to China</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/spain.php" target="_blank" title="Send International Courier from Delhi to Spain">Courier from Delhi to Spain</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/kuwait.php" target="_blank" title="Send International Courier from Delhi to Kuwait">Courier from Delhi to Kuwait</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/qatar.php" target="_blank" title="Send International Courier from Delhi to Qatar">Courier from Delhi to Qatar</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/saudi-arabia.php" target="_blank" title="Send International Courier from Delhi to Saudi Arabia">Courier from Delhi to Saudi Arabia</a></li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="tw-checked-list">
                                        <ul>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/sweden.php" target="_blank" title="Send International Courier from Delhi to Sweden">Courier from Delhi to Sweden</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/belgium.php" target="_blank" title="Send International Courier from Delhi to Belgium">Courier from Delhi to Belgium</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/poland.php" target="_blank" title="Send International Courier from Delhi to Poland">Courier from Delhi to Poland</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/bahrain.php" target="_blank" title="Send International Courier from Delhi to Bahrain">Courier from Delhi to Bahrain</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/oman.php" target="_blank" title="Send International Courier from Delhi to Oman">Courier from Delhi to Oman</a></li>
                                            <li><a href="https://rapidexworldwide.com/international-courier-service-delhi/japan.php" target="_blank" title="Send International Courier from Delhi to Japan">Courier from Delhi to Japan</a></li>

                                        </ul>
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

                                  <hr>
                                      <?php include("include/component/pickup_location.php") ?>

                                  

                                            <div class="container usa-faq">
                                                <h2>FAQs</h2>
                                                <div class="row faq-r">
                                                    <div class="panel-group mt-4" id="accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingOne">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                          Can Armex Collect The Parcels At My Home?
                                                                        <span> </span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="panel-body">
                                                                       Of course, the Armex staff is at your disposal should you not be able to go to our offices. Just get in touch with us.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                       What Can I Ship With Armex?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                <div class="panel-body">
                                                                     With Armex it is possible to send from a single letter to a large package without quantity limitations.

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingThree">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                             Does Armex Allow Me To Ship Cash On Delivery?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="panel-body">
                                                                      Yes through Armex you can get the service of COD
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingfour">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                                          Does Armex Allow Me To Insure My Parcel?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                                                <div class="panel-body">
                                                                    Yes of course, Armex courier offers the possibility of insuring your goods for the full or partial value with an additional price. The value of the goods must in any case be proven with an invoice or receipt or other replacement document in the event that the goods shipped are broken or lost.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingfive">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                                       Can I Indicate A Specific Day Or Time For Parcel Delivery?

                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                                                <div class="panel-body">
                                                                     Yes, we can schedule the delivery for a set day according to your needs.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingsix">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                                           What Happens If The Courier Does Not Find The Recipient?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                                                <div class="panel-body">
                                                          If at the first delivery attempt the recipient is not available at the address indicated, the courier will make multiple delivery attempts (usually three).
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

                    <style>
                        .accordion button{
                            text-align:left;
                        }
                        .accordion .card{
                            margin-bottom:15px;
                        }
                        .accordion .card-header{
                            background: #4d148c;
                        }
                        .accordion .card-header h5, .accordion .card-header .btn-link{
                            color:#fff;
                        }
                        .about-text-area .about-safe-text h1 {
                            font-size: 24px;}


                        .mansi-area ul li{
                            line-height:2;
                            font-size:16px !important;
                        }
                        @media (max-width:767px){
                            .mansi-area ul li{
                                line-height:2;
                            }
                        }
                        .btn:not(:disabled):not(.disabled) {
                            cursor: pointer;
                            text-decoration: auto;
                        }
                    </style>
                </div>

                <!--<div class="col-md-3 col-sm-12">-->
                <!--  <div class="leftPanel">-->
                <!--    <h2>Our Services</h2>-->
                <!--    <ul>-->
                <!--      <li><a href="international-courier-services.php">International Courier Services</a></li>-->
                <!--      <li><a href="air-cargo-services.php">Air Cargo Services</a></li>-->
                <!--      <li><a href="sea-cargo-services.php">Sea Cargo Services</a></li>-->
                <!--      <li><a href="express-document-services.php">Express Document Services</a></li>-->
                <!--      <li><a href="medicine-delivery-services.php">Medicine Delivery Services</a></li>-->
                <!--      <li><a href="express-import-services.php">Express Import Services</a></li>-->
                <!--      <li><a href="food-items-delivery.php">Food Items Delivery</a></li>-->
                <!--      <li><a href="excess-baggage-delivery.php">Excess Baggage Delivery</a></li>-->
                <!--      <li><a href="household-items-delivery.php">Household Items Delivery</a></li>-->
                <!--      <li><a href="express-export-services.php">Express Export Services</a></li>-->
                <!--      <li><a href="commercial-shipment.php">Commercial Shipment</a></li>-->
                <!--      <li><a href="cosmetics-delivery-services.php">Cosmetics Delivery Services</a></li>-->

                <!--    </ul>-->

                <!--    <div class="row mt-4">-->
                <!--        <div class="col-12 mb-3">-->
                <!--        <a href="#" class="list"><span class="mt-3 mb-4"><img src="assets/img/services/leftpanel.jpg" alt="image"></span></a></div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed1.jpg" alt="Aramex Sea Courier and Cargo Services">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed2.jpg" alt="Aramex Document Delivery Services">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed3.jpg" alt="Aramex Food Delivery Services">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed4.jpg" alt="Aramex Air Courier and Cargo Services">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed5.jpg" alt="Aramex International Courier Services in Delhi">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed6.jpg" alt="Aramex Product Delivery Services in Delhi">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed7.jpg" alt="Aramex International Import and Export Courier Services">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed8.jpg" alt="Aramex Courier and Cargo Services">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed9.jpg" alt="Aramex medicin Courier Company">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed10.jpg" alt="Aramex Packaging Services in Delhi">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed11.jpg" alt="Aramex Medicine Delivery Services in Delhi">-->
                <!--        </div>-->
                <!--        <div class="col-md-6 col-6 mb-3">-->
                <!--            <img src="assets/img/fed12.jpg" alt="Aramex international Delivery Services">-->
                <!--        </div>-->
                <!--    </div>-->
                <!-- </div>-->
                <!--  <div class="mt"></div>-->
                <!--</div>-->
            </div>

        </div>
    </div>
    </div>
<?php include("include/footer.php") ?>