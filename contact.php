<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i>YangiHayot, Tashkent </div>
            <div><i class="fas fa-envelope"></i>ibrohim_abbosov@mail.ru</div>
            <div><i class="fas fa-phone"></i>+998 90 001-29-19</div>
            <div><i class="fas fa-clock"></i>Mon-Fri 08:00 to 18:00</div>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form class="contact" action="contact.php" method="post">
                <input type="text" name="name" class="text-box" placeholder="Name" required>
                <input type="email" name="email" class="text-box" placeholder="Email" required>
                <textarea name="message" rows="5" placeholder="Message" required></textarea>
                <input type="submit" name="submit" value="Send" class="sendbtn">
            </form>
        </div>
    </div>
    
<?php

require('vendor/autoload.php');
require "includes/PHPMailer.php";
require "includes/SMTP.php";
require "includes/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']))
{
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $mail=new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->SMTPSecure="ssl";
    $mail->Host="smtp.gmail.com";
    $mail->Port="465";
    $mail->isHtml();
    $mail->Username="ibrohimabbosov757@gmail.com";
    $mail->Password="wbhvvddvrzrtcyiz";
    $mail->SetFrom('ibrohimabbosov757@gmail.com');
    $mail->Subject="Contact Message";
    $mail->Body="<h3> Name: $name <br> Email: $email <br> Message: $message </h3>";
    $mail->addAddress("ibrohimabbosov757@gmail.com");

    $mail->Send();
}

?>

</body>
</html>