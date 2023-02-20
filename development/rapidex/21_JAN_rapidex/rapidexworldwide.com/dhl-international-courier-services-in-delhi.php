<?php
define("TITLE", "D-Express Courier Services in Delhi | Best rates for International Courier");
define("DESCRIPTION", "The D-Express Courier Company is one of the world's leading logistics companies in the field of express cargo delivery. Contact Rapidex Worldwide Express today through D-Express Company");
define("KEYWORDS", "D-Express International Courier Services in Delhi, D-Express Courier Services Provider in Delhi, DHL International Courier Services in Delhi, DHL International Courier in Delhi, DHL International Courier, Best DHL International Courier in Delhi, Fastest DHL International Courier in Delhi, DHL Courier in Delhi");
?>



<?php include("include/header.php")?>


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
    .about-text-area .about-safe-text h2{
        margin-top:1rem;
    }
</style>

<style type="text/css">
      

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
            line-height:1.5rem !important;
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-safe-text mb-4 text-center ">            <div class="about-safe-text mb-0">

                                <div class="about-safe-text mb-0 ">

                                    <h2 class="mans_headeff mb-3" style="font-size:2rem;">D-Express International Courier Services In Delhi
                                    </h2>
                                </div>
                                <img src="assets/img/page-banner/banner.jpg" alt="D-Express International Courier Services">
                                <div class="about-safe-text mb-0 mt-4">

                                    <p>If in the past, we often found it difficult to send goods, packages, and logistics, materials, now with the existence of an expedition service, it is easier for us to send packages. The D-Express Courier Company is one of the world's leading logistics companies in the field of express cargo delivery. Usually D-Express International Courier Services in Delhi shipping are used for the delivery of goods that are rather expensive in the premium segment, because the postage is not cheap, but the quality is appropriate. Tracking D-Express shipments is of course an undeniable plus, thanks to which you will always be aware of the movement of your parcel, but there are subtleties in the tracking process, which we will talk about.</p>
                                    <p>Courier services are well known for their speed of delivery and reliability in delivering packages. For shipping packages to national or international destinations from Delhi, opting for a well-deserved courier company such as D-Express Courier Services Provider in Delhi is highly recommended.</p>





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
                                background:#e6e6e7 !important;
                                color:black !important;
                            }
                            .accordion .card-header h5{

                            }
                            .accordion .card-header h5, .accordion .card-header .btn-link{
                                color:#4d148c;
                                font-weight:700;
                            }
                            h1{
                                font-size:26px;
                            }

                            .mansi-area h1{
                                font-size:24px !important;
                            }
                            .mansi-area ul li{
                                line-height:4;
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
                         <?php include "international-courier-service-delhi/include/enquiry_form.php" ?>
                                 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="about-safe-text">
                                    <div class="mansi-area mt-4">
                                        <h1>International Transport</h1>

                                        <p>Traditional postal services mostly offer limited local parcel services. There were also limitations on the weight and dimensions of a package. However, this is not the same with professional courier and parcel companies. By hiring D-Express courier services, you no longer have to worry about delivering international packages. D-Express International courier also takes into account the laws and regulations of the destination country when shipping packages abroad.
                                        </p>

                                    </div>
                                    <hr>
                                    <div class="mansi-area mt-4">
                                        <h1>Save Time</h1>

                                        <p>Courier services can be very helpful for busy people and businesses. Since most courier companies send a person to collect the package, the need to go to the courier company's office is eliminated. This saves time that can be used for other things. D-Express Delhi have their own Transport service who can collect your parcel from your door step.
                                        </p>

                                    </div>
                                    <hr>
                                    <div class="mansi-area mt-4">
                                        <h1>Tracking Service</h1>

                                        <p>Hiring tracking service is very helpful, especially for international shipments. After arranging a delivery with a courier company, you will be given a tracking number. You simply have to enter the website of the courier company, enter the tracking number and obtain all the details about the delivery status of the packages. D-Express courier company  Delhi has the best tools to track your shipments.
                                        </p>

                                    </div>
                                    <hr>
                                    <div class="mansi-area mt-4">
                                        <h1>Do Not Worry About Your International Shipping  </h1>
                                        <p><b>International Courier Services-D-Express in Delhi</b> is flexible and focuses on your logistics needs. In addition, choosing these couriers has even more advantages. For example, your shipment is insured with good insurance company and you receive personal attention. They can also have your order delivered both domestically and abroad. Would you like to know more about the prices? They have a wide range of means of transport through their own fleet.
                                        </p>
                                    </div>
                                    <hr>
                                    <h1 class="mt-4 why-sec">Why Choose D-Express Courier Services?</h1>
                                    <div class="mans_whyc pb-4">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/siico.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>Strong investment in supply chain technology and its global presence</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/rtctico.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>Real Time courier <br>Tracking</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/pgsico.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>provide you with globally standardized, cost-effective, high-quality and innovative solutions</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/eigico.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>Easy Insurance for the <br>goods</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/ccsico.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>24/7 customer care <br>service</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/wfico.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>Warehouse <br>facility</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                                        How Can I Know The Exact Position Of My Shipment Or Parcel?
                                                                        <span> </span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="panel-body">
                                                                     Just enter your shipment no or tracking no in the “Track your Shipment” section, you will get the perfect location of your shipment.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                         When Will My Tracking Information Be Displayed?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                <div class="panel-body">
                                                                     The traceability of events is normally displayed 24-48 hours after receiving the traceability and search ID. In general, once the shipment has arrived at our facility, a traceability event appears.

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingThree">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                          Why Is My Tracking Number / ID Not Working?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="panel-body">
                                                                   Make sure you have entered the right tracking number in the correct format. If the traceability ID still does not work, contact us or the online store.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingfour">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                                          Are There Any Additional Costs For Multiple Shipments?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                                                <div class="panel-body">
                                                                     For multiple shipments there are no additional costs, you pay for each package shipped.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingfive">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                                       The Shipment Arrived Damaged. How Should I Proceed?

                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                                                <div class="panel-body">
                                                                      If the goods are lost or damaged in transit and the damage is visible externally, make a note of this on the way-bill or transit documents upon receipt of the shipment.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingsix">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                                        How Do I Prepare A Claim?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                                                <div class="panel-body">
                                                                    If you would like to make a claim, please visit the page that explains how to prepare one. On this page you will find information on how and when to prepare a claim.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    

                                                    </div>

                                                </div>
                                            </div>
                                        </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-sm-12">-->
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
                    <!--            <img src="assets/img/fed1.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed2.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed3.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed4.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed5.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed6.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed7.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed8.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed9.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed10.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed11.jpg" alt="">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-6 col-6 mb-3">-->
                    <!--            <img src="assets/img/fed12.jpg" alt="">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!-- </div>-->
                    <!--  <div class="mt"></div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </DIV>
<?php include("include/footer.php")?>