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
				header('Location: signup.php');
				//echo "a";
				
			}
		}
		else {
			
			$con = mysql_connect("localhost", "developer", "Priyansh#MadeThis@26") or  
					    die("Could not connect: " . mysql_error());  
					mysql_select_db("sap_db"); 
					$query = sprintf("INSERT INTO login_data VALUES( '%s', '%s', '%s', '%s', %d)",
		            mysql_real_escape_string($email),
					mysql_real_escape_string($password),
		            mysql_real_escape_string($name),
		            mysql_real_escape_string($college),
		            mysql_real_escape_string($number)); 
					//; 'localhost','developer','Priyansh#MadeThis@26','sap_db'
			//"localhost", "gaganDTtrm", "gagan2805%CP"
			
			
			//$result = $db->prepare("INSERT INTO login_data VALUES (?, ?, ?, ?, ?)");
			//$result->bind_param('ssssi', $email, $password, $name, $college, $number);
			//echo $name;
			
			if ($result = mysql_query($query)) {
				session_start();
				$_SESSION['forwaded_message'] = "Account created, Please login to continue!";
				header('Location: login.php');
				//echo "b";
				//echo '3';
			}
			else {
				$_SESSION['forwaded_message'] = "Couldn't create account! Please try again!";
				
				header('Location: signup.php');
				//die('execute() failed: ' . htmlspecialchars($result->error));
				//echo('k');
				//echo '4';
			}

			
		}


	}
	else {
		//echo "data incomplete, email id or password not sent!";
		$_SESSION['forwaded_message'] = "Couldn't create account with incomplete data. Please try again!";
		header('Location: signup.php');
		//echo '5';
	}

?>