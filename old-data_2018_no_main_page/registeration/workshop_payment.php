<?php

	include 'resources/conn.php';
	include 'resources/saviour.php';

	session_start();

	//$_SESSION['name_of_tableww'];
	if(isset($_SESSION['logged_in_email']) && !empty($_SESSION['logged_in_email']) ) {

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
    <link rel="icon" href="portal/exodia.png">
    <title>Exodia IIT Mandi</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">

    <link href="portal/bootstrap.min.css" rel="stylesheet">

    <link href="portal/animate.min.css" rel="stylesheet">

    <link href="portal/paper-dashboard.css" rel="stylesheet">

    <link href="portal/demo.css" rel="stylesheet">

    <link href="portal/font-awesome.min.css" rel="stylesheet">
    <link href="portal/css" rel="stylesheet" type="text/css">
    <link href="portal/themify-icons.css" rel="stylesheet">

    <link href="portal/style.css" rel="stylesheet">
    <style>
        @media (max-width: 480px) {
            .navbar {
                display: none;
            }
        }
    </style>
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
        <img src="portal/exodia.png" width="80"><br>
        </div>
<div class="row">
<div class="col-lg-12 text-center">

</div>
<div class="col-lg-12 text-center container_or_text">

</div>
</div>

	


    <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
    <b style = "font-size: 30px"> You can pay now!</b>
    </div>
    </div>

    <div class="col-md-8 col-md-offset-2">
<div class="form-group">
<div>
  <iframe src="https://www.thecollegefever.com/events/iframe/widget/exodia-outreach-workshops"
          frameborder="0" allowfullscreen width="100%" height="510" overflow="hidden" ismobileview="1" seamless="seamless"></iframe>
</div>
</div>
</div>


    <div class="col-md-8 col-md-offset-2">
    <div class="form-group">
    <a href = "select_event.php">Click here to go to Events</a>
    </div>
    </div>

    


<div class="col-md-8 col-md-offset-2 text-center">
<br>
<div class="form-group">
&nbsp;
</div>
</div>
<div class="col-md-6 col-md-offset-3 text-center">

</div>
<div class="clearfix"></div>
</div>
<br>
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


<script src="portal/jquery-1.10.2.js" type="text/javascript"></script>
<script src="portal/bootstrap.min.js" type="text/javascript"></script>


</body></html>