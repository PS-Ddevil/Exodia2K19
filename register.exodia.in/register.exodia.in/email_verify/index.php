<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Verify your email address Exodia '19</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="./exologo.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<?php
	session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require './vendor/autoload.php';
$mail = new PHPMailer(false);                              // Passing `true` enables exceptions
try {
    //Server settings
    // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.com;smtp.zoho.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'publicity@exodia.in';                 // SMTP username
    $mail->Password = 'publicityexodia';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('publicity@exodia.in', "Exodia'19_PublicityTeam");
    $mail->addAddress($_SESSION['email'], $_SESSION['username']);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('publicity@exodia.in', "PublicityTeam_Exodia'19");
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Confirm your Email and complete sign up';
    $mail->Body    = 'Please confirm your email address for Exodia 2k19 login <br><br> Click below link <br> https://register.exodia.in/verify_email.php?selector=' . \urlencode($_SESSION['selector']) . '&token=' . \urlencode($_SESSION['token']). '<br><br>Thanks<br>Team Exodia';
    $mail->AltBody = 'Please confirm your email address for Exodia 2k19 login <br><br> Click https://register.exodia.in/verify_email.php?selector=' . \urlencode($_SESSION['selector']) . '&token=' . \urlencode($_SESSION['token']). '  to verify your email address';
    $mail->send();
    $info =  'Kindly confirm your email address by visiting your inbox.';
} catch (Exception $e) {
    $info = 'Mail could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
	
?>
<body class="generic">
<div id="wrapper">
	<div align="center"><a href="https://www.exodia.in"><img src="./exologo.png" height="5%" width="5%"></a></div>
	<!-- Main -->
	<div id="main">
		<div class="container">
			<div class="head">
				<h2>Hello <?php echo $_SESSION['username'].' ('.$_SESSION['email']. ')';?></h2>
				<h3><?php echo $info;?></h3>
			</div>
			<div class="body">
				<a href="#" class="vid"><img src="./thankyou.jpg" width="640" height="360" alt="" /></a>
			</div>
		</div>
	</div>
	<!-- End Main -->
	<div class="push"></div>
</div>	
<!-- Footer -->
<div id="footer">
	<div class="shell">
		<p>Copyright &copy;</p>
		<p><a href="https://www.exodia.in">Exodia '19</a></p>
	</div>
</div>
<!-- End Footer -->
</body>
</html>