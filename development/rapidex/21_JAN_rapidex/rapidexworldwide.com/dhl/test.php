<?php

$api_url = 'https://rapidexworldwide.com/dhl/api.php?trackingID=8696928074';

// Read JSON file
 $json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data,true);
echo "<pre>";
// print_r($response_data['shipments'][0]['events']);
?>


<style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css");
.track_tbl td.track_dot {
    width: 50px;
    position: relative;
    padding: 0;
    text-align: center;
}
.track_tbl td.track_dot:after {
    content: "\f111";
    font-family: FontAwesome;
    position: absolute;
    margin-left: -5px;
    top: 11px;
}
.track_tbl td.track_dot span.track_line {
    background: #000;
    width: 3px;
    min-height: 50px;
    position: absolute;
    height: 101%;
}
.track_tbl tbody tr:first-child td.track_dot span.track_line {
    top: 30px;
    min-height: 25px;
}
.track_tbl tbody tr:last-child td.track_dot span.track_line {
    top: 0;
    min-height: 25px;
    height: 10%;
}
</style>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="p-4">
    <h3>Order Tracking</h3>
    <table class="table table-bordered track_tbl">
        <thead>
            <tr>
                <th></th>
                <th>S No</th>
                <th>Location</th>
                <th>Distibutor</th>
                <th>Date/Time</th>
            </tr>
        </thead>
        <tbody>
            
            <?
            
            $k=count($response_data['shipments'][0]['events']);
            for($i=0;$i<count($response_data['shipments'][0]['events']);$i++){
                
            ?>
            <tr class="active">
                <td class="track_dot">
                    <span class="track_line"></span>
                </td>
                <td><?=$k--;?></td>
                <td><?=$response_data['shipments'][0]['events'][$i]['location']['address']['addressLocality'];?></td>
                <td><?=$response_data['shipments'][0]['events'][$i]['description'];?></td>
                <td><?=date('d F Y | H:i',strtotime($response_data['shipments'][0]['events'][$i]['timestamp']));?></td>
            </tr>
          <?  }  ?>
        </tbody>
    </table>
    </div>