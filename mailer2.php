<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';


$email = $_SESSION['email'];
$msg = $_SESSION['msg'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    
            $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
 
            //Send using SMTP
            $mail->isSMTP();
 
            //Set the SMTP server to send through
            $mail->Host = 'smtp.gmail.com';
 
            //Enable SMTP authentication
            $mail->SMTPAuth = true;
            //SMTP username
            $mail->Username = 'franz.valones107@gmail.com';
 
            //SMTP password
            $mail->Password = 'nimqtiiopmsfjfkm';
 
            //Enable TLS encryption;
            $mail->SMTPSecure = 'tls';
 
            //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->Port = 587;
 
            //Recipients
            $mail->setFrom('franz.valones107@gmail.com', 'Zion Academy');
 
            //Add a recipient
            $mail->addAddress('noreplycarpoolingapp@gmail.com');
 
            //Set email format to HTML
            $mail->isHTML(true);
 
 
            $mail->Subject = 'Email verification';
            $mail->Body    = '<h1>Zion Academy</h1>
                                <hr>
                                    <br>You have received a feedback!'.'<br>'.$msg;
            $mail->send();
            // echo 'Message has been sent';
            // connect with database
            // insert in users table
            header("location: index.php#feedback");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>