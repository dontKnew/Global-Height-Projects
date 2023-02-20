<?php
    include "../include/config.php";
    $uri = trim($_SERVER['REQUEST_URI']);
    $country = str_replace(".php", " ", basename($uri));
?>
<div class="contact-form">
    <h4 class="text-center" style="color: #150ba5 !important;margin-top:5px;">Calculate Shipping Charges<?= (strpos($uri,"international-courier-services"))?"":"from Delhi to ".ucwords($country) ?></h4>
    <p class="text-center" style="font-size:16px;">Fill the details from below list to get the best price</p>
    <form action="../shipping-charges.php" class="wpcf7-form" method="post" style="color: #150ba5 !important; margin-top:20px; font-size:16px;"> 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group" >
                    <label style="color: #150ba5 !important;font-weight:600">Pick Up Pin Code</label>
                    <input type="number" class="form-control form-control-sm number_arrow_hide" name="pincode" placeholder="Pick Up From Pin Code ">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: #150ba5 !important;">To, Destination</label>
                    <select name="country"  class="form-control form-control-sm  enquiry-form-select" required>
                        
                        <option selected="selected" value="" >-Select Country-</option>
                       <? $sqlc=mysqli_query($conn,"select * from country order by name")or die(mysqli_error($conn));
                            while($rowc=mysqli_fetch_array($sqlc)){ ?>
                                    <option  value="<? echo $rowc['code']; ?>"  ><? echo $rowc['name']; ?></option>
                            <? } ?>
                    </select>
                </div>

            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: #150ba5 !important;">Package Type</label>
                    <select name="package_type" style="font-weight: 400;" class="form-control form-control-sm enquiry-form-select" required> 
                         <option selected="selected" value="">-Package Type-</option>
                         <? $sqlpt=mysqli_query($conn,"select * from package_type");
                            while($rowpt=mysqli_fetch_array($sqlpt)){ ?>
                            <option value="<? echo $rowpt['option_val']; ?>" ><? echo $rowpt['name']; ?></option>
                           <? } ?>
                           
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color: #150ba5 !important;">Weight</label>
                    <select name="weight" style="font-weight: 400;" class="form-control form-control-sm enquiry-form-select" required>        
                        <option value="" style="font-weight: 400;" >-Select Weight-</option> 
                        <option value="0.5" >Up to 500 Grms</option>
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
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Dimensions in Cm</label>
                    <div class="d-flex justify-content-between">
                        <input type="number" class="form-control form-control-sm number_arrow_hide" style="font-weight: 400;" name="l" placeholder="Length">
                        <input type="number" class="form-control form-control-sm number_arrow_hide mx-1" style="font-weight: 400;" name="w" placeholder="Width">
                        <input type="number" class="form-control form-control-sm number_arrow_hide" style="font-weight: 400;" name="h" placeholder="Height">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label style="color: #150ba5 !important;">Contact No.</label>
                <div class="form-group">
                    <input type="number" class="form-control form-control-sm" name="mobile" style="font-weight: 400;" placeholder="Mobile/Phone" required>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 text-center">
                <button type="submit" value="Submit" name="submit" class="default-btn-one" style="background: #ce2827; color:#fff" data-loading-text="Please wait...">Get Charges </button>
            </div>
            <div class="col-lg-12 col-md-12 text-center " style="padding-top:10px;">
                <span style="font-size:smaller">*We do not share your details to any third party. Read our <a href ="https://rapidexworldwide.com/privacy-policy.php" target="_blank">Privacy Policy</a></span>
            </div>
        </div>
    </form>
</div>

<div class="mt-3">
    <p class="text-center" style="font-weight: 600;
                            letter-spacing: 1px;
                            font-size: 28px;">
        <span style="color: red !important;">We Can Support via </span>
        <span style="color: #150ba5 !important;">Call</span> 
        <span style="color: red !important;"> and </span>
        <span style="color: #150ba5 !important;"> WhatsApp </span> :
        <span style="color:hsl(332deg 100% 58%) !important;">+91-9311979812 / +91-9910546802 </span>
        </p>
</div>











