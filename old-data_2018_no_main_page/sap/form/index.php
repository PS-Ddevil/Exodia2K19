<?php
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$conn=mysqli_connect('localhost','developer','Priyansh#MadeThis@26','sap_db');
	
	 // $conn=mysqli_connect('localhost','root','abcd','sap');
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	if ( (isset($_GET['name'])) && (!empty($_GET['name'])) && (isset($_GET['college'])) && (!empty($_GET['college'])) && (isset($_GET['email'])) && (!empty($_GET['email'])) ){
	    // $name= $_REQUEST['name'];
	    $name=$_GET["name"];
		$institute = $_GET["college"];
		$email = $_GET["email"];

		$qq = "SELECT * from contact_info where name='$name' and institute='$institute' and email='$email'";
	     if ($findid=mysqli_query($conn,$qq)){
	     	if(mysqli_num_rows($findid)>=1){
	     		$row=mysqli_fetch_row($findid);
		    	$req_id = $row[0];
		    	$phone = $row[4];
		    	$whatsapp = $row[5];
			  	mysqli_free_result($findid);
	     	}
	     	else{
	     		header( "Location: ../" ); die;
	     	}
		}
	}
	else{
		header( "Location: ../" ); die;	
	}
?>


<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112495335-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-112495335-1');
		</script>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>SAP Form | Exodia IIT Mandi</title>
		<meta name="description" content="Exodia IIT Mandi" />
		<meta name="keywords" content="exodia, iit mandi, exodia iit mandi" />
		<meta name="author" content="Hritik Gupta" />
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="shortcut icon" href="ExodiaLogo.png">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<script src="js/modernizr.custom.js"></script>
		<script src="js/granim.min.js"></script>
		<script src="js/sweetalert.js"></script>
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<style type="text/css">
		.FontOne{
			font-family: 'Raleway', sans-serif;
		}
	</style>
		<div id="canvas-wrapper" class="container">
		<canvas id="granim-canvas"></canvas>
			<header class="clearfix">
				<span>Exodia'18 IIT Mandi</span>
				<h1 class="FontOne">Student Ambassador Program Form</h1>
			</header>	
			<div class="main">
				<form class="cbp-mc-form" id="my-form" action="" method="post">
					<div class="cbp-mc-column">
						<label for="name">Name</label>
	  					<input type="text" id="name" name="name" value="<?php echo $name;?>" readonly>
	  					<label for="college">College</label>
	  					<input type="text" id="college" name="college" value="<?php echo $institute;?>" readonly>
	  					<label for="email">Email Address</label>
	  					<input required type="email" id="email" name="email" value="<?php echo $email;?>" readonly>
	  					<label for="contact">Contact Number</label>
	  					<input required type="text" id="contact" name="contact" value="<?php echo $phone;?>" readonly>
	  					<label for="contact">WhatsApp Contact</label>
	  					<input required type="text" id="whatsapp" name="whatsapp" value="<?php echo $whatsapp;?>" readonly>
	  					<label for="bio">We would love to know something about you. Tell us a little about yourself :</label>
	  					<textarea required id="bio" name="bio"></textarea>
	  				</div>
	  				<div class="cbp-mc-column">
						<label for="firsthear">How did you first hear about EXODIA?</label>
	  					<textarea required id="firsthear" name="firsthear"></textarea>
	  					<label for="affiliations">How do you think being an ambassador for EXODIA can help you develop as an individual?</label>
	  					<textarea required id="help" name="help"></textarea>
	  					<label for="outofbox">Any out of the box idea you’d like to pitch for the fest :</label>
	  					<textarea required id="outofbox" name="outofbox"></textarea>
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="subtit" style="margin: 0; padding: 0"><strong>If you were with us in Exodia’17</strong></label>
		  					<label for="subtit">A part of the fest that we managed to pull off quite well:</label>
	  						<textarea id="pullwell" name="pullwell"></textarea>
	  						<label for="subtit">Somewhere we can improve and how can we do it:</label>
	  						<textarea id="improve" name="improve"></textarea>
	  					<!--
						-->
	  					<label for="comments">Any suggestions are always welcomed</label>
	  					<textarea id="suggestions" name="suggestions"></textarea>	
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" name="submit" value="Let's do it!" /></div>
				</form>
			</div>
		</div>
		<footer id="fh5co-footer">
				<div class="container">
					<ul class="fh5co-social-icons">
						<li><a href="https://www.facebook.com/Exodia.IITMandi/" target="_blank"><i class="ti-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/exodia.in/?hl=en" target="_blank"><i class="ti-instagram"></i></a></li>
						<li><a href="https://twitter.com/exodia_iitmandi" target="_blank"><i class="ti-twitter-alt"></i></a></li>
						<li><a href="https://www.youtube.com/user/exodiaiitmandi" target="_blank"><i class="ti-youtube"></i></a></li>
					</ul>
					<p class="text-muted fh5co-no-margin-bottom text-center"><small>&copy; 2018 <a href="#">Exodia</a>. All rights reserved.</p>

				</div>
		</footer>

		<?php
			if(isset($_POST['submit'])){

				$name=trim($_POST['name']);
				$college=trim($_POST['college']);
				$email=trim($_POST['email']);
				$contact=trim($_POST['contact']);
				$whatsapp=trim($_POST['whatsapp']);
				$bio=trim($_POST['bio']);
				$firsthear=trim($_POST['firsthear']);
				$help=trim($_POST['help']);
				$outofbox=trim($_POST['outofbox']);
				$pullwell=trim($_POST['pullwell']);
				$improve=trim($_POST['improve']);
				$suggestions=trim($_POST['suggestions']);

				$qq = "SELECT * from contact_info where name='$name' and institute='$college' and email='$email'";
			     if ($findid=mysqli_query($conn,$qq)){
					  $row=mysqli_fetch_row($findid);
			    	  $req_id = $row[0];
			  		mysqli_free_result($findid);
				}


				$result = $conn->prepare("INSERT INTO answers (`email`, `personal`, `first_hear`, `develop_individual`, `new_idea`, `well_pulled`, `improvement`, `suggestions`) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
			$result->bind_param('ssssssss', $email, $bio, $firsthear, $help, $outofbox, $pullwell, $improve, $suggestions);


				/*$sql = "INSERT INTO answers values ( personal='$bio', first_hear='$firsthear', develop_individual='$help', new_idea='$outofbox', well_pulled='$pullwell', improvement='$improve', suggestions='$suggestions' where id=$req_id");*/


				if ($result->execute()) {
					echo '<script src="js/sweetalert.js"></script>';
					echo '<script type="text/javascript">';
					  echo 'setTimeout(function () { swal("Super!","Thank you for your entry. We will contact you shortly once shortlisted.","success");';
					  echo '}, 1000);</script>';
				} 
				else {
			    	echo "<script>swal(
					  'Aww, snap!',
					  'Something went wrong! Try again.',
					  'error'
					);</script>";
				}
				mysqli_close($conn);
			} 
		?>

		<script>
			var granimInstance = new Granim({
			   element: '#granim-canvas',
			   name: 'granim',
			   opacity: [1, 1],
			   states : {
			       "default-state": {
			           gradients: [
			               ['#834D9B', '#D04ED6'],
			               ['#1CD8D2', '#93EDC7']
			           ]
			       }
			   }
			});
		</script>
		
	</body>
</html>
