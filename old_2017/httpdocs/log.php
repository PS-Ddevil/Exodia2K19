<?php
session_start();
$servername = "localhost";
$username = "exodia";
$password = "Exodia@!2k17";
if(isset($_POST['username']) && isset($_POST['pass'])){
			$usern= $_POST['username'];
			$pass = $_POST['pass'];
}
try {
	$conn = new PDO("mysql:host=$servername;dbname=exodia", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$sth = $conn->query("SELECT password,name,username FROM exodia where username='$usern'");
	$result = $sth->fetch(PDO::FETCH_ASSOC);
	if($result){
		if(password_verify($pass,$result['password'])){
			$_SESSION['user']=$usern;
			$_SESSION['name']=$result['name'];
			echo 1;
		}
		else echo 0;
	}else echo 3;

}
catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}
?>