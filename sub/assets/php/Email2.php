<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/x-www-form-urlencoded; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin, Access-Control-Allow-Headers, Authorization, X-Requested With");
    
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    //path library
    /*
    require '../api/config/PHPMailer-master/src/Exception.php';
    require '../api/config/PHPMailer-master/src/PHPMailer.php';
    require '../api/config/PHPMailer-master/src/SMTP.php';
    */
    
    require '../assets/php/PHPMailer-master/src/Exception.php';
    require '../assets/php/PHPMailer-master/src/PHPMailer.php';
    require '../assets/php/PHPMailer-master/src/SMTP.php';
    
    $mail = new PHPMailer(); //declare object
    //$mail->isSMTP();
    //$mail->SMTPAuth = true;
    //based on data provided by hosting
    $mail->Host = 'etourmersing.com';
    $mail->Username = 'adminetm@etourmersing.com';
    $mail->Password = '@3tourM3rsing';
    //$mail->Password = 'Yq87b8#c7'; //password acc email
    $mail->SMTPSecure = 'tls';
    $mail->Port = 465;
    $to = $_POST['email'];
    
    //Sending email
    $mail->setFrom('adminetm@etourmersing.com', 'etour');
    $mail->addAddress('$to', 'Hayati');
    $mail->Subject = 'Subject';
    $mailContent = "<h3>this is email body</h3>";
    $mail->Body = $mailContent;
    
    if ($mail->send()) {
        echo 'Message has been sent';
    }
    else {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

?>