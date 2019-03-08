<?php

	include 'resources/conn.php';
	include 'resources/saviour.php';

	if (isset($_SESSION['logged_in_email']) && !empty($_SESSION['logged_in_email'])) {
      ;
    }
    else {
      //header('Location: login.php');
    }



	session_start();

	$_SESSION['name_of_tableww'];
	if(isset($_SESSION['name_of_tableww']) && !empty($_SESSION['name_of_tableww']) ) {
		$table = saviour($_SESSION['name_of_tableww']);
		
		$result = $db->prepare("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = ?");
		$result->bind_param('s', $table);
		if($result->execute()) {

			$result->bind_result($table_recieved);

			if ($result->fetch()) {
				if ($table_recieved == $table) {
					
					if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['college']) && !empty($_POST['college']) && isset($_POST['phone']) && !empty($_POST['phone']) && isset($_POST['names'])  ) {

						$email = saviour($_POST['email']);
						$name = saviour($_POST['name']);
						$college = saviour($_POST['college']);
						$phone = intval(saviour($_POST['phone']));
						$names = saviour($_POST['names']);
						//$phones = saviour($_POST['phones']);

						//echo $email."|".$name."|".$college."|".$phone."|".$names."|";
						//echo 'aa';

						//$con = mysql_connect('localhost', 'id5023411_developer', 'Priyansh#MadeThis@26') or  
						$con = mysql_connect('localhost', 'developer', 'Priyansh#MadeThis@26') or  
						//$con = mysql_connect('localhost', 'root', '') or  
					    die("Could not connect: " . mysql_error());  
					//mysql_select_db('id5023411_sap_dp'); 
					    mysql_select_db('sap_db'); 
					    //mysql_select_db('events_data'); 
					$query = sprintf("INSERT INTO %s VALUES( '%s', '%s', '%s', %d, '%s')",
		            mysql_real_escape_string($table),
		            mysql_real_escape_string($email),
		            mysql_real_escape_string($name),
		            mysql_real_escape_string($college),
		            mysql_real_escape_string($phone),
		            mysql_real_escape_string($names)); 
					if($result = mysql_query($query)) {
						$setg = 1;

						$user = $_SESSION['logged_in_email'];

				          $result = $db->query("SELECT events FROM event_info WHERE email = '$user'");
				          if($result->num_rows){
				            while($row = $result->fetch_object()){
				              $events_arr = $row;
				            }

				            $result->free();
				          }

				        $str = $events_arr->events."*".$_SESSION['name_value'];

				        $query = sprintf("UPDATE `event_info` SET `events` = '%s' WHERE `event_info`.`email` = '%s'",
		            mysql_real_escape_string($str),
		            mysql_real_escape_string($user)); 
					$result = mysql_query($query);



						 
						$_SESSION['forwaded_message'] = "";
						$_SESSION['name_of_tableww'] = '';

					}
					else {
						$setg = 2;
					}

						//echo "INSERT INTO act VALUES('$email', '$name', '$college', $phone, '$names')";
						//$query    = "INSERT INTO act VALUES('$email', '$name', '$college', $phone, '$names')";
						//mysql_query($query) or trigger_error(mysql_error()." in ".$query);


						

						/*if ($result = $db->prepare("INSERT INTO act VALUES (?, ?, ?, ?, ?)")) {
						$result->bind_param('sssis', $email, $name, $college, $phone, $names);
							//echo 'alla';
						echo 'bb';
						$result->execute();
						}
						else {
							 $error = $db->errno . ' ' . $db->error;
							 echo $error;
						}

						echo 'a';*/

						
						//header('Location: select_event.php');
						$set = 189;
					}
					else {
						$_SESSION['forwaded_message'] = "Information Incomplete! Please try again!";
						//$_SESSION['name_of_tableww'] = '';
						header('Location: team.php');
						//echo $_POST['email']."|".$_POST['name']."|".$_POST['college']."|".$_POST['phone']."|".$_POST['names']."|".$_POST['phones'];
					}
					
				}
			}
			else {
				$_SESSION['forwaded_message'] = "Event Invalid! Please try again!";
				header('Location: select_event.php');
				//echo $_SESSION['forwaded_message'];
			}


			
		}
		
	}
	else {
		$_SESSION['forwaded_message'] = "Event Invalid! Please try again!";
		header('Location: select_event.php');
	}




	if ($set == 189) {
?>



<!DOCTYPE html>

<html lang="en" class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" href="./portal/exodia.png">
    <title>Exodia IIT Mandi</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">

    <link href="./portal/bootstrap.min.css" rel="stylesheet">

    <link href="./portal/animate.min.css" rel="stylesheet">

    <link href="./portal/paper-dashboard.css" rel="stylesheet">

    <link href="./portal/demo.css" rel="stylesheet">

    <link href="./portal/font-awesome.min.css" rel="stylesheet">
    <link href="./portal/css" rel="stylesheet" type="text/css">
    <link href="./portal/themify-icons.css" rel="stylesheet">

    <link href="./portal/style.css" rel="stylesheet">

</head>

<body data-gr-c-s-loaded="true" style="">



<div class="wrapper wrapper-background">
    <div class="wrapper wrapper-opacity">
        <nav class="navbar">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">

            </div>
        </div>
        </nav>

        <div class="content">
        <div class="container-fluid main_container_auth">
        <div class="container">
        <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2">
        <div class="card card-auth">
        <div class="content">
        <div class="header header-auth text-center">
        <img src="./portal/exodia.png" width="80"><br>
        </div>
<div class="row">
<div class="col-lg-12 text-center">

</div>
<div class="col-lg-12 text-center container_or_text">

</div>
</div>


<div class="row">
   
<?php
	if ($setg == 1) {
?>
<div class="col-md-8 col-md-offset-2 text-center">
<br>
<div class="form-group">
<b>Your team is successfully registered.</b>
</div>
<br>
<div class="form-group">
You can Pay now or pay when you reach IIT Mandi!
</div>
</div>


<div class="col-md-8 col-md-offset-2 text-center">
<br>
<div class="form-group">

</div>
</div>

<div class="col-md-8 col-md-offset-2">
<div class="form-group">
<div>
  <iframe src="https://www.thecollegefever.com/events/iframe/widget/exodia-NmRQQXuqmj"
          frameborder="0" allowfullscreen width="100%" height="510" overflow="hidden" ismobileview="1" seamless="seamless"></iframe>
</div>
</div>
</div>





<div class="col-md-6 col-md-offset-3 text-center">
<a href = "select_event.php" style ="text-decoration: none"><button class="btn btn-info btn-fill btn-wd btn_auth">
Pay Later!</button></a>
</div>
<div class="clearfix"></div>
</div>
</form><br>
<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
<div class="form-group">
<!--  ------  -->


<?php
	}
	else {
?>

<div class="col-md-8 col-md-offset-2 text-center">
<br>
<div class="form-group">
<b style="font-size: 25px">Aw! Sanp!
<br>
<br></b>
<b>Your team registeration was not successful.</b>
</div>
<br>
<div class="form-group">
You can try registering again or contact +91 7018343879 for help.	
</div>
</div>


<?php
	}
?>

</div>
</div>
<div class="col-md-8 col-md-offset-2 text-center">
<div class="form-group">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer" style="position: absolute; bottom: 0; right: 0;">
<div class="container-fluid">

</div>
</footer>
</div>
</div>


<script src="./portal/jquery-1.10.2.js" type="text/javascript"></script>
<script src="./portal/bootstrap.min.js" type="text/javascript"></script>
<script src="./portal/sweetalert2.min.js" type="text/javascript"></script>


</body></html>

<?php 
	}
	else {
		//session_destroy();
		//header('Location: login.php');
		echo $set;
	}
?>