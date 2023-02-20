<?php

require_once 'admin/config/config1.php';

$db = getDbInstance();

$destitaion =$_REQUEST['destination'];
if(isset($_REQUEST['destination'])){
    $db->where('country', $destitaion);
    // Get data to pre-populate the form.
    $reqData = $db->getOne('inoffer');
    // echo "<pre>";
    // print_r($reqData);
    // echo "</pre>";s

}else if(isset($_REQUEST['search'])){
    $db->where('country', $destitaion);
    $reqData = $db->getOne('inoffer');


}else {
    $db->where('country', 'United States Of America');
    $reqData = $db->getOne('inoffer');
}
$imgn=str_replace(' ','-',$reqData['country']);
/*
echo json_encode($reqData);
$reqData = $db->query("select * from inoffer where country='{$_REQUEST['destitaion']}'");
*/

?>


<?php 
Define("TITLE",'Get Special Offer - Rapidex Worldwide Express');
include("include/header.php") ?>
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
            min-width: 89% !important;
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
            width:95% !important;
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
<div class="jumbotron mans_bread offer-page">
    <div class="container">
        <div class="row">
            <div class="col-md-5 search-section">
                <h4 class="text-white">Special Offers :-</h4>
                <!-- changing -->

                <!--search button-->
                <div class="text-center" class="dropdown dropdown-toggle dropdown-toggle-split" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <!--<input type="input" name="destitaion"  id="destitaionSearch" class="form-control" placeholder="Search Destitaion...">-->
                    <!--<input type="text" class="form-control list" name="Orgcountry" id="state" value="<?=$reqData['country'];?>" placeholder="Quick Filter"> -->
                    <input type="text" id="country" class="form-control list" name="Orgcountry"  value="" placeholder="Select Destination...">

                    <!--<img src="assets/flag/<?=$imgn;?>-Flag-32.png" class="flag-img">-->

                    <div id="statelist" class="statelist">
                        <!--<ul>-->
                        <!--<a href="inoffer-usa.php?destitaion=" style="color: #000;"><li>India <img src="assets/flag/Algeria-Flag-32.png" ></li></a>-->
                        <!--</ul>-->
                    </div>

                </div>




                <!--end-search button-->

                <div class="overflow-scroll text-center dropdown-menu" style="height:400px;" aria-labelledby="dropdownMenuClickableInside">
                    <!-- list country-->
                    <div id='countryDisplay'>
                        <div class='d-flex justify-content-center m-2 showCountry' id='showCountry'>
                            <span class='text-secondary'>India</span>
                        </div>
                    </div
                        <!-- end-list country-->
                </div>

                <!--end change-->
            </div>
        </div>
    </div>
</div>

<div class="about-text-area offer-sec">
    <div class="container">
        <h2>Cheapest Courier Charges  to <?= $reqData['country']; ?></h2>
        <?php
        if(empty($reqData['first_0_5_gms']) && empty($reqData['addl_0_5_gms']) && empty($reqData['plus_5_gms'])  && empty($reqData['plus_5_gms']) && empty($reqData['plus_20_gms']) && empty($reqData['working_days'])){
            echo "<div class='d-flex justify-content-center' style='margin-top:-15px'> <button class='alert alert-info d-flex justify-content-center align-items-center' role='alert'>
                     <i class=' mx-2 fa fa-info-circle' aria-hidden='true'></i>
                             Special Offer not Available at This Time </button> </div>";
        }else {?>
            <div class="row offer-r">

            <?php if ($reqData['first_0_5_gms']) { ?>
                <div class="col-lg-4 ">
                    <div class="diagon-full mb-3 mb-md-0">
                        <h4>First 0.5Gms</h4>
                        <h6><i class="bx bx-alarm"></i> Transit Time:<br> <?= $reqData['working_days']; ?> working days</h6>
                        <div class="diagon-box">
                            <h4>Courier Charges:<br>
                                <span><i class="bx bx-rupee"></i><?= $reqData['first_0_5_gms']; ?>/-</span></h4>
                            <p><a href="#term">Condition Apply</a></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            if ($reqData['addl_0_5_gms']) { ?>
                <div class="col-lg-4 ">
                    <div class="diagon-full mb-3 mb-md-0" >
                        <h4>Addl. 0.5Gms
                            <br>
                            <!--<p style="color:white; font-size:22px;">Upto 5Kgs</p>-->
                        </h4>
                        <h6><i class="bx bx-alarm"></i> Transit Time:<br><?= $reqData['working_days']; ?> working days</h6>
                        <div class="diagon-box">
                            <h4>Courier Charges:<br>
                                <span><i class="bx bx-rupee"></i><?= $reqData['addl_0_5_gms']; ?>/-</span></h4>
                            <p><a href="#term">Condition apply</a></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            if ($reqData['plus_5_gms']) { ?>
                <div class="col-lg-4 ">
                    <div class="diagon-full mb-3 mb-md-0">
                        <h4>+5Kgs</h4>
                        <h6><i class="bx bx-alarm"></i> Transit Time:<br><?= $reqData['working_days']; ?> working days</h6>
                        <div class="diagon-box">
                            <h4>Courier Charges:<br>
                                <span><i class="bx bx-rupee"></i><?= $reqData['plus_5_gms']; ?>/kg</span></h4>
                            <p><a href="#term">Condition apply</a></p>
                        </div>
                    </div>
                </div>
                <?php
            }?>

            <?php if ($reqData['plus_10_gms']) { ?>
                <div class="col-lg-4 ">
                    <div class="diagon-full mb-0">
                        <h4>+10Kgs</h4>
                        <h6><i class="bx bx-alarm"></i> Transit Time:<br><?= $reqData['working_days']; ?> working days</h6>
                        <div class="diagon-box">
                            <h4>Courier Charges:<br>
                                <span> <i class="bx bx-rupee"></i><?= $reqData['plus_10_gms']; ?>/kg</span></h4>
                            <p><a href="#term">Condition apply</a></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            if ($reqData['plus_15_gms']) { ?>
                <div class="col-lg-4 ">
                    <div class="diagon-full mb-0 ">
                        <h4>+15Kgs</h4>
                        <h6><i class="bx bx-alarm"></i> Transit Time:<br><?= $reqData['working_days']; ?> working days</h6>
                        <div class="diagon-box">
                            <h4>Courier Charges:<br>
                                <span><i class="bx bx-rupee"></i><?= $reqData['plus_15_gms']; ?>/kg</span></h4>
                            <p><a href="#term">Condition apply</a></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            if ($reqData['plus_20_gms']) { ?>
                <div class="col-lg-4 ">
                    <div class="diagon-full mb-0">
                        <h4>+20Kgs</h4>
                        <h6><i class="bx bx-alarm"></i> Transit Time:<br><?= $reqData['working_days']; ?> working days</h6>
                        <div class="diagon-box">
                            <h4>Courier Charges:<br>
                                <span><i class="bx bx-rupee"></i><?= $reqData['plus_20_gms']; ?>/kg</span></h4>
                            <p><a href="#term">Condition apply</a></p>
                        </div>
                    </div>
                </div>
                </div>
                <?php
            }
        } ?>


        <!--<div class="row align-items-center">-->

        <!--<div class="col-lg-3 col-md-6">-->
        <!--    <div class="offer-full-box">-->
        <!--        <div class="offer-b1">-->
        <!--            <h3>First 0.5 Gms.</h3>-->
        <!--        </div>-->
        <!--         <div class="offer-b2">-->
        <!--            <h3>Above 15kg</h3>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- <div class="col-lg-3 col-md-6">-->
        <!--    <div class="offer-full-box">-->
        <!--        <div class="offer-b1">-->
        <!--            <h3>Addl.0.5 Gms.</h3>-->
        <!--        </div>-->
        <!--         <div class="offer-b2">-->
        <!--            <h3>Above 20kg</h3>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- <div class="col-lg-3 col-md-6">-->
        <!--    <div class="offer-full-box">-->
        <!--        <div class="offer-b1">-->
        <!--            <h3>Above 5kg</h3>-->
        <!--        </div>-->
        <!--         <div class="offer-b2">-->
        <!--            <h3>Above 25kg</h3>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- <div class="col-lg-3 col-md-6">-->
        <!--    <div class="offer-full-box">-->
        <!--        <div class="offer-b1">-->
        <!--            <h3>Above 10kg</h3>-->
        <!--        </div>-->
        <!--         <div class="offer-b2">-->
        <!--            <h3>Above 30kg</h3>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->



        <!--</div>-->




    </div>
</div>

<section  id="term">
    <div class="container offer-sec-2 ">
        <!--<h3 class="text-center mb-5 mt-2 mt-md-0 " style="font-weight:700; color:#cd1212 ;">Call Now : <a href="tel:+919311979812" style=" text-decoration:none;color: #101453;">9311979812</a></h3>-->
    <h3 class="text-center mb-5 mt-2 mt-md-0" style="font-weight: 600;
                            letter-spacing: 1px;
                            font-size: 28px;">
        <span style="color: red !important;">We Can Support via </span>
        <span style="color: #150ba5 !important;">Call</span> 
        <span style="color: red !important;"> and </span>
        <span style="color: #150ba5 !important;"> WhatsApp </span> :
        <span style="color:hsl(332deg 100% 58%) !important;">+91-9311979812 / +91-9910546802 </span>
    </h3>

        <div class="row">

            <div class="col-md-7">
                <!--         <form class="offer-form" id="contactForm" onSubmit="return false;" >-->
                <!--       <h6>Enter Contact Number to get Special Discount</h6>-->
                <!--   <div class="input-group">-->
                <!--  <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">-->
                <!--    <div class="input-group-prepend d-block mans-track">-->
                <!--      <button type="submit" class="default-btn-one newcss disabled mt-0 bg-logorange"  style="pointer-events: all; cursor: pointer;height:49px;">Submit</button>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</form>-->


                <h4>Terms and conditions</h4>
                <ul>
                    <li>GST 18% will be Charged all above mention rates.</li>
                    <li>Pickup & Packing facility available in any part of Delhi, Noida, Gurgaon, Ghaziabad, and faridabad.</li>
                    <li>Pickup charges extra if we will pickup outside of Delhi/NCR.</li>
                    <li>Actual Weight & Volumetric Weight Which Ever Higher Then Will Be Charge</li>
                    <li>Volume Weight will be caluclated as L X B X H / 5000</li>
                    <li>The Rates Are Applicable On Per Box Basis No Single Box Shall Be More Than 30 kgs</li>
                    <li>Sender ID Its Mandatory..Aadhar Card, Pan Card & Passport Copy</li>
                    <li>Strictky No Calls Will Be Entertained For Loss, Damage & Delay Delivery.</li>
                    <li>In Case of Lost Shipment, Rapidex liability is limited to USD 100 Or value of shipment declared at the time of booking, Whichever is lower.</li>
                    <li>Customs Duties, Value Added Surcharges & Any Other Govt. Taxes At The Destination Countries Charges Would Be Extra..</li>
                    <li>Address Correction / Delivery Re-Attempt Charges Rs. 1450+GST Will Be Charge Extra.</li>
                    <li>Remote Area Fee Rs.27 Per Kg With Minimum Rs.2850++ Will Be Charged For All Remote Locations.</li>
                    <li>If Any Shipments Return From Destination Would Be Return Charges Is Extra.</li>
                    <li>In case of any  other queries call : 011-41003020 or whatsapp us on +91 9311979812</li>
                    <li>Given Rates and Transit times are subject to change basis latest information</li>
                </ul>


            </div>

            <div class="col-md-5 offer-f2">
                <div class="transportation-form">
                    <div class="offer-title">
                        <h3>Enter Details to Get Special Discount</h3>

                    </div>
                    <form action="mail.php" class="wpcf7-form" method="post">
                        <div class="form-group mysear">
                            <!--<input type="text" class="form-control" name="fname" id="fname" placeholder="From" required>-->

                            <input type="text" class="form-control " name="fname" id="state1" placeholder="Origin ">
                            <div id="state1list" class="state1list"></div>
                        </div>
                        <div class="form-group">
                            <!--<input type="text" class="form-control" name="to" id="to" placeholder="To" required>-->


                            <select name="to" style="color: #8a8686;" id="Ddlcountry" class="form-control" placeholder="To"  required>
                                <option selected="selected" value="destination">Destination</option>
                                <option value="AFGHANISTAN">Afghanistan</option>
                                <option value="ALBANIA">Albania</option>
                                <option value="ALGERIA">Algeria</option>
                                <option value="AMERICAN">American Samoa</option>
                                <option value="ANDORRA">Andorra</option>
                                <option value="ANGOLA">Angola</option>
                                <option value="ANGUILLA">Anguilla</option>
                                <option value="ANTIGUA">Antigua</option>
                                <option value="ARGENTINA">Argentina</option>
                                <option value="ARMENIA">Armenia</option>
                                <option value="ARUBA">Aruba</option>
                                <option value="AUSTRALIA">Australia</option>
                                <option value="AUSTRIA">Austria</option>
                                <option value="AZERBAIJAN">Azerbaijan</option>
                                <option value="BAHAMAS">Bahamas</option>
                                <option value="BAHRAIN">Bahrain</option>
                                <option value="BANGLADESH">Bangladesh</option>
                                <option value="BARBADOS">Barbados</option>
                                <option value="BELARUS">Belarus</option>
                                <option value="BELGIUM">Belgium</option>
                                <option value="BELIZE">Belize</option>
                                <option value="BENIN">Benin</option>
                                <option value="BERMUDA">Bermuda</option>
                                <option value="BHUTAN">Bhutan</option>
                                <option value="BOLIVIA">Bolivia</option>
                                <option value="BONAIRE">Bonaire</option>
                                <option value="BOSNIA AND HERZEGOVINA">Bosnia And Herzegovina</option>
                                <option value="BOTSWANA">Botswana</option>
                                <option value="BRAZIL">Brazil</option>
                                <option value="BRUNEI">Brunei</option>
                                <option value="BULGARIA">Bulgaria</option>
                                <option value="BURKINA FASO">Burkina Faso</option>
                                <option value="BURUNDI">Burundi</option>
                                <option value="CAMBODIA">Cambodia</option>
                                <option value="CAMEROON">Cameroon</option>
                                <option value="CANADA">Canada</option>
                                <option value="CANARY ISLAND">Canary Island</option>
                                <option value="CANARY ISLANDS, THE">Canary Islands, The</option>
                                <option value="CAPE VERDE">Cape Verde</option>
                                <option value="CAYMAN ISLANDS">Cayman Islands</option>
                                <option value="CENTRAL AFRICAN REPUBLIC">Central African Republic</option>
                                <option value="CHAD">Chad</option>
                                <option value="CHILE">Chile</option>
                                <option value="CHINA">China</option>
                                <option value="CHRISTMAS ISLAND">Christmas Island</option>
                                <option value="COCOS KEELING ISLANDS">Cocos Keeling Islands</option
                                <option value="COLOMBIA">Colombia</option>
                                <option value="COMOROS">Comoros</option>
                                <option value="CONGO">Congo</option>
                                <option value="CONGO, THE DEMOCRATIC REPUBLIC">Congo, The Democratic Republic</option>
                                <option value="COOK ISLANDS">Cook Islands</option>
                                <option value="COSTA RICA">Costa Rica</option>
                                <option value="COTE D'IVOIRE">Cote D'ivoire</option>
                                <option value="CROATIA">Croatia</option>
                                <option value="CUBA">Cuba</option>
                                <option value="CURACAO">Curacao</option>
                                <option value="CYPRUS">Cyprus</option>
                                <option value="CZECH REPUBLIC">Czech Republic</option>
                                <option value="DAR ES SALAAM - TANZANIA">Dar Es Salaam - Tanzania</option>
                                <option value="DENMARK">Denmark</option>
                                <option value="DJIBOUTI">Djibouti</option>
                                <option value="DOMINICA">Dominica</option>
                                <option value="DOMINICAN REPUBLIC">Dominican Republic</option>
                                <option value="EAST TIMOR">East Timor</option>
                                <option value="ECUADOR">Ecuador</option>
                                <option value="EGYPT">Egypt</option>
                                <option value="EL SALVADOR">ElSalvador</option>
                                <option value="EQUATORIAL GUINEA">Equatorial Guinea</option>
                                <option value="ERITREA">Eritrea</option>
                                <option value="ESTONIA">Estonia</option>
                                <option value="ETHIOPIA">Ethiopia</option>
                                <option value="FALKLAND ISLANDS">Falkland Islands</option>
                                <option value="FAROE ISLANDS">Faroe Islands</option>
                                <option value="FIJI">Fiji</option>
                                <option value="FINLAND">Finland</option>
                                <option value="FRANCE">France</option>
                                <option value="FRENCH GUYANA">French Guyana</option>
                                <option value="FRENCH POLYNESIA">French Polynesia</option>
                                <option value="GABON">Gabon</option>
                                <option value="GAMBIA">Gambia</option>
                                <option value="GEORGIA">Georgia</option>
                                <option value="GERMANY">Germany</option>
                                <option value="GHANA">Ghana</option>
                                <option value="GIBRALTAR">Gibraltar</option>
                                <option value="GREECE">Greece</option>
                                <option value="GREENLAND">Greenland</option>
                                <option value="GRENADA">Grenada</option>
                                <option value="GUADELOUPE">Guadeloupe</option>
                                <option value="GUAM">Guam</option>
                                <option value="GUATEMALA">Guatemala</option>
                                <option value="GUERNSEY">Guernsey</option>
                                <option value="GUINEA REPUBLIC">Guinea Republic</option>
                                <option value="GUINEA-BISSAU">Guinea-bissau</option>
                                <option value="GUYANA">Guyana</option>
                                <option value="HAITI">Haiti</option>
                                <option value="HONDURAS">Honduras</option>
                                <option value="HONG KONG">Hong Kong</option>
                                <option value="HUNGARY">Hungary</option>
                                <option value="ICELAND">Iceland</option>
                                <option value="INDIA">India</option>
                                <option value="INDONESIA">Indonesia</option>
                                <option value="IRAN (ISLAMIC REPUBLIC OF)">Iran (ISLAMIC REPUBLIC OF)</option>
                                <option value="IRAQ">Iraq</option>
                                <option value="ISRAEL">Israel</option>
                                <option value="ITALY">Italy</option>
                                <option value="JAMAICA">Jamaica</option>
                                <option value="JAPAN">Japan</option>
                                <option value="JERSEY">Jersey</option>
                                <option value="JORDAN">Jordan</option>
                                <option value="KAZAKHSTAN">Kazakhstan</option>
                                <option value="KENYA">Kenya</option>
                                <option value="KENYA - NAIROBI">Kenya - Nairobi</option>
                                <option value="KIRIBATI">Kiribati</option>
                                <option value="KOREA, REPUBLIC OF">Korea, Republic Of</option>
                                <option value="KOREA, THE D.P.R OF">Korea, The D.P.R Of</option>
                                <option value="KOSOVO">Kosovo</option>
                                <option value="KUWAIT">Kuwait</option>
                                <option value="KYRGYZSTAN">Kyrgyzstan</option>
                                <option value="LAOS">Laos</option>
                                <option value="LATVIA">Latvia</option>
                                <option value="LEBANON">Lebanon</option>
                                <option value="LESOTHO">Lesotho</option>
                                <option value="LIBERIA">Liberia</option>
                                <option value="LIBYA">Libya</option>
                                <option value="LIECHTENSTEIN">Liechtenstein</option>
                                <option value="LITHUANIA">Lithuania</option>
                                <option value="LUXEMBOURG">Luxembourg</option>
                                <option value="MACAU">Macau</option>
                                <option value="MACEDONIA">Macedonia</option>
                                <option value="MADAGASCAR">Madagascar</option>
                                <option value="MALAWI">Malawi</option>
                                <option value="MALAYSIA">Malaysia</option>
                                <option value="MALDIVES">Maldives</option>
                                <option value="MALI">Mali</option>
                                <option value="MALTA">Malta</option>
                                <option value="MAPUTO - MOZAMBIQUE">Maputo - Mozambique</option>
                                <option value="MARSHALL ISLANDS">Marshall Islands</option>
                                <option value="MARTINIQUE">Martinique</option>
                                <option value="MAURITANIA">Mauritania</option>
                                <option value="MAURITIUS">Mauritius</option>
                                <option value="MAYOTTE">Mayotte</option>
                                <option value="MEXICO">Mexico</option>
                                <option value="MICRONESIA">Micronesia</option>
                                <option value="MOLDOVA">Moldova</option>
                                <option value="MONACO">Monaco</option>
                                <option value="MONGOLIA">Mongolia</option>
                                <option value="MONTENEGRO, REPUBLIC OF">Montenegro, Republic Of</option>
                                <option value="MONTSERRAT">Montserrat</option>
                                <option value="MOROCCO">Morocco</option>
                                <option value="MOZAMBIQUE">Mozambique</option>
                                <option value="MYANMAR">Myanmar</option>
                                <option value="NAMIBIA">Namibia</option>
                                <option value="NAURU, REPUBLIC OF">Nauru, Republic Of</option>
                                <option value="NEPAL">Nepal</option>
                                <option value="NETHERLAND">Netherland</option>
                                <option value="NETHERLANDS ANTILLES">Netherlands Antilles</option>
                                <option value="NEVIS">Nevis</option>
                                <option value="NEW CALEDONIA">New Caledonia</option>
                                <option value="NEW YORK">New York</option>
                                <option value="NEW ZEALAND">New Zealand</option>
                                <option value="NICARAGUA">Nicaragua</option>
                                <option value="NIGER">Niger</option>
                                <option value="NIGERIA">Nigeria</option>
                                <option value="NIUE">Niue</option>
                                <option value="NORFOLK ISLAND">Norfolk Island</option>
                                <option value="NORTHERN IRELAND">Northern Ireland</option>
                                <option value="NORTHERN MARIANA ISLANDS">Northern Mariana Islands</option>
                                <option value="NORWAY">Norway</option>
                                <option value="OMAN">Oman</option>
                                <option value="PAKISTAN">Pakistan</option>
                                <option value="PALAU">Palau</option>
                                <option value="PALESTINE AUTHORITY">Palestine Authority</option>
                                <option value="PALESTINE AUTHORITY">Palestine Authority</option>
                                <option value="PALESTINIAN TERRITORY">Palestinian Territory</option>
                                <option value="PANAMA">Panama</option>
                                <option value="PAPUA NEW GUINEA">PAPUA NEW GUINEA</option>
                                <option value="PARAGUAY">Paraguay</option>
                                <option value="PERU">Peru</option>
                                <option value="PHILIPPINES">Philippines</option>
                                <option value="POLAND">Poland</option>
                                <option value="PORTUGAL">Portugal</option>
                                <option value="PUERTO RICO">PUERTO RICO</option>
                                <option value="PUERTO RICO - AGUADILLA">Puerto Rico - Aguadilla</option>
                                <option value="PUERTO RICO - ARECIBO">Puerto Rico - Arecibo</option>
                                <option value="PUERTO RICO - CAROLINA (FAJ)">Puerto Rico - Carolina (Faj)</option>
                                <option value="PUERTO RICO - CAROLINA (NRR)">Puerto Rico - Carolina (NRR)</option>
                                <option value="PUERTO RICO - GUAYNABO">Puerto Rico - Guaynabo</option>
                                <option value="PUERTO RICO - PONCE">Puerto Rico - Ponce</option>
                                <option value="PUERTO RICO - SAN JUAN">Puerto Rico - San Juan</option>
                                <option value="QATAR">Qatar</option>
                                <option value="REUNION ISLAND">Reunion Island</option>
                                <option value="ROMANIA">Romania</option>
                                <option value="RUSSIA">Russia</option>
                                <option value="RWANDA">Rwanda</option>
                                <option value="SAINT LUCIA">Saint Lucia</option>
                                <option value="SAINT MARTIN">Saint Martin</option>
                                <option value="SAINT PIERRE AND MIQUELON">Saint Pierre And Miquelon</option>
                                <option value="SAIPAN">Saipan</option>
                                <option value="SAMOA">Samoa</option>
                                <option value="SAN MARINO">San Marino</option>
                                <option value="SAO TOME AND PRINCIPE">Sao Tome And Principe</option>
                                <option value="SAUDI ARABIA">Saudi Arabia</option>
                                <option value="SCOTLAND">Scotland</option>
                                <option value="SENEGAL">Senegal</option>
                                <option value="SERBIA">Serbia</option>
                                <option value="SEYCHELLES">Seychelles</option>
                                <option value="SIERRA LEONE">Sierra Leone</option>
                                <option value="SINGAPORE">Singapore</option>
                                <option value="SLOVAKIA">Slovakia</option>
                                <option value="SLOVENIA">Slovenia</option>
                                <option value="SOLOMON ISLANDS">Solomon Islands</option>
                                <option value="SOMALIA">Somalia</option>
                                <option value="SOMALILAND, REPUBLIC OF">Somaliland, Republic Of</option>
                                <option value="SOUTH AFRICA">South Africa</option>
                                <option value="SOUTH SUDAN">South Sudan</option>
                                <option value="SPAIN">Spain</option>
                                <option value="SRILANKA">Srilanka</option>
                                <option value="ST KITTS &amp; NEVIS">St Kitts &amp; Nevis</option>
                                <option value="ST MAARTEN">St Maarten</option>
                                <option value="ST MARTIN">St Martin</option>
                                <option value="ST. BARTHELEMY">St. Barthelemy</option>
                                <option value="ST. EUSTATIUS">St. Eustatius</option>
                                <option value="ST. HELENA<">St. Helena</option>
                                <option value="ST. MAARTEN">St. Maarten</option>
                                <option value="ST. VINCENT">St. VincentSudan</option>
                                <option value="SUDAN">Sudan</option>
                                <option value="SURINAME">Suriname</option>
                                <option value="SWAZILAND">Swaziland</option>
                                <option value="SWEDEN">Sweden</option>
                                <option value="SWITZERLAND">Switzerland</option>
                                <option value="SYRIA">Syria</option>
                                <option value="TAHITI">Tahiti</option>
                                <option value="TAIPEI - TAIWAN">Taipei - Taiwan</option>
                                <option value="TAIWAN">Taiwan</option>
                                <option value="TAJIKISTAN">Tajikistan</option>
                                <option value="TANZANIA">Tanzania</option>
                                <option value="TTHAILANDH">Thailand</option>
                                <option value="TOGO">Togo</option>
                                <option value="TONGA">Tonga</option>
                                <option value="TRINIDAD AND TOBAGO">Trinidad And Tobago</option>
                                <option value="TUNISIA">Tunisia</option>
                                <option value="TURKEY">Turkey</option>
                                <option value="TURKMENISTAN">Turkmenistan</option>
                                <option value="TURKS AND CAICOS ISLANDS">Turks And Caicos Islands</option>
                                <option value="TUVALU">Tuvalu</option>
                                <option value="UGANDA">Uganda</option>
                                <option value="UKRAINE">Ukraine</option>
                                <option value="UNITED ARAB EMIRATES">United Arab Emirates</option>
                                <option value="UNITED KINGDOM">United Kingdom</option>
                                <option value="UNITED STATES OF AMERICA">United States Of America</option>
                                <option value="URUGUAY">Uruguay</option>
                                <option value="US">US</option>
                                <option value="UZBEKISTAN">Uzbekistan</option>
                                <option value="VANUATU">Vanuatu</option>
                                <option value="VATICAN CITY">Vatican City</option>
                                <option value="VENEZUELA">Venezuela</option>
                                <option value="VIETNAM">Vietnam</option>
                                <option value="VIRGIN ISLANDS (BRITISH)">Virgin Islands (British)</option>
                                <option value="VIRGIN ISLANDS (US)">Virgin Islands (US)</option>
                                <option value="WALLIS &amp; FUTUNA">Wallis &amp; Futuna</option>
                                <option value="WESTERN SAMAO">Western Samao</option>
                                <option value="YEMEN">Yemen</option>
                                <option value="ZAMBIA">Zambia</option>
                                <option value="ZAMBIA - LUSAKA">Zambia - Lusaka</option>
                                <option value="ZAMBIA - OTHERS">Zambia - Others</option>
                                <option value="ZIMBABWE">Zimbabwe</option>
                                <option value="IRELAND">Ireland</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="weight" placeholder="Weight(In Kgs.)" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="content" id="content" placeholder="Description of item" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile"  placeholder="Mobile/Phone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="location" id="location" placeholder="Pickup Location" required>
                        </div>
                        <div class="form-btn">
                            <button type="submit" value="Submit" name="submit" class="default-btn-onee mr-4" data-loading-text="Please wait...">Submit</button>
                        </div>
                    </form>
                    <!--
        <div class="form-group">
           <input type="text" class="form-control" name="Name" id="Name" placeholder="From" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="Today" id="Today"  placeholder="To" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="Weight" placeholder="Weight" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="Mobile" id="Mobile"  placeholder="Mobile" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="Mobile" id="Mobile"  placeholder="Mobile" required>
        </div>
        <div class="form-group">
         <input type="text" class="form-control" name="Pickup" id="Pickup"  placeholder="Pickup Location" required>
        </div>
        <div class="form-btn">
          <button type="submit" value="Submit" name="submit" class="default-btn-onee mr-4" data-loading-text="Please wait...">Submit</button>
        </div>
      </form>-->
                </div>
            </div>

        </div>
    </div>
</section>


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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/countrySelect.js"></script>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>

<script>
    $("#country_selector").countrySelect({
        defaultCountry: "in",
        preferredCountries: ['']
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#country").on("keyup", function(){
            var state = $(this).val();
            if (state !=="") {
                $.ajax({
                    url:"include/backend-search-offer.php",
                    type:"POST",
                    cache:false,
                    data:{state:state},
                    success:function(data){
                        $("#statelist").html(data);
                        $("#statelist").fadeIn();
                    }
                });
            }else{
                $("#statelist").html("");
                $("#statelist").fadeOut();
            }
        });


        $("#country").on("click", function(){
            var state = $(this).val();
            if (state="0") {
                $.ajax({
                    url:"include/backend-search-offer.php",
                    type:"POST",
                    cache:false,
                    data:{state:state},
                    success:function(data){
                        $("#statelist").html(data);
                        $("#statelist").fadeIn();
                    }
                });
            }else{
                $("#statelist").html("");
                $("#statelist").fadeOut();
            }
        });
        // click one particular state name it's fill in textbox
        $(document).on("click",".statelist li", function(){
            $('#country').val($(this).text());
            $('#statelist').fadeOut("fast");
        });
    });

    $(document).click(function(){
        var container = $("#statelist");
        if (!container.is(event.target) && !container.has(event.target).length) {
            container.hide();
        }
    });


    $(document).click(function(){
        var container = $("#state1list");
        if (!container.is(event.target) && !container.has(event.target).length) {
            container.hide();
        }
    });

</script>
<!--searchbox-->
<script>
    const form = document.querySelector(".form");
    const dropdowns = document.querySelectorAll(".dropdown");

    // Check if Dropdowns are Exist
    // Loop Dropdowns and Create Custom Dropdown for each Select Element
    if (dropdowns.length > 0) {
        dropdowns.forEach((dropdown) => {
            createCustomDropdown(dropdown);
        });
    }
    // Check if Form Element Exist on Page
    if (form !== null) {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
        });
    }

    // Create Custom Dropdown
    function createCustomDropdown(dropdown) {
        // Get All Select Options
        // And Convert them from NodeList to Array
        const options = dropdown.querySelectorAll("option");
        const optionsArr = Array.prototype.slice.call(options);

        // Create Custom Dropdown Element and Add Class Dropdown
        const customDropdown = document.createElement("div");
        customDropdown.classList.add("dropdown");
        dropdown.insertAdjacentElement("afterend", customDropdown);

        // Create Element for Selected Option
        const selected = document.createElement("div");
        selected.classList.add("dropdown-select");
        selected.textContent = optionsArr[0].textContent;
        customDropdown.appendChild(selected);

        // Create Element for Dropdown Menu
        // Add Class and Append it to Custom Dropdown
        const menu = document.createElement("div");
        menu.classList.add("dropdown-menu");
        customDropdown.appendChild(menu);
        selected.addEventListener("click", toggleDropdown.bind(menu));

        // Create Search Input Element
        const search = document.createElement("input");
        search.placeholder = "Search...";
        search.type = "text";
        search.classList.add("dropdown-menu-search");
        menu.appendChild(search);

        // Create Wrapper Element for Menu Items
        // Add Class and Append to Menu Element
        const menuInnerWrapper = document.createElement("div");
        menuInnerWrapper.classList.add("dropdown-menu-inner");
        menu.appendChild(menuInnerWrapper);

        // Loop All Options and Create Custom Option for Each Option
        // And Append it to Inner Wrapper Element
        optionsArr.forEach((option) => {
            const item = document.createElement("div");
            item.classList.add("dropdown-menu-item");
            item.dataset.value = option.value;
            item.textContent = option.textContent;
            menuInnerWrapper.appendChild(item);

            item.addEventListener(
                "click",
                setSelected.bind(item, selected, dropdown, menu)
            );
        });

        // Add Selected Class to First Custom Select Option
        menuInnerWrapper.querySelector("div").classList.add("selected");

        // Add Input Event to Search Input Element to Filter Items
        // Add Click Event to Element to Close Custom Dropdown if Clicked Outside
        // Hide the Original Dropdown(Select)
        search.addEventListener("input", filterItems.bind(search, optionsArr, menu));
        document.addEventListener(
            "click",
            closeIfClickedOutside.bind(customDropdown, menu)
        );
        dropdown.style.display = "none";
    }

    // Toggle for Display and Hide Dropdown
    function toggleDropdown() {
        if (this.offsetParent !== null) {
            this.style.display = "none";
        } else {
            this.style.display = "block";
            this.querySelector("input").focus();
        }
    }

    // Set Selected Option
    function setSelected(selected, dropdown, menu) {
        // Get Value and Label from Clicked Custom Option
        const value = this.dataset.value;
        const label = this.textContent;

        // Change the Text on Selected Element
        // Change the Value on Select Field
        selected.textContent = label;
        dropdown.value = value;

        // Close the Menu
        // Reset Search Input Value
        // Remove Selected Class from Previously Selected Option
        // And Show All Div if they Were Filtered
        // Add Selected Class to Clicked Option
//   menu.style.display = "none";
        menu.querySelector("input").value = "";
        menu.querySelectorAll("div").forEach((div) => {
            if (div.classList.contains("is-select")) {
                div.classList.remove("is-select");
            }
            if (div.offsetParent === null) {
                div.style.display = "block";
            }
        });
        this.classList.add("is-select");
    }

    // Filter the Items
    function filterItems(itemsArr, menu) {
        // Get All Custom Select Options
        // Get Value of Search Input
        // Get Filtered Items
        // Get the Indexes of Filtered Items
        const customOptions = menu.querySelectorAll(".dropdown-menu-inner div");
        const value = this.value.toLowerCase();
        const filteredItems = itemsArr.filter((item) =>
            item.value.toLowerCase().includes(value)
        );
        const indexesArr = filteredItems.map((item) => itemsArr.indexOf(item));

        // Check if Option is not Inside Indexes Array
        // And Hide it and if it is Inside Indexes Array and it is Hidden Show it
        itemsArr.forEach((option) => {
            if (!indexesArr.includes(itemsArr.indexOf(option))) {
                customOptions[itemsArr.indexOf(option)].style.display = "none";
            } else {
                if (customOptions[itemsArr.indexOf(option)].offsetParent === null) {
                    customOptions[itemsArr.indexOf(option)].style.display = "block";
                }
            }
        });
    }

    // Close Dropdown if Clicked Outside Dropdown Element
    function closeIfClickedOutside(menu, e) {
        if (
            e.target.closest(".dropdown") === null &&
            e.target !== this &&
            menu.offsetParent !== null
        ) {
            menu.style.display = "none";
        }
    }
</script>
<!--footer.php start here-->
<?php include("include/footer.php") ?>