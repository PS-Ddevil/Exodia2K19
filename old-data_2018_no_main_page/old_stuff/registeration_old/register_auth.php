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
				header('Location: register.php');
				//echo "a";
			}
		}
		else {
			$result = $db->prepare("INSERT INTO login_data VALUES (?, ?, ?, ?, ?)");
			$result->bind_param('ssssi', $email, $password, $name, $college, $number);
			echo $name;
			
			if ($result->execute()) {
				session_start();
				$_SESSION['forwaded_message'] = "Account created, Please login to continue!";
				header('Location: login.php');
				//echo "b";
			}
			else {
				$_SESSION['forwaded_message'] = "Couldn't create account! Please try again!";
				
				header('Location: register.php');
				//die('execute() failed: ' . htmlspecialchars($result->error));
				//echo('k');
			}

			
		}


	}
	else {
		//echo "data incomplete, email id or password not sent!";
		$_SESSION['forwaded_message'] = "Couldn't create account with incomplete data. Please try again!";
		header('Location: register.php');
	}

?>