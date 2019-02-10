<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/PHPMailer/src/Exception.php';
require 'phpmailer/PHPMailer/src/PHPMailer.php';
require 'phpmailer/PHPMailer/src/SMTP.php';
enviarEmail();
function enviarEmail(){
    if(isset($_POST['comment'])){
        //mandar correo
 
        $comment = $_POST['comment'];
        
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.office365.com';                   // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'fastserviceinf@outlook.com';                 // SMTP username
            $mail->Password = '1234FastService';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            //Recipients
            $mail->setFrom('fastserviceinf@outlook.com', 'Mailer');
            $mail->addAddress('jorge.encalada@ucuenca.edu.ec', 'Mailer');     // Add a recipient
           
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Solicitud de servicios';
            $mail->Body    = '<br/>' . $comment;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }else{
        return;
    }
}
?>