
<?php
require_once('../library/PHPMailer/mailer.php');
try {
     $data = json_decode(file_get_contents("php://input"));
     
     $_POST['name'] =  $data->name;
     $_POST['message'] =  $data->message;
     $_POST['email'] =  $data->email;
     $_POST['phone'] =  $data->phone;
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['phone'])){
        $_POST = array_map("trim", $_POST);
        $messageBody = '<table style="width:55%;margin:0 auto;text-align:left;border-collapse:collapse">
                        <thead>
                        <tr>
                        <td colspan="2" style="background-color:#fd7e14;text-align:center;padding:10px;color:white;border:1px solid grey;font-weight:800;font-size:20px">Scholaracad Enquiry Details </td>
                        </tr>
                        <tr style="padding:10px">
                            <th style="border:1px solid grey;padding:10px">NAME </th>
                            <td style="border:1px solid grey;padding:10px">'.ucwords(strtolower($_POST['name'])).'</td>
                        </tr>
                    
                        <tr style="padding:10px">
                            <th style="border:1px solid grey;padding:10px">EMAIL </th>
                            <td style="border:1px solid grey;padding:10px"><a href="mailto:'.strtolower($_POST['email']).'" target="_blank" title="click to send email">'.strtolower($_POST['email']).'</a></td>
                        </tr>
                    
                        <tr style="padding:10px">
                            <th style="border:1px solid grey;padding:10px"> PHONE NUMBER </th>
                            <td style="border:1px solid grey;padding:10px">'.$_POST['phone'].'</td>
                        </tr>
                        <tr style="padding:10px">
                            <th style="border:1px solid grey;padding:10px"> MESSAGE </th>
                            <td style="border:1px solid grey;padding:10px">'.$_POST['message'].'</td>
                        </tr>
                        </thead>
                    </table>';
        $mail = new Mailer();
        $mail-> smtp = "smtp.gmail.com";
        $mail->fromEmail = "sajid.globalheight@gmail.com";
        $mail->fromPassword = "hzbagjenqonfkvlb";
        $mail->fromName = "Do Not Reply";
        $mail->toEmail = "sajid.globalheight@gmail.com";

        $mail->subject = "Mauliuniform Enquiry Information";
        $mail->bodyHTML  = $messageBody;
        $mail->bodyText =  $messageBody;
        $mail->debug = "false";
        try {
            if($mail->sendMail()){
                echo json_encode(array("status"=>200, "message"=>"Mail sent successfully"));
                exit;
            }else {
                echo json_encode(array("status"=>404, "message"=>"Mail could not sent, Please try again later!"));
                exit;
            }
        }catch (Exception $e){
            echo json_encode(array("status"=>404, "message"=>$e->getMessage()));
            exit;
        }

    }else {
        echo json_encode(array("status"=>404, "message"=>"All fields are required to send mail"));
    }   
}catch(Exception $e){
    echo json_encode(array("status"=>404, "message"=>$e->getMessage()));
    exit;
}
?>