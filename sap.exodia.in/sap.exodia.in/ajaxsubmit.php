<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$conn = new mysqli("localhost", "exodia_sap", "exodia@12345", "SAP");
// $conn = new mysqli("localhost", "root", "", "SAP");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Fetching Values from URL
$name2=$_POST['name1'];
$email2=$_POST['email1'];
$college2=$_POST['college1'];
$phone2=$_POST['phone1'];
$whatsapp2=$_POST['whatsapp1'];
$birthday2=$_POST['birthday1'];
$gender2=$_POST['gender1'];
$sql1 = "SELECT * FROM sap_details WHERE phone='$phone2'";
$result1 = $conn->query($sql1);
if ($result1->num_rows>0) {
	echo "Entry already exists";
}
else {
$sql = "insert into sap_details(name, email, college, phone, whatsapp, birthday, gender) values ('$name2', '$email2', '$college2','$phone2','$whatsapp2','$birthday2','$gender2')";
if ($conn->query($sql) === TRUE) {
    echo "Details recorded successfully";
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
    $mail->addAddress($email2, $name2);     // Add a recipient
    $mail->addReplyTo('publicity@exodia.in', "PublicityTeam_Exodia'19");

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Successful registration for SAP@Exodia';
    $mail->Body    = "Greetings from Publicity Team, Exodia'19!<br> You are successfully registered as part of Student Ambassdor Team Program :)<br><br>Publicty Team<br>Exodia'19" ;
    $mail->AltBody = 'Greetings from Publicity Team, Exodia 2K19!
     You are successfully registered as part of Student Ambassdor Team Program:)
     
     Publicty Team';

    $mail->send();
} catch (Exception $e) {
    echo 'Mail not Sent';
}
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close(); // Connection Closed
?>