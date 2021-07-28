<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './lib/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'greeniesmarket1@gmail.com';
    $mail->Password   = 'flag2021';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->setFrom('greeniesMartket1@gmail.com', 'Greenies');
    $mail->addAddress($_SESSION["email"], $_SESSION["name"]);
    
    $mail->isHTML(true);
    $mail->Subject = 'Thanks for shopping at Greenies';

    $mail->Body = '<h2>Thanks for your purchase <strong>'.$_SESSION["name"].'</strong>!</h2> 
                   The order is on its way to your address <br>
                   Please consider the invoice attached with every detail of the purchase
                   Access the link bellow link bellow to get a 10% discount cupon
                   on your next purchase  <br>
                   <a href="https://www.greeniesMarket.com">Free 10% Discount</a>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    require("views/endPurchase.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
