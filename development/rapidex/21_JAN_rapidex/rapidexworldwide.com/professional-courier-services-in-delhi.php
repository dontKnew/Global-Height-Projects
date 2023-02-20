<?php
define("TITLE", "Professional Courier Services in Delhi | Rapidex Worldwide Express");
define("DESCRIPTION", "Rapidex Worldwide Express has all of connections and experience that are needed to run a successful Professional Courier Services in Delhi.");
define("KEYWORDS", "Professional Courier Services in Delhi, Professional Courier Services, International Professional Courier Services in Delhi,International Courier in Delhi, Courier Service in Delhi, Cheapest International Courier in Delhi, Best International Courier in Delhi, Fastest International Courier in Delhi, International Courier Service in Delhi, Cheapest International Courier Service
in Delhi, International Courier Services in Delhi, Cheapest International Courier Price in Delhi, Best International Courier Price in Delhi, Top International Courier Price in Delhi, Fastest International Courier Price in Delhi, Relaible International
Courier Price in Delhi, Fastest International Courier Company in Delhi, Relaible International Courier Company in Delhi, Cheap International Courier Company in Delhi, International Shipping Company in Delhi, Cheapest International Shipping Company in
Delhi, Best International Shipping Company in Delhi, Relaible International Parcel Cost in Delhi, Cheap International Parcel Cost in Delhi, International Parcel Tariff in Delhi, Cheapest International Parcel Tariff in Delhi, Best International Parcel
Tariff in Delhi, Top International Parcel Tariff in Delhi, Fastest International Parcel Tariff in Delhi, Relaible International Parcel Tariff in Delhi, Cheap International Shipping Price in Delhi, International Shipping Cost in Delhi, Cheap International
Shipping Tariff in Delhi, International Air Parcel Price in Delhi, International Air Courier Price in Delhi, International Cargo Service in Delhi, Best International Shipping Price in Delhi, Fastest International Shipping Cost in Delhi, Relaible International
Shipping Cost in Delhi, Cheap International Shipping Cost in Delhi, International Shipping Tariff in Delhi, Cheapest International Shipping Tariff in Delhi, Best International Shipping Tariff in Delhi, International Air Parcel Price in Delhi, International
Air Parcel Charges in Delhi, International Courier Services Provider in Delhi, International Courier And Cargo Service in Delhi, International Courier And Cargo Services in Delhi, International Express in Delhi, International Economy in Delhi, International
Priority in Delhi, International Air Express in Delhi, International Air Economy in Delhi, Cheapest International Shipping in Delhi, Cheapest International Parcel in Delhi, Best International Parcel in Delhi, Best International Parcel Service in Delhi,
Fastest International Parcel in Delhi, Fastest International Parcel Service in Delhi, International Shipping Services in Delhi, International Courier Provider in Delhi, International Cargo in Delhi, International Cargo Service in Delhi");
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

                <div class="row ">
                    <div class="col-lg-12">
                        <div class="about-safe-text mb-0 ">
                             <h2 class="mans_headeff mb-3" style="font-size:2rem; text-align:center;">Professional Courier Services in Delhi</h2>
                        </div>
                        <div class="about-safe-text mb-4">

                            <img src="assets/img/page-banner/banner.jpg" alt="D-Express International Courier Services" class="mb-4">

                            <p>If you have a business that is dedicated to making home deliveries, or you have an online store or a business with an eye on foreign markets, a courier delivery service can help you take your business to the top level. They are not just another service provider, they are a strategic logistics partner that can strengthen small and medium-sized companies (SMEs) to optimize their processes, access technology and be more efficient. And you can count on an excellent product, but if the distribution is not adequate or you do not have the capacity in your coverage, there could be shortages on the shelf, delays in deliveries, losses or damages during transportation, which in the end will leave with a dissatisfied customer. Sure, you can do it yourself. However, consider the experience and infrastructure that these companies have to ensure that your shipment reaches its destination on time, as well as the volume of their logistics procedures. This allows them to offer lower prices than if you did it on your own, and that is where you need to hire Professional Courier Services in Delhi for collection and bulk shipments of your products. Because the solutions are tailor-made, they exist for businesses of any size and line of business; to help small entrepreneurs focus on doing what they do well and leaving their logistics to the experts.</p>

                        </div>

                    </div>
                </div>
                                     <?php include "international-courier-service-delhi/include/enquiry_form.php" ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-safe-text">
                            <div class="mansi-area">
                                <h1 class="mt-4">Concepts to Consider Before Choosing Professional Courier Services</h1>
                                <p>The shipping method chosen for your online store is linked to the costs that you are going to charge your customers for their purchases, so the lower they are, the better. Therefore, before launching into the choice of your company, you should assess the following points to make your eCommerce shipments:</p>
                                <p>The Price: keep in mind that the price of the courier will vary depending on the product to be sent. Prices usually change depending on the weight and fragility of the product. In this sense, Professional Courier Service Provider in Delhi offers a reasonable price for online sellers as well as individual. </p>
                                <p>The Destination:  Another key factor when hiring a courier company for your business, since the price varies considerably depending on it. In the event that your business exports abroad, you should take a look at customs since they can affect your business as they are closely related to eCommerce.</p>
                                <p>Quantity and Regularity: These points must be taken into account before hiring a courier company since the costs differ if you choose an international company or a company that works in nationally. For example, if you send orders abroad sporadically, it is better to contract the so-called electronic logistics marketplaces, which advertise the available space on their trucks, ships, planes or trains so that they can rent a site from time to time. These shared spaces have a lower price and you can generate alerts that inform you when they go to the destination that interests you. Regarding the number of orders to send per month, it is best to hire a reliable courier agency like Rapidex Worldwide Express.</p>
                                <p>Delivery Times: Every courier has a certain collection period. Before choosing one company or the other, check out these stats and find out if you can choose between morning or afternoon hours, how many days in advance to order, etc. Professional Courier Delhi offers 24-hour services with delivery the next day where customers receive their package in an acceptable time interval.</p>
                                <p>Additional Services: These can make all the difference and tip the scales in favor of one or more company. They are services that can be very useful related to logistics, such as storage, labeling or packaging. Some options are highly recommended since they already have an established price pack that will reduce your costs. Professional Services in Delhi offers storage service to their customer.
                                </p>
                                <hr>
                                <div class="col-lg-12 col-md-12">


                                    <h1 class="mt-4">Why Choose Professional Courier Services in Delhi</h1>
                                    <div class="mans_whyc">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/csico.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>Excellent customer service and support</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/delivico.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>Have a fleet of vehicles, the time and the experience to take care of the delivery of your packages.</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/tntico1.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>Covers all metros , all major cities nationally and internationally</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/docico.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>We guarantee the collection, assembly, packing and shipment of documents / packages / merchandise in boxes, envelopes or any form of secure package according to your specifications.</h5>
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
                                                            <h5>Right tracking system</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="mans_whbox mt-4">
                                                    <div class="row">
                                                        <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                            <img src="assets/img/fedico1.png" alt="">
                                                        </div>
                                                        <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                            <h5>Same day delivery option </h5>
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
                                                            <h5>Well trained and professional staff</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h1 class="mt-4">Professional and Rapidex Worldwide Express</h1>
                                    <p>Rapidex Worldwide Express has oriented its activities taking into account the needs of both the private individual and the much more complex ones of offices and companies. To do this, it has focused on the adoption of services that meet the most varied needs, thus expanding the range of proposals for sending packages and correspondence over the years. We offer a complete Express Courier service, taking care of all the pre and post shipping phases at 360 degrees. In detail, the company provides for the packaging of the packages when required, the dispatch and monitoring of shipments. Thanks to the important partnership with Professional Group Courier. Therefore, based on key elements such as seriousness, clarity and professionalism, we now able to offer each customer the service that best meets their obvious needs.</p>
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
                                                                         How Can Track My Shipment?
                                                                        <span> </span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="panel-body">
                                                                    You can track by our easy tracking system, simply putting the tracking number.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                      Do You Have Any Corporate Plan?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                <div class="panel-body">
                                                                 Yes, we have, call our representative to know the plan briefly.

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingThree">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                      Can I Use My Credit Card For Payment?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="panel-body">
                                                               Yes, you can pay online through credit card, Debit card for your delivery.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingfour">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                                         Can I Get My Shipping Report Weekly If I Use The Service Of Professional Courier Through Rapidex Worldwide Express?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                                                <div class="panel-body">
                                                                     Rapidex Worldwide Express, the Professional Courier Service Provider in Delhi sends weekly, monthly and daily report to the customers.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingfive">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                                         Can I Be Notified Of The Delivery Of My Package?

                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                                                <div class="panel-body">
                                                                      Yes, with the help of Shipment Status Notification, an extremely useful tool, you will obtain a receipt by email within a few seconds after the end of your sending. Each notification consists of relevant information such as pickup and delivery times, signature, price, etc.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingsix">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                                         How Can I Track My Same Day Shipments?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                                                <div class="panel-body">
                                                                   As the industry's leading provider of courier delivery services, Rapidex Worldwide Express offers a wide range of options and features to help you track and trace the status of same-day courier delivery from beginning to end.
                                                                </div>
                                                            </div>
                                                        </div>
  <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingseven">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button"
                                                                       data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapseseven" aria-expanded="false"
                                                                       aria-controls="collapseseven">
                                                                       Are You Providing Shipping Service For Courier?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseseven" class="panel-collapse collapse"
                                                                 role="tabpanel" aria-labelledby="headingseven">
                                                                <div class="panel-body">
                                                                    Yes, we offer best insurance service in the industries.

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
<?php include("include/footer.php") ?>