<?php

	//include 'connect.php';

	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['tag'])) {
		if (trim($_POST['username']) == 'neem ka patta kadwa hai' && trim($_POST['password']) == 'shivam chaudhary bhadwa hai' && $_POST['tag'] == 'din mein daaru raat ko bandi') {

			$link = mysql_connect("localhost", "developer", "Priyansh#MadeThis@26");
			mysql_select_db("sap_db", $link);

			$result = mysql_query("SELECT * FROM answers", $link);
			$num_rows_ans = mysql_num_rows($result);

			$result = mysql_query("SELECT * FROM contact_info", $link);
			$num_rows_con = mysql_num_rows($result);


			/*$conn = mysql_connect("localhost","root","");
			mysql_select_db("sap_db",$conn);

			$filename = "toy_csv.csv";
			$fp = fopen('php://output', 'w');

			$query = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='sap_db' AND TABLE_NAME='answers'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_row($result)) {
				$header[] = $row[0];
			}	

			header('Content-type: application/csv');
			header('Content-Disposition: attachment; filename='.$filename);
			fputcsv($fp, $header);

			$query = "SELECT * FROM answers";
			$result = mysql_query($query);
			while($row = mysql_fetch_row($result)) {
				fputcsv($fp, $row);
			}
			exit;*/
			?>

<!DOCTYPE html>
<html>
<head>
	<title>Publicity Acess</title>
	<link rel="stylesheet" type="text/css" href="daddy.css">
</head>
<body class = "">
	<div class = "theme-content theme-center">
		<div class="theme-padding-top theme-margin-top">
			<div class = "theme-card-4 theme-light-grey" style=" margin-top: 64px; margin-bottom: 64px">
				<div class="" style=" padding-top: 64px; padding-bottom: 64px">
					<h1>Download from here</h1>
				</div>
				<form method="POST" action="download.php">
				<div style=" padding-top: 64px; padding-bottom: 64px; max-width :600px; margin-bottom: 64px" class = "theme-grey theme-card-2 theme-content " >
					<div class = "theme-padding-s theme-row">
						<div class = "theme-third">
							<span> Table</span>
						</div>
						<div class = "theme-twothird">
							<select class="theme-select" name="option">
							  <option value="" disabled selected>Choose your Table</option>
							  <option value="answers">Answers</option>
							  <option value="contact_info">Contact_Info</option>
							</select>
						</div>
					</div>

					<div class = "theme-padding-s theme-row">
						<?php echo $num_rows_con; ?> rows in Contacts. <br>
						<?php echo $num_rows_ans; ?> rows in Answers. 
					</div>

					<div class = "theme-padding-s theme-row">
						<div class = "theme-third">
							<span> From</span>
						</div>
						<div class = "theme-twothird">
							<input class = "theme-input" type="text" name="from"/>
						</div>
					</div>

					<div class = "theme-padding-s theme-row">
						<div class = "theme-third">
							<span> To</span>
						</div>
						<div class = "theme-twothird">
							<input class = "theme-input" type="text" name="to"/>
						</div>
					</div>

					<div class = "theme-padding-s theme-row theme- center">
						<div class="theme-quarter">&nbsp;</div>
						<input style = "max-width: 400px" class = "theme-half theme-input theme-btn" type="submit" name="submit"/>
						
					</div>
				</div>
				</form>
				
				
				<form method="POST" action="c_download.php">
				<div style=" padding-top: 64px; padding-bottom: 64px; max-width :600px; margin-bottom: 64px" class = "theme-grey theme-card-2 theme-content " >
					<div class = "theme-padding-s theme-row">
						<div class = "theme-third">
							<span> Table</span>
						</div>
						<div class = "theme-twothird">
							<select class="theme-select" name="option">
							  <option value="combine"  selected>Combine</option>
							</select>
						</div>
					</div>

					<div class = "theme-padding-s theme-row">
						<?php echo $num_rows_con; ?> rows in Contacts. <br>
					</div>

					<div class = "theme-padding-s theme-row">
						<div class = "theme-third">
							<span> From</span>
						</div>
						<div class = "theme-twothird">
							<input class = "theme-input" type="text" name="from"/>
						</div>
					</div>

					<div class = "theme-padding-s theme-row">
						<div class = "theme-third">
							<span> To</span>
						</div>
						<div class = "theme-twothird">
							<input class = "theme-input" type="text" name="to"/>
						</div>
					</div>

					<div class = "theme-padding-s theme-row theme- center">
						<div class="theme-quarter">&nbsp;</div>
						<input style = "max-width: 400px" class = "theme-half theme-input theme-btn" type="submit" name="submit"/>
						
					</div>
				</div>
				</form>
			</div>
		</div>

	</div>	

</body>
</html>
<?php



		}
		else {
			
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>


  <style type="text/css">
    body {
  height: 100%;
  width: 100%;
  overflow: hidden;
  background-color: #101010;
}
.bg {
  position: absolute;
  top: 50%;
  left: 50%;
  height: 0;
  width: 100%;
  padding-bottom: 100%;
  background-repeat: no-repeat;
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/62921/spinny-batman.gif);
  background-size: cover;
  background-position: 50%;
  transform: translate(-50%, -50%);
  animation: spin 0.3s linear infinite;
  filter: blur(20px);
  border-radius: 100%;
}

.callout {
  position: absolute;
  color: white;
  font-family: monospace;
  font-size: 2em;
  bottom: 0.2em;
  text-align: center;
  width: 100%;
}
.finger {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 16em;
  animation: in-out 1.5s ease-in-out infinite;
  z-index: 1;
}
@keyframes spin {
  0% {
    transform: translate(-50%, -50%) rotate(0deg);
  }
  100% {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}
@keyframes in-out {
  0% {
    transform: translate(-50%, -50%) scale(0.4);
  }
  50% {
    transform: translate(-50%, -50%) scale(1.75);
  }
  100% {
    transform: translate(-50%, -50%) scale(0.4);
  }
}

  </style>

  <script type="text/javascript">
    document.body.addEventListener('click', function() {
  var batman = document.getElementById('batman');
  batman.play();
})
  </script>
</head>
<body>

  <div class="bg"></div>
<!-- <div class="finger">🖕</div> -->
<img class="finger" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62921/middle-finger-emoji.png" alt="" />
<h6 class="callout">Click for sound</h6>

<audio id="batman" autoplay>
  <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/62921/batman-transition-sound.mp3" type="audio/ogg">
</audio>

</body>
</html>


<?php
		}
	}
?>


