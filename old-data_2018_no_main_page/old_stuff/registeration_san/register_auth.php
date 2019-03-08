<?php

	include 'resources/conn.php';
	include 'resources/saviour.php';

	if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['college']) && !empty($_POST['college']) && isset($_POST['number']) && !empty($_POST['number'])) {

		$email = saviour($_POST['email']);
		$password = saviour($_POST['password']);
		$name = saviour($_POST['name']);
		$college = saviour($_POST['college']);
		$number = saviour($_POST['number']);

		$result = $db->prepare("SELECT `email` FROM login_data WHERE email = ?");
		$result->bind_param('s', $email);
		$result->execute();

		$result->bind_result($email_recieved);

		if ($result->fetch()) {
			if ($email_recieved == $email) {
				// account with already an email exists!
				session_start();
				$_SESSION['forwaded_message'] = "Email id already exists! Please try again!";
				//header('Location: signup.php');
				//echo "a";
				$set = 3;
			}
		}
		else {
			/*$result = $db->prepare("INSERT INTO login_data VALUES (?, ?, ?, ?, ?)");
			$result->bind_param('ssssi', $email, $password, $name, $college, $number);
			echo $name;*/

			/*//$con = mysql_connect('localhost', 'id5023411_developer', 'Priyansh#MadeThis@26') or  
						$con = mysql_connect('localhost', 'root', '') or  
					    die("Could not connect: " . mysql_error());  
					//mysql_select_db('id5023411_sap_dp'); 
					    mysql_select_db('sa'); */

			$con = mysql_connect('localhost', 'developer', 'Priyansh#MadeThis@26') or  
					    die("Could not connect: " . mysql_error());  
					//mysql_select_db('id5023411_sap_dp'); 
					    mysql_select_db('sap_db'); 
				
			
					$query = sprintf("INSERT INTO login_data VALUES( '%s', '%s', '%s' , '%s', %d)",
		            mysql_real_escape_string($email), 
		            mysql_real_escape_string($password),
		            mysql_real_escape_string($name),
		            mysql_real_escape_string($college),
		            mysql_real_escape_string($number)); 
					//$result = mysql_query($query); 
			
			if ($result = mysql_query($query)) {
				session_start();
				$_SESSION['forwaded_message'] = "Account created, Please login to continue!";
				//header('Location: login.php');
				//echo "signed up sudccesfully";
				$set = 1;
			}
			else {
				$_SESSION['forwaded_message'] = "Couldn't create account! Please try again!";
				//echo 'Mysql error '. mysql_error() ."<br />\n";
				//header('Location: signup.php');
				//die('execute() failed: ' . htmlspecialchars($result->error));
				//echo('could not sign up');
				$set = 2;
			}

			
		}


	}
	else {
		//echo "data incomplete, email id or password not sent!";
		$_SESSION['forwaded_message'] = "Couldn't create account with incomplete data. Please try again!";
		//header('Location: signup.php');
		$set = 4;
	}

?>

<!DOCTYPE html>

<html lang="en" class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" href="portal/exodia.png">
    <title>Exodia IIT Mandi</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">

    <link href="portal/bootstrap.min.css" rel="stylesheet">

    <link href="portal/animate.min.css" rel="stylesheet">

    <link href="portal/paper-dashboard.css" rel="stylesheet">

    <link href="portal/demo.css" rel="stylesheet">

    <link href="portal/font-awesome.min.css" rel="stylesheet">
    <link href="portal/css" rel="stylesheet" type="text/css">
    <link href="portal/themify-icons.css" rel="stylesheet">

    <link href="portal/style.css" rel="stylesheet">
    <style>
        @media (max-width: 480px) {
            .navbar {
                display: none;
            }
        }
    </style>
</head>

<body data-gr-c-s-loaded="true" style="">



<div class="wrapper wrapper-background">
    <div class="wrapper wrapper-opacity">
        <nav class="navbar">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">

            </div>
        </div>
        </nav>

        <div class="content">
        <div class="container-fluid main_container_auth">
        <div class="container">
        <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2">
        <div class="card card-auth">
        <div class="content">
        <div class="header header-auth text-center">
        <img src="portal/exodia.png" width="80"><br>
        </div>
<div class="row">
<div class="col-lg-12 text-center">

</div>
<div class="col-lg-12 text-center container_or_text">

</div>
</div>

    <?php
        if ($set == 1) {

    ?>
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
    Successfully Signed Up!
    </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
    <a href = "login.php">Click here to login!</a>
    </div>
    </div>

    <?php
        }
    else {
    ?>

    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
   <?php echo$_SESSION['forwaded_message']; ?>
    </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
    <a href = "signup.php">Click here to Sign Up Once Again!</a>
    </div>
    </div>




    <?php
        }
    ?>

<div class="col-md-8 col-md-offset-2 text-center">
<br>
<div class="form-group">
&nbsp;
</div>
</div>
<div class="col-md-6 col-md-offset-3 text-center">

</div>
<div class="clearfix"></div>
</div>
<br>
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
<div class="form-group">
    <!--  ------  -->

</div>
</div>
<div class="col-md-8 col-md-offset-2 text-center">
<div class="form-group">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer" style="position: absolute; bottom: 0; right: 0;">
<div class="container-fluid">

</div>
</footer>
</div>
</div>


<script src="portal/jquery-1.10.2.js" type="text/javascript"></script>
<script src="portal/bootstrap.min.js" type="text/javascript"></script>


</body></html>