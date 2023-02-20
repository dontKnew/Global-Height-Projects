<?php
error_reporting(0);
if(isset($_POST['submit'])&&$_POST['submit']=='Submit')
{
//print_r($_POST);
//die;
    $Orgcountry = $_POST['Orgcountry']; // required
    $Ddlcountry = $_POST['Ddlcountry']; // required
    $Message = $_POST['Message']; // required
    $Description = $_POST['Description']; // required
    $Mobile = $_POST['Mobile']; // required
    $Pickup = $_POST['Pickup']; // required


    $added= date('d M Y | H:i');


    $email_message="


<center>
<table border='1' style='width:85%;border-collapse: collapse;'>
<tr>
<th style='text-align:center'>Date & Time</th>
<th style='text-align:center'>Orgin</th>
<th style='text-align:center'>Destination</th>
<th  style='text-align:center'>Weight</th>
<th style='text-align:center'>Description</th>
<th style='text-align:center'>Contact No.</th>
<th style='text-align:center'>Pickup Location</th>

</tr>
<tr>
<td style='text-align:center'>$added</td>
<td style='text-align:center'>$Orgcountry</td>
<td style='text-align:center'>$Ddlcountry</td>

<td  style='text-align:center'>$Message</td>
<td style='text-align:center'>$Description</td>
<td style='text-align:center'>$Mobile</td>
<td style='text-align:center'>$Pickup</td>

</tr>

</table></center>";








    date_default_timezone_set("Asia/Calcutta");

    require_once 'admin/config/config.php';
    date_default_timezone_set("Asia/Calcutta");
    $db = getDbInstance();
    $data_to_db = array(
        'from' => $Orgcountry,
        'to' => $Ddlcountry,
        'mobile' => $Mobile,
        'weight' => $Message,
        'content' => $Description,
        'pick_up_location' => $Pickup,
        'add_date' => date('Y-m-d H:i:s')
    );
    $db->insert('contact_us_form', $data_to_db);
    $msg="Mail Send";

    $to = 'info@rapidexworldwide.com';
    $subject = 'Rapidex World Wide Contact Us Form';
    $message = $email_message;
    $from = 'rwex2020@gmail.com';
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
// $headers .= 'From: '.$from."\r\n".
//     'Reply-To: '.$from."\r\n" .
//     'X-Mailer: PHP/' . phpversion();


    mail('virendersharma37@gmail.com', $subject, $message,$headers);



    mail('rwex2020@gmail.com', $subject, $message,$headers);
    mail($to, $subject, $message,$headers);


    header("location:thanks.php");
// 	}

}
?>