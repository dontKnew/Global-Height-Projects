<?php
define("TITLE", "Shree Tirupati Courier Services in Delhi | Rapidex Worldwide Express");
define("DESCRIPTION", "Rapidex Worldwide Express has all of connections and experience that are needed to run a successful Shree Tirupati Courier Services in Delhi");
define("KEYWORDS", "Shree Tirupati Courier Services in Delhi, Shree Tirupati Courier Services, Shree Tirupati International Courier Services in Delhi,International Courier in Delhi, Courier Service in Delhi, Cheapest International Courier in Delhi, Best International Courier in Delhi, Fastest International Courier in Delhi, International Courier Service in Delhi, Cheapest International Courier Service
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
                            <div class="about-safe-text mb-4">
                                <h2 class="mans_headeff mb-3 text-center" style="font-size:2rem;">Shree Tirupati Courier Services in Delhi</h2>

                                <img src="assets/img/page-banner/banner.jpg" alt="D-Express International Courier Services" class="mb-4">
                                <p>The development of e-commerce is one of the factors driving India's logistic growth. This is due to the need for services for packages/goods delivery which is increasing rapidly. This need has led to the emergence of more and more courier delivery services. The definition of a courier is someone who conveys something important quickly from one place to another. The selection of the best and most reliable courier service is important to ensure that the goods can arrive quickly and on the desired date and of course at a friendly delivery price. By hiring Shree Tirupati Courier Services in Delhi, when you have viewed the results of the comparison, there will be some variables that you will need to take into account to choose the courier that best suits your needs.</p>

                            </div>

                        </div>
                    </div>
                                             <?php include "international-courier-service-delhi/include/enquiry_form.php" ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-safe-text mt-4">
                                <div class="mansi-area">

                                    <div class="col-lg-12 col-md-12">
                                        <h1>The Criteria for Choosing the Best Shipping Courier in Delhi</h1>
                                        <p>To help you find the best solution for your shipments from Delhi, we will start by considering the characteristics of some couriers on the Indian market and the factors useful for making a comparison, and then continue later on how to do an objective analysis of your needs.</p>
                                        <p>In order to evaluate which is the best operator for your needs, you should know every aspect and then evaluate all the factors related to shipments, company structure and reputation.</p>
                                        <p>Among the factors related to shipments, you will have to consider the proposed rates, delivery times and additional services offered. The fact that it is a multinational with its own network of vehicles, rather than a national company or a newly born start-up, affects the delivery times that will be offered to you. Or the ability to provide a tracking service in real time or no. There are many courier agencies in Delhi but among them Shree Tirupati Group Courier is providing a better service in Delhi, whom you can Hire.
                                        </p>
                                        <hr>
                                        <h1>Evaluate Online Presence and Reviews</h1>
                                        <p>One of the essential steps to follow when you decide to choose a courier to ship the boxes: type the name on Google and check some official references. If you want to work with the big names there shouldn't be any problems, usually their website and Facebook page are online. Don't rely on few opinions. It also looks for older results, perhaps on platforms not owned by the company. In this regard Shree Tirupati Courier Service Provider in Delhi offers best online courier service in Delhi.
                                        </p>
                                        <hr>
                                        <h1>Shipping From Delhi with the Cheapest Way</h1>
                                        <p>The customer must choose the option that best suits their needs, where in addition to the price; you must consider other factors such as delivery times. With Shree Tirupati Courier Delhi you can send urgent, heavy, fragile or standard parcels (cheaper).</p>
                                        <p>It is necessary to evaluate, among other things, the comfort provided by these services, which are door to door, the possibility of purchasing insurance on your shipment at the time of booking and the possibility of always knowing the location of the package with the code of tracking number.</p>
                                        <p>In addition to the guarantee offered by the best transport companies on the market, you also have the option of sending a parcel from Delhi at the best price, so don't think too much and take advantages of sending parcels with Shree Tirupati Courier in Delhi right from the start.

                                        </p>
                                        <hr>
                                        <h1>Rapidex Courier: What Does Your Company Need?</h1>
                                        <p>The market for express couriers is very large and to choose the best solution for your company you must first find out what you need. It is a delicate decision: the service you choose will be judged by the customer and in the event of a negative experience they may decide not to place orders from you anymore. Relying on Shree Tirupati Courier Services is a best option; they have an excellent express courier service with same day delivery facilities.</p>
                                        <hr>
                                        <h1 class="mt-4">Why Choose Shree Tirupati Courier Services in Delhi</h1>
                                        <div class="mans_whyc">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mans_whbox mt-4">
                                                        <div class="row">
                                                            <div class="col-md-3 col-lg-3 col-4 d-flex justify-content-center align-items-center">
                                                                <img src="assets/img/csico.png" alt="">
                                                            </div>
                                                            <div class="col-md-9 col-lg-9 col-8 d-flex">
                                                                <h5>Directly reach all parts of India without intermediaries.</h5>
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
                                                                <h5>Non-stop service and no holidays.</h5>
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
                                                                <h5>Have a responsive and fast customer service in handling various consumer complaints.</h5>
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
                                                                <h5>Longer Operating Hours have many branches that can be found easily.</h5>
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
                                                                <h5>Have a good tracking system, so you can easily track the whereabouts and delivery process of the shipment.</h5>
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
                                                                <h5>Has the widest delivery range, even reaching remote and inaccessible areas.</h5>
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
                                                                <h5>Have online services and can be accessed easily.</h5>
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
                                                                <h5>Fares are more affordable and can compete well with other companies.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h1 class="mt-4">Shree Tirupati and Rapidex Worldwide Express</h1>
                                        <p>Nowadays the market offers a wide choice to make cheap shipments of a package. Rapidex Worldwide Express has decided to adopt the policy of offering a quality and management service, paying particular attention to the needs of its customers, present and future. We provide its customers with a competent staff who with experience will respond to your every need in the shortest possible time. Rapidex, the Shree Tirupati Courier Service Provider in Delhi the best couriers recognized nationally and internationally in the field of transport and shipping; furthermore, at your disposal, you will find a professional, attentive and kind staff who will try as far as possible to resolve and explain any misunderstandings and problems inherent to the shipments themselves. </p>
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
                                                                            When Does My Package Arrive?
                                                                        <span> </span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                <div class="panel-body">
                                                                        We inform you of the shipment of the package with our shipping confirmation e-mail, and you can also check through tracking service.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                   What Will I Do If I Am Not At Home At The Time Of Delivery?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                <div class="panel-body">
                                                                 The courier leaves the notice of the passage with the telephone number. Contact them to reschedule a new delivery.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingThree">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                         Can I Ask For Delivery To A New Address Other Than The Billing Address?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                <div class="panel-body">
                                                         The courier delivery time is decided by you and given all the shipping possibilities that we are able to offer you, ask our customer care center for the expected delivery time.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingfour">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                                    At What Time Do They Collect / Deliver The Shipments?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                                                <div class="panel-body">
                                                                 Usually, deliveries are made in the morning and parcels are collected in the afternoon. For special requests, our staff will communicate the feasibility, depending on the organizational needs of the courier.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingfive">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                                 When I Can Track My Package In Rapidex Worldwide Express?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                                                <div class="panel-body">
                                                                       The tracking service is available a few hours after the courier picks up the package.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingsix">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                                      My Package Has Been Damaged, What Should I Do?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                                                <div class="panel-body">
                                                                      If the package arrives at its destination with obvious signs of damage to the package, the Recipient must notify the Courier of the "conditional" acceptance of the shipment.
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
                                                                       What Payment Methods Do You Accept?
                                                                        <span></span>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseseven" class="panel-collapse collapse"
                                                                 role="tabpanel" aria-labelledby="headingseven">
                                                                <div class="panel-body">
                                                                 We accept online payments, credit and Debit card option.
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
    </div>

<?php include("include/footer.php") ?>