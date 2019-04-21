<?php
		session_start();
		require __DIR__ . '/vendor/autoload.php';
    $db = new \Delight\Db\PdoDsn('mysql:dbname=login;host=localhost;charset=utf8mb4', 'login_exodia', 'root@exodia12345');
    $auth = new \Delight\Auth\Auth($db);
    if(!$auth->isLoggedIn()){
        header("Location: https://register.exodia.in/oops");
    }
		$email = $auth->getEmail();
		$order_id = \Delight\Auth\Auth::createUuid();
		$customer_id = $_SESSION["college"];
		$industry_type_id = "Retail";
		$channel = "WEB";
		// $txnAmount = (int)$_POST["amount"];
		$txnAmount = $_SESSION["txn_amount"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payer Details Exodia 2K19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://www.exodia.in/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
#Show{
	overflow: scroll;}
		
</style>

</head>
<?php
	if($_SESSION["event"] == "Youth_Parliament")
		echo '<body onload="on()">';
	else
		echo '<body>';
	?>
	<div id="overlay" onclick="off()">
  		<br><center><i class="fa fa-close fa-2x" style="color:red"></i><br><iframe src="https://docs.google.com/forms/d/e/1FAIpQLSffHifHiLi-yJXo3lNP-o4tCuP5I3AnL8j0qJw2NzSSXpePRQ/viewform?embedded=true" width="640" height="650" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe></center><br>
	</div>

	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" method="post" action="pgRedirect.php">
					<span class="contact3-form-title">
					<img src="https://www.exodia.in/img/favicon.ico" alt='Exodia IIT Mandi' height="75px" width="70px" title="Exodia IIT Mandi">
					</span>

					<div class="wrap-contact3-form-radio">
						<?php if($_SESSION["event"] != "Accomodation")
						echo '
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice" value="no" checked="checked">
							<label class="label-radio3" for="radio1">
								Accomodation not required
							</label>
						</div>';?>
						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="choice" value="yes" checked='checked'>
							<label class="label-radio3" for="radio2">
								Accomodation (2N/3D + food)
							</label>
						</div>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Leader Name is required">
						<input class="input3" type="text" name="name" placeholder="Leader Name" required>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Leader Phone Number is required">
						<input class="input3" type="text" name="phone" placeholder="Leader Phone Number" required>
						<span class="focus-input3"></span>
					</div>

					<input type="hidden" name="email" placeholder="Your Email" value=<?php echo $email?>>

					<div class="wrap-input3 validate-input" data-validate="Count is required" required>
						<input class="input3" type="number" name="team_size" min=1 max=100 placeholder="Team Members Count">
						<span class="focus-input3"></span>
					</div>
					<input id="ORDER_ID" type="hidden" name="ORDER_ID" autocomplete="off" value="<?php echo  $order_id;?>">
					<input id="CUST_ID" type="hidden" name="CUST_ID" value=<?php echo $customer_id;?>>
					<input id="INDUSTRY_TYPE_ID" type="hidden" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
					<input id="CHANNEL_ID" type="hidden" name="CHANNEL_ID" autocomplete="off" value="WEB">
					<input title="TXN_AMOUNT" type="hidden" name="TXN_AMOUNT" value=<?php echo $txnAmount;?>>
					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
