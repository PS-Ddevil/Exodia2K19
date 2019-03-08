<?php

    include 'resources/conn.php';
    //$dbt = new mysqli('localhost', 'root', '', 'sap_db');
	session_start();
	//echo $_SESSION['forwaded_message'];

	//echo $_POST['type'];
	//echo $_SESSION['name_of_tableww'];

    if (isset($_SESSION['logged_in_email']) && !empty($_SESSION['logged_in_email'])) {
      ;
    }
    else {
      header('Location: login.php');
    }

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
</div>                                      <!-- ------------- -->


<div class="row">
	
	

<?php
    $posts = array();
    $s_email = $_SESSION['logged_in_email'];
    //echo "SELECT * FROM workshops_data WHERE email = '$s_email'";
    
    $result = $db->query("SELECT * FROM workshop_data WHERE email = '$s_email'");
    if($result->num_rows){
        while($row = $result->fetch_object()){
            $posts[] = $row;
        }

        $result->free();
        $alma_setter = 1;
    }
    else
        $alma_setter = 2;

    
?>

<?php 
   if ($alma_setter == 1) {

?>

<div class="col-md-8 col-md-offset-2 text-center">
<div class="form-group">
<p align="left" style="font-size: 15px" >Hi <b><span style = "font-size: 30px"><?php echo $posts[0]->name; ?></span></b>!</p>
</div>
</div>
<div class="clearfix"></div>



<div class="col-md-8 col-md-offset-2 ">
<div class="form-group">
<div>You have already registered for the following workshops :<br><br>
<?php 
    foreach ($posts as $p) {
        # code...
    
?>
 <b style="font-size: 18px"><?php echo $p->event;?></b><br>

 <?php

    }
?>
    <br><br> You can complete its payment or register for another workshop!</div>
</div>
</div>
<div class="clearfix"></div>


<div class="col-md-6 col-md-offset-3 text-center">
<a href = "workshop_payment.php"><button  class="btn btn-info btn-fill btn-wd btn_auth">
Proceed to payment!</button></a>
</div>
<div class="clearfix"></div>



<?php

} 

    
    
?>

<div class="clearfix"></div><br><br>

<form class="auth_form" method="POST" action="workshop_register.php">

<div class="col-md-8 col-md-offset-2">
<div class="form-group">
<div>
  Fill in the details: 
</div>
</div>
</div>


    
<div class="col-md-8 col-md-offset-2">
<div class="form-group">
<input id="email" placeholder="E-mail of Person Registering" type="email" class="form-control border-input" name="email" value="<?php echo $_SESSION['logged_in_email']; ?>" required="" autofocus="" readonly>
</div>
</div>

<div class="col-md-8 col-md-offset-2">
<div class="form-group">
<input id="name" placeholder="Name of Person Registering" type="text" class="form-control border-input" name="name"  required="" autofocus="">
</div>
</div>

<div class="col-md-8 col-md-offset-2">
<div class="form-group">
<input id="college" placeholder="College of Person Registering" type="text" class="form-control border-input" name="college"  required="" autofocus="">
</div>
</div>

<div class="col-md-8 col-md-offset-2">
<div class="form-group">
    <select name = "event"  class="form-control border-input" required>
        <option value="">Select Your Category</option>
        <option value="Artificial Intelligence">Artificial Intelligence</option>
        <option value="Machine Learning">Machine Learning</option>
		<option value="ML + AI Combo">ML + AI Combo</option>
		<option value="Protrex Robotronics">Protrex Robotronics</option>
		<option value="Appdev 1.0">Appdev 1.0</option>
		<option value="Internet of Things">Internet of Things</option>
      </select>
</div>
</div>



<div class="col-md-8 col-md-offset-2 text-center">
<br>
<div class="form-group">

</div>
</div>





<div class="col-md-8 col-md-offset-2">
<div class="form-group">
<p align="center">Click "Register" after to register with us. Final confirmitation would be made when you complete the payment on the next page!</p>
</div>
</div>

<div class="col-md-6 col-md-offset-3 text-center">
<button type="submit" class="btn btn-info btn-fill btn-wd btn_auth" >
Register!</button>
</div>
<div class="clearfix"></div>
</div>
</form><br>


<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
<div class="form-group">
<!--  ------  -->

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
