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
        $mail->Username = "shahzaibux@gmail.com";
    //Set gmail password
        $mail->Password = "";
    //Set email subject
        $mail->Subject = "Test Email Using PHPMailer";
    //Set sender email
        $mail->setFrom("shahzaibux@gmail.com");
    //Email body
        $mail->Body = "This is plain text email body";
    //Add recipient
        $mail->addAddress("shahzaibux@gmail.com");
    //Finally send email
        if ( $mail->Send()) {
            echo "Email Sent..!";
        }else{
            echo "Error..!";
        }
    //Closing smtp connection
        $mail->smtpClose();
?>