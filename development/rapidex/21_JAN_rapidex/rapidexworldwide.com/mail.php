<?php

error_reporting(0);


if(isset($_POST['submit'])&&$_POST['submit']=='Submit')
{


    date_default_timezone_set("Asia/Calcutta");


    $fname = $_POST['fname']; // required
    $to = $_POST['to']; // required
    $mobile = $_POST['mobile']; // required
    $weight = $_POST['weight']; // required
    $content = $_POST['content']; // required
    $location = $_POST['location']; // required

    $email_message = "From Location: ".$fname."<br>";
    $email_message = "To Location: ".$to."<br>";
    $email_message .= "Mobile: ".$mobile."<br>";
    $email_message .= "Weight: ".$weight."<br>";
    $email_message .= "Content: ".$content."<br>";
    $email_message .= "Pickup Location: ".$location."<br>";




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
<td style='text-align:center'>$fname</td>
<td style='text-align:center'>$to</td>
<td  style='text-align:center'>$weight</td>
<td style='text-align:center'>$content</td>
<td style='text-align:center'>$mobile</td>
<td style='text-align:center'>$location</td>

</tr>

</table></center>";







// 	----	$subject="Enquiry";











// 		$to="info@rapidexworldwide.com";














// 	----	$headers = 'From: www.rapidex.com<Sales@rapidexworldwide.com>' . "\n";
// 	--	$headers .= 'MIME-Version: 1.0' . "\n";
// 	---	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";









//   $body = $email_message;


//   include_once("admin/config/smtpmail_script/class.phpmailer.php");


//   $subject='Enquiry';
//           $mail = new PHPMailer();
//           $mail->IsSMTP();
//           // set mailer to use SMTP
//           $mail->Host = "mail.gmail.com";  // specify main and backup server
//           $mail->Port = 587;
//           $mail->SMTPAuth = true;     // turn on SMTP authentication
//           $mail->Username = "info@rapidexworldwide.com";  // SMTP username
//           $mail->Password = "RapidEx@2020"; // SMTP password
// $mail->SMTPSecure = 'tls';
//     $mail->From = "info@rapidexworldwide.com";
//     $mail->FromName = 'Rapidex World Wide Enquiry';
//     $mail->AddAddress($to);
//     $mail->IsHTML(true);
//     $mail->Subject = $subject;
//     $mail->Body = $body;





    // if(!$mail->Send())
    // {
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
    // }else{

//      	require_once 'admin/config/config.php';
// 			$db = getDbInstance();
// 			$data_to_db = array(
// 				'from' => $fname,
// 				'to' => $_POST['to'],
// 				'mobile' => $mobile,
// 				'weight' => $weight,
// 				'content' => $content,
// 				'pick_up_location' => $location,
// 				'add_date' => date('Y-m-d H:i:s'),
// 			);
// 			$db->insert('contact_us_form', $data_to_db);
// 			$msg="Mail Send";
// 			header("location:thanks.php");
    // }


    date_default_timezone_set("Asia/Calcutta");

    require_once 'admin/config/config.php';
    date_default_timezone_set("Asia/Calcutta");
    $db = getDbInstance();
    $data_to_db = array(
        'from' => $fname,
        'to' => $_POST['to'],
        'mobile' => $mobile,
        'weight' => $weight,
        'content' => $content,
        'pick_up_location' => $location,
        'add_date' => date('Y-m-d H:i:s'),
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


//   mail('virendersharma37@gmail.com', $subject, $message,$headers);



    mail('rwex2020@gmail.com', $subject, $message,$headers);
    mail($to, $subject, $message,$headers);

// Sending email
// if(mail($to, $subject, $message,$headers)){
//     echo 'Your mail has been sent successfully.';
// } else{
//     echo 'Unable to send email. Please try again.';
// }

// 	echo "<script>"

    header("location:thanks.php");

// 		echo 'Data'.$send=mail($to, $subject, $email_message, $headers);


// 		if($send) {

// 		}
}
?>