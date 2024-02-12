<?php
    require 'vendor/autoload.php';

    $email="receiver@gmail.com";

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    // create a new PHPMailer instance
    $mail -> isSMTP();
    $mail -> Host ="smtp.gmail.com";
    $mail -> SMTPAuth = true;
    $mail -> Username="Example@gmail.com";// Your Email address
    $mail -> Password="";// Your App Password
    $mail -> SMTPSecure="tls";
    $mail -> Port=587; 

    // Sender and recipient configuration
    $mail -> setFrom('Example@gmail.com','Example'); // Replace with your email address and name
    $mail ->addAddress($email);

    // Email content
    $mail ->Subject ="Example";
    $mail ->Body="Hello World!";

    // Send the email
    if(!$mail ->send()){
        echo "Something went Wrong";
    }else{
        echo "mail send";
    }
?>
