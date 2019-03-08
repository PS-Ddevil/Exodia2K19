<?php
session_start();
$servername = "localhost";
$username = "exodia";
$password = "Exodia@!2k17";
if(isset($_POST['uname'])){

	try {
		$uname = $_POST['uname'];
		$timestamp = $_POST['timestamp'];
		$events=$_POST['events'];
		$events=json_decode($events);
		$conn = new PDO("mysql:host=$servername;dbname=exodia", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		
			$sql = "INSERT INTO payments VALUES (:uname, :email,:phone, :event, :timestamp)";
			$sty = $conn->prepare($sql);
			$sty->bindParam(':uname',$uname);
			$sty->bindParam(':email',$_POST['email']);
			$sty->bindParam(':phone',$_POST['phone']);
			$sty->bindParam(':timestamp',$_POST['timestamp']);
			foreach ($event as $value) {
				$sty = $conn->prepare($sql);
				$sty->bindParam(':event',$event);
				$sty->execute();
			echo "Successfully Registered for exodia. Produce the ticket when you come for the event.";
		}
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
}else {
	header("location:/");
}
?>