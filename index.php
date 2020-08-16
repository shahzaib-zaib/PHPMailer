<?php

    //Include required phpmailer files
        require 'includes/PHPMailer.php';
        require 'includes/SMTP.php';
        require 'includes/Exception.php';

    //Define name spaces
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

    //Create instance of phpmailer
        $mail = new PHPMailer();
    //Set mailer to use smtp
        $mail->isSMTP();
    //Define smtp host
        $mail->Host = "smtp.gmail.com";
    //Enable smpt authentication
        $mail->SMTPAuth = "true";
    //Set type of encryption (SSL/TLS)
        $mail->SMTPSecure = "tls";
    //Set port to connect smpt
        $mail->Port = "587";
    //Set gmail username
    //Set gmail password
    //Set email subject
    //Set sender email
    //Email body
    //Add recipient
    //Finally send email
    //Closing smtp connection
?>