<!--
This is a script, written and designed to test the functionality of the
PHP mail() function on a web hosting account. I offer no warrenty with
this script. Anyone can use and distribute the script freely.
-->

<html>
<head><title>PHP Mail() test</title></head>
<body>

This form will attempt to send a test email. Please enter where this test should be sent to<br><p>
<form action = "sendmail.php" method = "post" name="sendmail">
Enter an email address: <input type = "text" name = "to"><br>
<input type="submit" value="Send" name="submit"><input type="reset" value="Reset" name="reset"><br><p>



<?php

if(isset($_POST['to']))
{
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['SCRIPT_URI'];
$mail_to=$_POST['to'];
$mail_subject="Test email from $host";
$mail_body="This is a test email, sent from $uri";
$header = "Content-type: text/html\n";
$header .= "From: \"PHP mail() Test Script\"<noreply@$host>\n";


if(mail($mail_to, $mail_subject, $mail_body,$header))
{
print "Email sent successfully!<img src=\"http://dubovik.us/happygir.jpg\">";
}
else
{
print "Email did not send<img src=\"http://dubovik.us/madgir.jpg\">";
}
}
?>

</body>
</html>