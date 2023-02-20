<?php
    define("TITLE", "Track Your Shipment | Rapidex Worldwide Express");

?>

<?php include("include/header.php") ?>
<style>
 .three-box {
            margin-top:-50px;
            margin-bottom:10px;
        }
    @media only screen and (max-width: 600px) {
        .three-box {
            margin:unset;
        }
    }

    
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
<div class="tracking track pt-4 pb-100 backg">
    <div class="containerWidth" >

        <div class="container mycss mt-4">

            <h1 class="text-center text-white mb-5 p-0" style="font-size:26px;">India's Best International Courier Company</h1>

            <ul class="nav nav-tabs responsive d-flex justify-content-center flex-row" role="tablist">

              

                  <li class="nav-item">

                    <a class="nav-link" data-toggle="tab" href="#home" role="tab"> <i class="fa fa-cogs mainCss"
                                                                                      aria-hidden="true"></i><br/> Our

                        <br/> Services

                    </a>

                </li>
                
                <li class="nav-item"><a class="nav-link white  active" data-toggle="tab" href="#profile" role="tab"><i
                                class="fa fa-truck mainCss index-track-icon" aria-hidden="true"></i><br/>

                        Track</a></li>
                <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#messages" role="tab"><i
                                class="fa fa-edit mainCss" aria-hidden="true"></i><br/>

                        Rates<br>Enquiry</a></li>



            </ul>

            <!-- Tab panes -->

            <div class="tab-content responsive mainCsss2">
                   <!-- Rate & Transit Times -->
                <div class="tab-pane " id="messages" role="tabpanel" style="padding-top:4px">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-12 p-2">

                                <div class="about-safe-text">

                                    <div class="contact-form list list24 " style="margin:10px 0 10px 0 !important">

                                        <form name="dataform" action="list.php"
                                              class="reservation-form mt-20" method="post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group mysear">
                                                        <label>Pick Up Pin Code</label>
                                                        
                                                               <input type="text" id="pickupPincode" 
                                                                    pattern="[0-9]+" title="please enter number only" minlength="6" maxlength="6" class="form-control list  pickupPincode" name="pincode"
                                                                       value=""
                                                                       placeholder="Pick Up from Pin Code" required>
                                                                   <div class="required_pincode">
                                                                        <span class=" p-1" 
                                                                                style="color: #ffffff;
                                                                                letter-spacing: 0.5px;
                                                                                font-size: small;
                                                                                position: relative;
                                                                                left: 1px;
                                                                                background-color:rgb(205, 18, 18)
                                                                                ">
                                                                            Fillup pickup pincode first
                                                                        </span>
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <label> To, Destination </label>
                                                       <select name="country" class="form-control list load_country_on_click"
                                                                required style="padding-top:unset!important; padding-bottom:unset!important;">
                                                                <option selected="selected" value="">-Select Country-</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <label>Package Type</label>
                                                        <select name="package_type"
                                                                class="form-control list" required style="padding-top:unset!important; padding-bottom:unset!important;">
                                                            <option selected="selected" value="">-Package Type-</option>

                                                            <? $sqlpt = mysqli_query($conn, "select * from package_type");
                                                            while ($rowpt = mysqli_fetch_array($sqlpt)) { ?>
                                                                <option value="<? echo $rowpt['option_val']; ?>"><? echo $rowpt['name']; ?></option>

                                                            <? } ?>

                                                        </select>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <label>Weight</label>
                                                        <select name="weight"  class="form-control list"
                                                                required style="padding-top:unset!important; padding-bottom:unset!important;">

                                                            <option value="">-Select Weight-</option>
                                                            <option value="0.5">Up to 500 Grms</option>
                                                            <option value="" disabled="disabled">--------</option>
                                                            <option value="1">1.0 Kg</option>
                                                            <option value="1.5">1.5 Kg</option>
                                                            <option value="2">2.0 Kg</option>
                                                            <option value="2.5">2.5 Kg</option>
                                                            <option value="3">3.0 Kg</option>
                                                            <option value="3.5">3.5 Kg</option>
                                                            <option value="4">4.0 Kg</option>
                                                            <option value="4.5">4.5 Kg</option>
                                                            <option value="5">5.0 Kg</option>
                                                            <option value="5.5">5.5 Kg</option>
                                                            <option value="6">6.0 Kg</option>
                                                            <option value="6.5">6.5 Kg</option>
                                                            <option value="7">7.0 Kg</option>
                                                            <option value="7.5">7.5 Kg</option>
                                                            <option value="8">8.0 Kg</option>
                                                            <option value="8.5">8.5 Kg</option>
                                                            <option value="9">9.0 Kg</option>
                                                            <option value="9.5">9.5 Kg</option>
                                                            <option value="10">10.0 Kg</option>
                                                            <option value="10.5">10.5 Kg</option>
                                                            <option value="11">11.0 Kg</option>
                                                            <option value="11.5">11.5 Kg</option>
                                                            <option value="12">12.0 Kg</option>
                                                            <option value="12.5">12.5 Kg</option>
                                                            <option value="13">13.0 Kg</option>
                                                            <option value="13.5">13.5 Kg</option>
                                                            <option value="14">14.0 Kg</option>
                                                            <option value="14.5">14.5 Kg</option>
                                                            <option value="15">15.0 Kg</option>
                                                            <option value="15.5">15.5 Kg</option>
                                                            <option value="16">16.0 Kg</option>
                                                            <option value="16.5">16.5 Kg</option>
                                                            <option value="17">17.0 Kg</option>
                                                            <option value="17.5">17.5 Kg</option>
                                                            <option value="18">18.0 Kg</option>
                                                            <option value="18.5">18.5 Kg</option>
                                                            <option value="19">19.0 Kg</option>
                                                            <option value="19.5">19.5 Kg</option>
                                                            <option value="20">20.0 Kg</option>
                                                            <option value="21">21.0 Kg</option>
                                                            <option value="22">22.0 Kg</option>
                                                            <option value="23">23.0 Kg</option>
                                                            <option value="24">24.0 Kg</option>
                                                            <option value="25">25.0 Kg</option>
                                                            <option value="26">26.0 Kg</option>
                                                            <option value="27">27.0 Kg</option>
                                                            <option value="28">28.0 Kg</option>
                                                            <option value="29">29.0 Kg</option>
                                                            <option value="30">30.0 Kg</option>
                                                            <option value="31-35">31.0 Kg to 35.0 Kg</option>

                                                            <option value="36-40">36.0 Kg to 40.0 Kg</option>
                                                            <option value="41-45">41.0 Kg to 45.0 Kg</option>
                                                            <option value="46-50">46.0 Kg to 50.0 Kg</option>
                                                            <option value="51-55">51.0 Kg to 55.0 Kg</option>
                                                            <option value="56-60">56.0 Kg to 60.0 Kg</option>
                                                            <option value="61-65">61.0 Kg to 65.0 Kg</option>
                                                            <option value="66-70">66.0 Kg to 70.0 Kg</option>
                                                            <option value="71">More than 70.0 Kg</option>


                                                        </select>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <label>Dimensions in Cm</label>
                                                        <div class="d-flex">
                                                            <input type="number" name="l"
                                                                   class="form-control list dim-l" cols="5" rows="6"
                                                                   placeholder="L" >
                                                            <input type="number" name="w"
                                                                   class="form-control list dim-w mx-1" cols="5" rows="6"
                                                                   placeholder="W" >
                                                            <input type="number" name="h"
                                                                   class="form-control list dim-h" cols="5" rows="6"
                                                                   placeholder="H" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <label>Contact No.</label>
                                                        <input type="number" name="mobile"
                                                               class="form-control list" cols="30" rows="6"
                                                               placeholder="Mobile/Phone" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 text-center" style="margin-top:-20px;">
                                                    <button type="submit" value="Submit" name="submit"
                                                            class="default-btn-oneOne"
                                                            style="background: rgb(206 40 39) none repeat scroll 0% 0%; color: rgb(255, 255, 255); pointer-events: all; cursor: pointer;">
                                                        Get Charges
                                                    </button>
                                                    <div class="col-lg-12 col-md-12 text-center text-light" style="padding-top:10px;">
                                                        <span style="font-size:smaller">*We do not share your details to any third party. Read our <a class="text-primary" href ="https://rapidexworldwide.com/privacy-policy.php" target="_blank">Privacy Policy</a></span>
                                                    </div>
                                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- Rate & Transit Times -->
                <!-- track -->
                <div class="tab-pane active " id="profile" role="tabpanel">

                    <div class="container-fluid index-track-tab-content">

                        <div class="row">

                            <div class="col-12">

                                <div class="about-safe-text">

                                    <div class="contact-form welco list index-track-padding rate-cal-track-padding">

                                        <form id="contactForm" onSubmit="return false;">

                                            <div class="row">

                                                <h3> Track Your Shipment</h3>

                                                <div class="col-lg-12 col-md-12">

                                                    <div class="form-group">

                                                        <input id="type_no" name="type_no" class="form-control"
                                                               cols="30" rows="6" required="" style=" padding: 12px 20px;"
                                                               placeholder="Enter your tracking number">
                                                        <div id="tracking_error">
                                                            <!--<span class="text-light bg-danger p-1">Please enter tracking number...</span>-->
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">


                                                <div class="col-lg-9 col-md-12 text-center">

                                                    <div class="form-group">

                                                        <p><a href="javascript:void">Track up to 10 numbers at a time.</a> <br/>

                                                            <a href="javascript:void">Separate by a comma (,) or return (entry)</a>
                                                        </p>

                                                    </div>

                                                </div>

                                                <div class="col-lg-3 col-md-12 text-center">

                                                    <div class="form-group mans-track">

                                                        <input type="submit" class="default-btn-one newcss"
                                                               onClick="trackOrder()" id="trackOrderButton" value="Track">
                                                        </input>

                                                    </div>

                                                </div>

                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- track -->
                
                  <!-- Track -->
                <div class="tab-pane " id="home" role="tabpanel">

                    <div class="container-fluid index-service-tab-content">

                        <div class="row">

                            <div class="col-lg-4 col-sm-6 spacing spacing1">

                                <div class="service-card-two"><img lazy class="freight-image"
                                                                   src="assets/img/services/International-Courier.webp"
                                                                   alt="International Courier" width="100%">

                                    <div class="service-caption list55">

                                        <h3 class="list66" style="color: black; padding: 6px;">International <br>Courier Services</h3>

                                        <a href="international-courier-services.php"
                                           title="International Courier Services" class="default-btn-two list">Read
                                            More</a></div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-sm-6 spacing">

                                <div class="service-card-two"><img lazy class="freight-image"
                                                                   src="assets/img/freight/freight3.webp"
                                                                   alt="Air Cargo Express Services" width="100%">

                                    <div class="service-caption list55">

                                        <h3 class="list66" style="color: black; padding: 6px;">Air Cargo <br>Express Services</h3>

                                        <a href="air-cargo-services.php" title="Air Cargo Express Services"
                                           class="default-btn-two list">Read More</a></div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-sm-6 spacing">

                                <div class="service-card-two"><img lazy class="freight-image"
                                                                   src="assets/img/services/Commercial-Shipment.webp"
                                                                   alt="Commercial Shipment" width="100%">

                                    <div class="service-caption list55">

                                        <h3 class="list66" style="color: black; padding: 6px;">Commercial <br>Shipment</h3>

                                        <a href="commercial-shipment.php" title="Commercial Shipment"
                                           class="default-btn-two list">Read More</a></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- service -->
                


            </div>

        </div>

    </div>
    <div id="particles-js"></div>
</div>

<div class="container">

    <div class="contact-area my-4 mb-85">

        <div class="contact-content">

            <div class="row">


                <div class="col-md-4 mb-1 mainC">

                    <div class="contact-card"><i class="bx bxs-plane"></i>

                        <h4>International Courier &amp; Cargo Services</h4>

                        <p>Rapidex Worldwide Express is an International Courier &amp; Cargo Service provider based in
                            Delhi, providing services throughout Delhi/NCR. </p>

                    </div>

                </div>


                <div class="col-md-4 mainC my-4 index-service-box">

                    <div class="contact-card"><i class="fa fa-handshake-o" aria-hidden="true"></i>

                        <h4>Reasonable Rates For Express &amp; Economy Shipping</h4>

                        <p>Reasonable rates for express &amp; economy shipping from India to anywhere in the world.</p>

                    </div>

                </div>


                <div class="col-md-4 mainC list">

                    <div class="contact-card list d-xs-none"><i class="fa fa-headphones" aria-hidden="true"></i>

                        <h4>24X7 Customer Support Service</h4>

                        <p>When you ship with us, you can have a peace of mind that a dedicated team of customer support
                            is working for you 24X7. For queries contact

                        </p>

                        <p> +91-9311979812 , +91-9910546802 </p>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>

<div class="section-content container">
    <div class="row d-flex justify-content-center">

        <div class="col-lg-12 col-md-12">

            <!-- BLOG START -->
            <div class="blog-post-single-outer offer-sending">
                <div class="blog-post-single bg-white">

                    <div class="wt-post-info">



                        <div class="wt-post-title ">

                            <h2 >Popular Countries for Sending International Courier from Delhi
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

<?php include("include/component/pickup_location.php") ?>
<?php include("include/footer.php") ?>