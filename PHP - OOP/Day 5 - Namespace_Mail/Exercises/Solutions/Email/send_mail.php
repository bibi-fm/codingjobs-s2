<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'simon-bertrand@live.fr';                     //SMTP username
    $mail->Password   = 'test';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('simon-bertrand@live.fr', 'Simon');
    $mail->addAddress('simon-bertrand@live.fr', 'Makoto');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $fullMsg = 'Message received from Contact form.<br>
    Name : ' . $_POST['name'] . '<br> 
    Phone : ' . $_POST['phone'] . '<br>
    Message : ' . $_POST['message'] . '<br>
    <img src="https://i1.sndcdn.com/avatars-000593265963-33fplb-t240x240.jpg" width="100px">';

    $mail->Body    = $fullMsg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send())
        echo 'Message has been sent';
} catch (Exception $e) {
    echo "yo, Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
