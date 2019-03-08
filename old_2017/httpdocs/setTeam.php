<?php
session_start();
$servername = "localhost";
$username = "exodia";
$password = "Exodia@!2k17";
if(isset($_SESSION['user'])){
	$usern = $_SESSION['user'];

	try {
		$members = $_POST['members'];
		$teamx = $_POST['team'];
		$members =(ArraY) json_decode($members);
		$conn = new PDO("mysql:host=$servername;dbname=exodia", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$sth = $conn->query("SELECT count(*) FROM teams where team_name='$teamx'");
		$result = $sth->fetch(PDO::FETCH_BOTH);
		if($result['count(*)']!=0){
			echo 0;
		}else {
			$sql = "INSERT INTO events VALUES (:event, :username)";
			$st = $conn->prepare($sql);
			$st->bindParam(':event',$_POST['event']);
			$st->bindParam(':username', $usern);
			$st->execute();
			$query = "INSERT INTO teams values (:team,:event,:username,:hospi)";
			$stx = $conn->prepare($query);
			$stx->bindParam(':event',$_POST['event']);
			$stx->bindParam(':username',$usern);
			$stx->bindParam(':team', $_POST['team']);
			$stx->bindParam(':hospi', $_POST['hospi']);
			$stx->execute();
			$queryString = "INSERT INTO team_members values (:team,:username)";
			$sty = $conn->prepare($queryString);
			$sty->bindParam(':team',$_POST['team']);
			$sty->bindParam(':username',$usern);
			$sty->execute();
			foreach ($members as $value) {
				$sty = $conn->prepare($queryString);
				$sty->bindParam(':team',$_POST['team']);
				$sty->bindParam(':username',$value);
				$sty->execute();
			}
			echo 1;
		}
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
}else {
	echo "Somehting is wrong.Try again later.";
}
?>