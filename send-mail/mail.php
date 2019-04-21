<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(false);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.com;smtp.zoho.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'publicity@exodia.in';                 // SMTP username
    $mail->Password = 'publicityexodia';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('publicity@exodia.in', "Exodia'19_PublicityTeam");
    $mail->addAddress('abh799@outlook.com', 'Abhishek');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('publicity@exodia.in', "PublicityTeam_Exodia'19");
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Successful registration for SAP@Exodia';
    $mail->Body    = 'Greetings from Publicity Team, Exodia 2K19!<br> You are successfully registered as part of Student Ambassdor Team Program:)<br><br>Publicty Team' ;
    $mail->AltBody = 'Greetings from Publicity Team, Exodia 2K19!
     You are successfully registered as part of Student Ambassdor Team Program:)
     
     Publicty Team';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}