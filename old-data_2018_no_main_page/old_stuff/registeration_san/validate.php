<?php

	include 'resources/conn.php';
	include 'resources/saviour.php';

	session_start();

	if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

		$email = saviour($_POST['email']);
		$password = saviour($_POST['password']);

		$result = $db->prepare("SELECT `password` FROM login_data WHERE email = ?");
			$result->bind_param('s', $email);
			$result->execute();

			$result->bind_result($password_recieved);

			if ($result->fetch()) {
				if ($password_recieved == $password) {
					session_start();
					$_SESSION['logged_in_email'] = $email;
					//echo "chu";

					header('Location: select_event.php');
				}
				else {
					$_SESSION['forwaded_message'] =  "Password Incorrect!";
					header('Location: login.php');
				}
			}
			else {
				$_SESSION['forwaded_message'] =  "Account does not exist!";
				header('Location: login.php');
			}


	}
	else {
		$_SESSION['forwaded_message'] = "Data incomplete, email id or password not sent!";
		header('Location: login.php');
	}
?>
