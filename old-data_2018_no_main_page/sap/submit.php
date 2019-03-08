<?php 
	require_once "vendor/autoload.php";
		
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	/////////////////////////////////////////////////////////////////////////////////////////

	// $conn=mysqli_connect('localhost','root','abcd','sap');
	$conn=mysqli_connect('localhost','developer','Priyansh#MadeThis@26','sap_db');
	//$conn=mysqli_connect('localhost','root','','sap_db');
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	$name=$_POST['name'];
	$college=$_POST['college'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$whatsapp=$_POST['whatsapp'];
	$referral=$_POST['referral'];
	$res=$_POST['ref'];

	$qq = "SELECT * from contact_info where email='$email'";
     if ($find_email=mysqli_query($conn,$qq)){
     	if(mysqli_num_rows($find_email)>=1){
     		echo "email already exists in db";
     	}
     	else{
     		
     		$url = 'www.exodia.in/sap/form/index.php?name='.urlencode($name).'&college='.urlencode($college).'&email='.urlencode($email);
			// $fixed_url = urlencode($url);
			$mail = new PHPMailer(); // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
			$mail->Host = "smtp.zoho.com";
			$mail->Port = 587; // or 587
			$mail->IsHTML(true);
			$mail->Username = "sap@exodia.in";
			$mail->Password = "priyanshsaxena";
			$mail->SetFrom("sap@exodia.in");
			$mail->AddReplyTo( 'sap@exodia.in', 'Publicity Team, Exodia IIT Mandi');
			$mail->Subject = "Student Ambassador Program, Exodia '18";
			$mail->Body = "Dear ".$name.",<br/><br/>Thank you for registering for Student Ambassador Program, Exodia'18 to become a part of the greatest fest of the Himalayas. The tech-cult fest of Exodia anticipates for your endeavours to make it a splendid success. A lot of surprises await you. Please fill up the questionnaire in the following link so that we may get to know you better : <a>".$url."</a>.<br/>Stay connected, as we move for the further proceedings. We will connect with you based on your responses and assist further. Let our ardency not fade away. Keep your enthusiasm boosted high, because this occasion is definitely going to be one of the most preeminent milestones of your life.
			<br/><br/>Publicity Team,<br/>Exodia'18<br/>Exodia Office, B7 Hostel, Kamand Campus<br/>Indian Institute of Technology, Mandi<br/>Himachal Pradesh 175005";
			$mail->AddAddress($email);

			 if(!$mail->Send()) {
			 	echo '<script type="text/javascript">alert("error sending mail");</script>';
			    echo "Mailer Error: " . $mail->ErrorInfo;
			 } else {
			    echo '<script type="text/javascript">alert("message sent!");</script>';
			 }
     	}
	}

	$result = $conn->prepare("INSERT INTO contact_info (`name`, `institute`, `email`, `phone`, `whatsapp`, `refer_by`, `referral`) VALUES(?, ?, ?, ?, ?, ?, ?)");
			$result->bind_param('sssssss', $name, $college, $email, $contact, $whatsapp, $referral, $res);

	//$sql = "INSERT INTO contact_info(name,institute,email,phone,whatsapp) VALUES('$name','$college','$email','$contact','$whatsapp')";
	if ($result->execute()) {
    	echo "New record created successfully";

		$sql2 = "INSERT INTO answers VALUES()";
		if (mysqli_query($conn, $sql2)){
			echo "New empty record there";			
		}

	} 
	else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
	
?>



