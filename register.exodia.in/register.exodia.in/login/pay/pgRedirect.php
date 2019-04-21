<?php
session_start();
require __DIR__ . '/vendor/autoload.php';
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
$db = new \Delight\Db\PdoDsn('mysql:dbname=login;host=localhost;charset=utf8mb4', 'login_exodia', 'root@exodia12345');
$auth = new \Delight\Auth\Auth($db);
if(!$auth->isLoggedIn()){
        header("Location: http://localhost/oops");
}
$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = (int)$_POST["TXN_AMOUNT"];
$name = $_POST["name"];
$email = $_POST["email"];
if($_POST["team_size"])
	$team_size = $_POST["team_size"];
else
	$team_size = 1;
$phone = $_POST["phone"];
$_SESSION["phone"] = $phone;
$_SESSION["order_id"] = $ORDER_ID;
$_SESSION["customer_id"] = $CUST_ID;
$_SESSION["accomodation"] = $_POST["choice"];
$_SESSION["team_size"] = $_POST["team_size"];
if ($_COOKIE["manager"] == "workshop")
	$TXN_AMOUNT = $TXN_AMOUNT*((int)$_POST["team_size"]);

if ($_POST["choice"]=="yes"){
	$TXN_AMOUNT += 1200*((int)$_POST["team_size"]);
	$_SESSION["txn_amount"] = $TXN_AMOUNT;
} 
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
setcookie("name", $_POST["name"], time() + (86400), "/");
setcookie("email", $_POST["email"], time() + (86400), "/");
setcookie("accomodation", $_POST["choice"], time() + (86400), "/");
setcookie("phone", $_POST["phone"], time() + (86400), "/");
setcookie("cust_id", $_POST["CUST_ID"], time() + (86400), "/");
setcookie("team_size", $team_size, time() + (86400), "/");
setcookie("txn_amount", $TXN_AMOUNT, time() + (86400), "/");
setcookie("event", $_SESSION["event"], time() + (86400), "/");
// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;


$paramList["CALLBACK_URL"] = "https://register.exodia.in/login/pay/confirm/pgResponse.php";
$paramList["MSISDN"] = $_POST["phone"]; //Mobile number of customer
$paramList["EMAIL"] = $_POST["email"]; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //


//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>