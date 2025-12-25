<?php
       
        
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/x-www-form-urlencoded; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin, Access-Control-Allow-Headers, Authorization, X-Requested With");
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    
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
    $mail->setFrom('adminetm@etourmersing.com', 'eTourMersing');
    $mail->addAddress($to);
    $mail->Subject = 'Subject: eTourMersing are welcoming you.';
    $mailContent = "Dear subscriber,
                    
    Thank you for your subscription. You've been added to our mailing list and will now be aming the first to hear about our new update, upcoming events and special new packages.
                    
From, 
eTourMersing teams ";
    $mail->Body = $mailContent;
    
    if ($mail->send()) {
        header('Location: https://etourmersing.com/Thankyou.html ');
        
        
    }
    else {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
      ?>