<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exodia 2K19 Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="https://www.exodia.in/img/favicon.ico">

    <style>
    .topnav {
    background-color: #333;
    overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
    float: right;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
    background-color: #ddd;
    color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
    background-color: #4CAF50;
    color: white;
    }
    </style>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

<?php
require __DIR__ . '/vendor/autoload.php';
session_start();
$db = new \Delight\Db\PdoDsn('mysql:dbname=login;host=localhost;charset=utf8mb4', 'login_exodia', 'root@exodia12345');
$auth = new \Delight\Auth\Auth($db);
if (true)
	header("Location: https://register.exodia.in/oops");
if($auth->isLoggedIn()){
    $_SESSION["event"] = $_GET['event'];
    $conn = new mysqli("localhost", "login_exodia", "root@exodia12345", "event_registeration");
    if ($conn->connect_error) {
        die("Connection Failed");
    }
    $sql = 'SELECT * from fee where event="'.$_GET['event'].'"';
    $result = $conn->query($sql);
    $txn_amount = 0;
    if($result->num_rows > 0) {
		$row = $result->fetch_assoc();
        $txn_amount = $row["fee"];
    }
    else {
        header("Location: https://register.exodia.in/oops");
    }
    $conn->close();
	$email = $auth->getEmail();
    echo '
    <!-- <div class="topnav">
        <a href="./logout.php">Logout</a>
    </div> -->
    <div class="container-contact100">
			<div class="wrap-contact100">
			<a href="./logout.php" title="Logout" style="float:right;"><i class="fa fa-sign-out fa-4x"></i></a>
			<form class="contact100-form validate-form" action=./submit.php method=post>
				<span class="contact100-form-title">
					Register for '.$_GET['event']. '
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your College Name">
					<span class="label-input100">COLLEGE NAME *</span>
					<input class="input100" type="text" name="college" placeholder="Enter Your College Name">
				</div>

				
				<input class="input100" type="hidden" name="email" placeholder="Enter Your Email " value='.$email.'>

				<div class="wrap-input100 validate-input bg1" data-validate = "Enter your Phone Number">
					<span class="label-input100">Phone *</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Phone Number">
				</div>

				<input class="input100" type="hidden" name="manager"  value='.$_GET['manager']. ' required>
				
				<input class="input100" type="hidden" name="event" value='.$_GET['event']. '>
				<input class="input100" type="hidden" name="amount" value='.$txn_amount. '>
				
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please enter team members details">
					<span class="label-input100">Further Details *</span>
					<textarea class="input100" name="message" placeholder="Enter team member details"></textarea>
				</div>
				<a href="https://www.exodia.in/T&C.pdf" target="_blank">*By clicking submit you agree to abide Exodia Rules and Regulation</a>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
    </div>';
}
else {
    header("Location: https://register.exodia.in/oops");
}
?>



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1, 10 ],
	        connect: true,
	        range: {
	            'min': 1,
	            'max': 10
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
	<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
