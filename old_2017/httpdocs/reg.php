<?php
session_start();
$servername = "localhost";
$username = "exodia";
$password = "Exodia@!2k17";
if(isset($_POST['username']) && isset($_POST['pass'])){
	$usern = $_POST['username'];
	try {
		$conn = new PDO("mysql:host=$servername;dbname=exodia", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$sth = $conn->query("SELECT count(*) FROM exodia where username='$usern'");
		$result = $sth->fetch(PDO::FETCH_BOTH);
		if($result['count(*)']!=0){
			echo $usern;
		}else {	

			$sql = "INSERT INTO exodia VALUES (:username, :pass, :coll_name,:name,:refer,:phoneNo)";
			$st = $conn->prepare($sql);
			$st->bindParam(':username',$usern);
			$st->bindParam(':pass', $pass);
			$st->bindParam(':coll_name',$coll_name);
			$st->bindParam(':name',$name);
			$st->bindParam(':refer',$refer);
			$st->bindParam(':phoneNo',$_POST['phoneno']);
			$usern = $_POST['username'];
			$name = $_POST['name'];
			$refer = $_POST['refer'];
			$_SESSION['user']=$usern;
			$_SESSION['name']=$name;
			$pass = password_hash( $_POST['pass'], PASSWORD_DEFAULT );
			$coll_name = $_POST['coll_name'];
			$st->execute();
			echo 1;
		}
		
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
}
?>