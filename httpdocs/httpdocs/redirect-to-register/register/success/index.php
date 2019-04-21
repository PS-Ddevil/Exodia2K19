<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Exodia '19 Thanks</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="./exologo.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body class="generic">
<?php 
    //    $conn = new mysqli("localhost", "root", "", "event_participants");
    $conn = new mysqli("localhost", "event", "Hello@exodia", "event_participants");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $search = "select * from user_info where phone = '$phone'";
    $result = $conn->query($search);
    $show = 0;
    if ($result->num_rows>0) {
        $show = $email;
    } else {
        $sql = "insert into user_info(name, email, phone) values ('$name', '$email', '$phone')";
        $result = $conn->query($sql);
        $show = $name;
    }
    $conn->close();
?>
<div id="wrapper">
	<div align="center"><a href="https://www.exodia.in"><img src="./exologo.png" height="5%" width="5%"></a></div>
	<!-- Main -->
	<div id="main">
		<div class="container">
			<div class="head">
				<h2>Thank You <?php echo $show;?></h2>
				<h3>...We will get back to you soon when events are available.</h3>
			</div>
			<div class="body">
				<a href="#" class="vid"><img src="./thankyou.jpg" width="640" height="360" alt="" /></a>
			</div>
		</div>
	</div>
	<!-- End Main -->
	<div class="push"></div>
</div>	
<!-- Footer -->
<div id="footer">
	<div class="shell">
		<p>Copyright &copy;</p>
		<p><a href="https://www.exodia.in">Exodia '19</a></p>
	</div>
</div>
<!-- End Footer -->
</body>
</html>