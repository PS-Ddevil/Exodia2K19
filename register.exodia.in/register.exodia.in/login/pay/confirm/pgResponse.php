<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require __DIR__ . '/mail/vendor/autoload.php';
require __DIR__ . '/vendor/autoload.php';

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$db = new \Delight\Db\PdoDsn('mysql:dbname=login;host=localhost;charset=utf8mb4', 'login_exodia', 'root@exodia12345');
$auth = new \Delight\Auth\Auth($db);
/* if(!$auth->isLoggedIn()){
	header("Location: https://register.exodia.in/oops");
} */
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

/*print_r($_COOKIE);
print_r($_POST["ORDERID"]);*/
$email = $_COOKIE["email"];
if($isValidChecksum == "TRUE") {
	$info = 0;
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		$info = "SUCCESS";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		$conn = new mysqli("localhost", 'login_exodia', 'root@exodia12345', "event_registeration");
    	if ($conn->connect_error) {
        	die("Connection failed: " . $conn->connect_error);
		}
		$email = $_COOKIE["email"];
		$event = $_COOKIE["event"];
		$team_size = $_COOKIE["team_size"];
		$name = $_COOKIE["name"];
		$phone = $_COOKIE["phone"];
		$order_id = $_POST["ORDERID"];
		$customer_id = $_COOKIE["college"];
		$amount = $_COOKIE["txn_amount"];
		$accomodation = $_COOKIE["accomodation"];
		$sql = 'INSERT into payment values("'.$email.'","'.$name.'","'.$phone.'","'.$order_id.'","'.$customer_id.'","'.$event.'",'.$team_size.','.$amount.',"'.$accomodation.'")';
		$result = $conn->query($sql);
		$conn->close();
		$mail = new PHPMailer(false);
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.zoho.com;smtp.zoho.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'publicity@exodia.in';                 // SMTP username
		$mail->Password = 'publicityexodia';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		//Recipients
		$mail->setFrom('publicity@exodia.in', "Exodia'19_PublicityTeam");
		$mail->addAddress($email, $name);     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo('publicity@exodia.in', "PublicityTeam_Exodia'19");
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Registeration Details for '.$event;
		$mail->Body    = 'Greetings! <br><br>Hello '.$name.'<br><br>Thank you for registering ('. $event.').<br>Your Order Id is <b>'.$order_id.'</b> and amount paid is <b>'.$amount.'</b>. Your team size is <b>'.$team_size.'</b><br><br><b>Team Exodia</b><br><br>* Kindly note that team size allowed will be as defined in rulebook<br>* Exodia reserves right for changes in any aspect.<br><br>* You will be asked of order id at event';
		$mail->send();
	}
	else {
		$info = "Failed";
	}

	// if (isset($_POST) && count($_POST)>0 )
	// { 
	// 	foreach($_POST as $paramName => $paramValue) {
	// 			echo "<br/>" . $paramName . " = " . $paramValue;
	// 	}
	// }
	

}
else {
	header("Location: https://register.exodia.in/oops");
	//$info = "failed";
	//Process transaction as suspicious.
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Transaction Status Exodia '19</title>
	<link rel="icon" href="https://www.exodia.in/img/favicon.ico">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Muli:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>

	<div id="notfound">
		<div class="notfound-bg"></div>
		<div class="notfound">
			<div class="notfound-404">
				<h1  style="font-size:60px;"><?php echo $info;?></h1>
			</div>
			<h2 style="font-size:20px;">Above message shows your transaction status. Also do check your email (<?php echo $email;?>)</h2>
			<div class="notfound-social">
				<a href="https://www.facebook.com/Exodia.IITMandi/"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/exodia_iitmandi"><i class="fa fa-twitter"></i></a>
				
			</div>
			<a href="https://register.exodia.in/login/home">Back To Homepage</a>
		</div>
	</div>

</body>

</html>
