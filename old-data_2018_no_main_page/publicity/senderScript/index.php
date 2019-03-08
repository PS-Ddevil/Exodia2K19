<?php 
  
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';  

  if(isset($_POST['submit'])) {

    function array_implode($a) {
        return (array)implode(', ', (array) $a);
    }


      $names=$_POST['names'];      
      $emails=$_POST['emails'];      
      $listNames = explode(",", $names);
      $listEmails = explode(",", $emails);

      if(sizeof($listNames) != sizeof($listEmails)){
        echo "<script type='text/javascript'>alert('Number of mails are not equal to the number of names! Pls recheck.');</script>";
      }

      else{
          $length = sizeof($listNames);
          for ($x = 0; $x < $length; $x++) {

            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP(); // enable SMTP
            // $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.zoho.com";
            $mail->Port = 587; // or 587
            $mail->IsHTML(true);
            $mail->Username = "publicity@exodia.in";
            $mail->Password = "publicityexodia";
            $mail->SetFrom("publicity@exodia.in");
            $mail->AddReplyTo( 'publicity@exodia.in', 'Publicity Team, Exodia IIT Mandi');
            $mail->Subject = "Association with Exodia'18 the annual Technical-Cultural fest of IIT Mandi";
            $mail->Body = "Bonjour!<br/><br/>Greetings from EXODIA'18!!<br/><br/>Sequel of EXODIA is alive again, and we wish to collaborate with you again this year.<br/><br/>EXODIA, the biggest, the prestigious and the most awaited technical-cultural fest of the Himalayas hosted by IIT Mandi is back in its 7th incarnation. EXODIA, a major crowd attraction of the region is all set to fill the scenic valley of Kamand with excitement and enthusiasm.<br/><br/>This edition of Exodia wants to come and associate with your worthy firm any manner whether it be sponsorship, Media relation, we are ready and excited to work with ".$listNames[$x].".<br/>So please let us know about the possibilities of association .so that we can move on to the deliverable.<br/>Dates: 6-8 April 2018<br/>Venue: Indian Institute of Technology, Mandi, Himachal Pradesh.<br/>We hope to hear a quick and positive reply from your esteemed company. EXODIA is in a phase of concatenation, we request you to join the streak and fuel this beacon of light.<br/>Life of the valley, EXODIA is hailing!<br/><br/>Warm Regards,<br/><br/>Hrishikesh Sagar<br/>Media Head, Exodia'18<br/>http://www.exodia.in/<br/>https://www.facebook.com/Exodia.IITMandi/";
            $mail->AddAddress($listEmails[$x]);
            // $mail->addAttachment('css/style.css'); <------------add your attachment file path here
            if(!$mail->Send()) {
              echo '<script type="text/javascript">alert("error sending mail");</script>';
                echo "Mailer Error: " . $mail->ErrorInfo;
             } else {
                echo '<script type="text/javascript">alert("message sent!");</script>';
             }
          } 

      }
  }  
?>



<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>senderScript for Media</title>
  <link rel="stylesheet" href="css/style.css"> 
</head>

<style type="text/css">
  textarea {
  width: 400px;
  height: 100px;
}
</style>
<body>

  <form method="post" action="" id="form" name="senderScript">
  <div class="form-field">
    <label for="full-name">Names</label>
    <textarea type="text" name="names" id="full-name" placeholder="person1, person2,..." ></textarea>
  </div>
  <div class="form-field">
    <label for="email-input">Emails</label>
    <textarea type="text" name="emails" placeholder="person1@dom.com, person2@dam.com, ..."  ></textarea>
  </div>
  <div class="form-field">
    <label for=""></label>
    <input type="submit" name="submit" value="Send Emails" />
  </div>
</form>
  


</body>

</html>
