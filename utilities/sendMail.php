<?php
if (str_replace('\\', '/', __FILE__) === str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied');
}
use PHPMailer\PHPMailer\PHPMailer;

try {
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';


    $mail = new PHPMailer(true);


    $mail->isSMTP();//Send using SMTP
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Host = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth = true;             //Enable SMTP authentication
    $mail->Username = 'gymworld135@gmail.com';   //SMTP write your email
    $mail->Password = 'iqot leko kcqf rnby';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port = 465;


    $mail->setFrom("noreply@gmail.com", "gymworld"); // Sender Email and name
    $mail->addAddress($emailToSend, $name);     //Add a recipient email


    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = "test subject";   // email subject headings
    $mail->Body = '<h1>Welcome to our gym ! We are happy to welcome you as a new member</h1>';
    $mail->AltBody = $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .container {
                width: 80%;
                margin: auto;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            .header {
                text-align: center;
                color: #444;
            }
            .content {
                margin-top: 20px;
                line-height: 1.6;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="header">Welcome to Our Community!</h1>
            <div class="content">
                <p>Dear ' . $name . ',</p>
                <p>We\'re excited to have you join our community. You\'re on your way to super-productivity and beyond!</p>
                <p>Should you have any questions or need assistance with anything, feel free to reply to this email. We\'re here to help!</p>
                <p>Best,</p>
                <p>Dhouibi Mohamed Aziz</p>
                <p>Community Manager</p>
            </div>
        </div>
    </body>
    </html>
    ';

    $mail->send();

    header('Location: ../login/user/index.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}