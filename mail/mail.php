<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendmail($service, $senderName, $senderEmail)
{
    $result = true;

    $content = " <h3>Coach Miriane from KDM.</h3>
                <p style='color: #333; font-size 14px; padding: 10px; line-height: 30px;font-family: 'Courier New', Courier, monospace;';>
                    Dear $senderName,</br>
                Congratulations! You have successfully, finish the firts step of Appointment.</br>
                Finalyze it. 
                Please choose an appointment through the link below <a href='https://doodle.com/bp/seedophdountio/sidof'>KDM</a>
                </p>
                <p>
                    Visit our <a href='https://web.facebook.com/profile.php?id=100083576551894'> Facebook page</a>,</br>
                    Copyright &copy; KDM
                </p>
               ";
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    // Créer une instance de classe PHPMailer
    $mail = new PHPMailer();
    $mail->isSMTP();
    // $mail->SMTPDebug  = 3; 
    $mail->Host       = "smtp.gmail.com";
    $mail->SMTPAuth   = true;
    $mail->Username   = "sidofdountio406@gmail.com";
    $mail->Password   = "";
    $mail->Port       = 587;
    $mail->SMTPSecure = "tls";
    $mail->Mailer = "smtp";
    $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ]);
    $mail->isHTML(true);
    $mail->setFrom("sidofdountio406@gmail.com", "KDM");
    $mail->addAddress($senderEmail, $senderName);
    $mail->Subject = $service;
    $mail->Body = $content;
    // sens email
    if ($mail->Send()) {
        return true;
    } else {
        return  false;
    }
}
