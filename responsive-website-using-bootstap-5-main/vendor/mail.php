<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php'); 
require('PHPMailer/src/SMTP.php');

function sendmail($from, $subject, $message, $name, $CCMail, $BCCMail)
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@navix.in';
    $mail->Password   = 'Navix@1800'; 
    // $mail->SMTPDebug = 2;                            
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    //Recipients
    $mail->setFrom('noreply@navix.in', "Aditi kumari Pandey");
    if ($CCMail != "") {
        $mail->addCC("$CCMail");
    }
    if ($BCCMail != "") {
        $mail->addBCC("$BCCMail");
    }
    $mail->addAddress('aditikumaripandey810@gmail.com', "");

    //Content
    $mail->isHTML(true);
    $mail->Subject = "$subject";
    $mail->Body    = ($message);

    if (!$mail->Send()) {
        return 0;
    } else {
        return 1;
    }
}
