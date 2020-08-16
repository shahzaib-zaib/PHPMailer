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
        $mail->Username = "americalogodesigns@gmail.com";

    //Set gmail password
        $mail->Password = "shahzaib123";

    //Set email subject
        $mail->Subject = "Test Email Using PHPMailer";

    //Set sender email
        $mail->setFrom("americalogodesigns@gmail.com");
        
    //Enable HTML
        $mail->isHTML(true);

    //Attachment
        $mail->addAttachment('img/attachment.png');

    //Email body
        $mail->Body = "<h1>This is h1 html heading</h1><br>
        <p>This is html paragraph</p>";

    //Add recipient
        $mail->addAddress("americalogodesigns@gmail.com");

    //Finally send email
        if ( $mail->Send()) {
            echo "Email Sent..!";
        }else{
            echo "Error..!";
        }
        
    //Closing smtp connection
        $mail->smtpClose();
?>