<?php

    include 'resources/conn.php';
    session_start();

    if(isset($_SESSION['forwaded_message']) && !empty($_SESSION['forwaded_message'])) {
        echo "<script> alert('".$_SESSION['forwaded_message']."');</script>";
        $_SESSION['forwaded_message'] = '';
    }

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

        .label {
            color: white;
            padding: 8px auto;
            margin: 8px 8px 8px 8px ;
            clear: right left top bottom;
        }

        .success {background-color: #4CAF50;} /* Green */
        .info {background-color: #2196F3;} /* Blue */
        .warning {background-color: #ff9800;} /* Orange */
        .danger {background-color: #f44336;} /* Red */ 
        .other {background-color: #e7e7e7; color: black;} /* Gray */
    </style>

    <script type="text/javascript">


        function myFunction() {
            var x = document.getElementById("mySelect").value;
            document.getElementById('tech').style.display = 'none';
            document.getElementById('cult').style.display = 'none';
            document.getElementById('onli').style.display = 'none';

            document.getElementById(x).style.display = 'block';
        }

        function myEvents() {
            var x = document.getElementById("myEven").value;
            document.getElementById('mtech').style.display = 'none';
            document.getElementById('mcult').style.display = 'none';
            document.getElementById('monli').style.display = 'none';

            document.getElementById(x).style.display = 'block';
        }

        function techfn() {
           y =  $('#techsel').find(":selected").val();

           if(window.XMLHttpRequest)
                xmlhttp = new XMLHttpRequest();
            else
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            //alert(in5);
            xmlhttp.onreadystatechange = function(){
                if((this.status == 200) && (this.readyState == 4)){
                    if(this.responseText == 1){
                        window.location = "./team.php";

                    }
                    else
                        alert(this.responseText);
                }

            };
            //alert('yha');
            xmlhttp.open("POST", "resources/set_table.php", true);
            xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xmlhttp.send("tname="+y);

        }

        function cultfn() {
           y =  $('#cultsel').find(":selected").val();
           
           if(window.XMLHttpRequest)
                xmlhttp = new XMLHttpRequest();
            else
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            //alert(in5);
            xmlhttp.onreadystatechange = function(){
                if((this.status == 200) && (this.readyState == 4)){
                    if(this.responseText == 1){
                        window.location = "./team.php";

                    }
                    else
                        alert(this.responseText);
                }

            };
            //alert('yha');
            xmlhttp.open("POST", "resources/set_table.php", true);
            xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xmlhttp.send("tname="+y);
        }

        function onlifn() {
           y =  $('#onlisel').find(":selected").val();
           
           if(window.XMLHttpRequest)
                xmlhttp = new XMLHttpRequest();
            else
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            //alert(in5);
            xmlhttp.onreadystatechange = function(){
                if((this.status == 200) && (this.readyState == 4)){
                    if(this.responseText == 1){
                        window.location = "./team.php";

                    }
                    else
                        alert(this.responseText);
                }

            };
            //alert('yha');
            xmlhttp.open("POST", "resources/set_table.php", true);
            xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xmlhttp.send("tname="+y);
        }


    </script>


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
<f>

<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="form-group">
<select onchange="myFunction()"  id="mySelect"  class="form-control border-input" >
  <option value="">Select Your Category</option>
  <option value="tech">Technical</option>
  <option value="cult">Cultural</option>
  <option value="onli">Online Events</option>
</select>
</div>
</div>

<div class="col-md-8 col-md-offset-2" id = 'tech' style="display: none">
<div class="form-group">
<select onchange = ""   class="form-control border-input" name="type" id = "techsel">
  <option value="">Select Your Event</option>
  <option value="con">Conundrum</option>
  <option value="dem">Dementia</option>
  <option value="emp">Eniginners Emporium</option>
  <option value="gal">Gallileon</option>
  <option value="hur">Hurdle Rush</option>
  <option value="ipl">IPL Auction</option>
  <option value="jun">Junkyard Wars</option>
  <option value="lin">Line Follower</option>
  <option value="nit">RC Nitro Car</option> 
  <option value="rob">Robo Wars</option>
  <option value="via">Viaduct</option>
  <option value="zen">Zenith Horizon</option>
</select>
</div>

<div class="col-md-6 col-md-offset-3 text-center">
<button onclick="techfn()"  class="btn btn-info btn-fill btn-wd btn_auth">
Submit
</button>
</div>

</div>

<div class="col-md-8 col-md-offset-2" id = 'cult' style="display: none">
<div class="form-group">
<select id = "cultsel"  class="form-control border-input" name="type" >
  <option value="">Select Your Event</option>
  <option value="art">Art of Design</option>
  <option value="ban">Band Slam</option>
  <option value="can">Canvas</option>
  <option value="cou">Couture</option>
  <option value="ido">Exodia Idol</option>
  <option value="fil">Fill with Feel</option>
  <option value="fac">Game of Streets(Dance Faceoff)</option>
  <option value="gro">Groove Fanatics</option>
  <option value="lan">Landscape Photography</option>
  <option value="por">Portrait Photography</option>
  <option value="rea">React and Act</option>
  <option value="str">Street Soul</option>
  <option value="syn">Synchronians</option>
</select>
</div>

<div class="col-md-6 col-md-offset-3 text-center">
<button onclick="cultfn()"  class="btn btn-info btn-fill btn-wd btn_auth">
Submit
</button>
</div>

</div>

<div class="col-md-8 col-md-offset-2" id = 'onli' style="display: none">
<div class="form-group">
<select id = "onlisel"  class="form-control border-input" name="type" >
  <option value="">Select Your Event</option>
  <option value="ima">Imagination</option>
  <option value="mov">Short Movie Making</option>
  <option value="doo">Doodle</option>
</select>
</div>

<div class="col-md-6 col-md-offset-3 text-center">
<button onclick="onlifn()"  class="btn btn-info btn-fill btn-wd btn_auth">
Submit
</button>
</div>

</div>

<div class="col-md-8 col-md-offset-2 text-center">
<br>

</div>

<div class="clearfix"></div>
</div>
</f><br>

<hr>



<div class="row">
<div class="col-md-8 col-md-offset-2 text-center" >
<div class="form-group">
    <div class="col-md-8 col-md-offset-2" >
      <div class="form-group">
        <h5> Your Registered Events </h5>
      <select onchange="myEvents()"  id="myEven"  class="form-control border-input" >
        <option value="">Select Your Category</option>
        <option value="mtech">Technical</option>
        <option value="mcult">Cultural</option>
        <option value="monli">Online Events</option>
      </select>
      </div>

      <?php
          //session_start();

          //echo $_SESSION['logged_in_email'];

          $user = $_SESSION['logged_in_email'];

          $result = $db->query("SELECT events FROM event_info WHERE email = '$user'");
          if($result->num_rows){
            while($row = $result->fetch_object()){
              $events_arr = $row;
            }

            $result->free();
          }

          //echo $events_arr->events;

          $str_arr = explode("*", $events_arr->events);
          $cult = array();
          $tech = array();
          $onli = array();

          foreach ($str_arr as $s) {
            if ($s == "Conundrum" || $s =="Dementia" ||  $s =="Eniginners Emporium" ||  $s =="Gallileon" ||  $s =="Hurdle Rush" ||  $s =="IPL Auction" ||  $s =="Junkyard Wars" ||  $s =="Line Follower" ||  $s =="RC Nitro Car" ||  $s =="Robo Wars" ||   $s =="Viaduct" ||   $s =="Zenith Horizon" ) {
                $tech[] = $s;
            }

            else if ($s == "Art of Design" || $s =="Band Slam" ||  $s =="Canvas" ||  $s =="Couture" ||  $s =="Exodia Idol" ||  $s =="Fill with Feel" ||  $s =="Game of Streets(Dance Faceoff)" ||  $s =="Groove Fanatics" ||  $s =="Landscape Photography" ||  $s =="Portrait Photography" ||   $s =="React and Act" ||   $s =="Street Soul" || $s == "Synchronians") {
                $cult[] = $s;
            }

            else if ( $s == "Imagination" ||  $s == "Short Movie Making" ||  $s == "Doodle" ) {
                $onli[] = $s;
            }
          }

          



      ?>

      <div class="col-md-8 col-md-offset-2" id = 'mtech' style="display: none">
        <div class="form-group">

            <?php
                foreach ($tech as $t) {
            ?>
          <span class="label success"><?php echo $t; ?></span>

            <?php
                }
            ?>
      
        </div>
      </div>

      <div class="col-md-8 col-md-offset-2" id = 'mcult' style="display: none">
        <div class="form-group">
          <?php
                foreach ($cult as $t) {
            ?>
          <span class="label info"><?php echo $t; ?></span>

            <?php
                }
            ?>
        </div>
      </div>

      <div class="col-md-8 col-md-offset-2" id = 'monli' style="display: none">
        <div class="form-group">
          <?php
                foreach ($onli as $t) {
            ?>
          <span class="label warning"><?php echo $t; ?></span>

            <?php
                }
            ?>
        </div>
      </div>



      

    </div>


    <div class="clearfix"></div>
</div>
</f><br>

</div>
</div>
			
<hr>

<!---------------  -->

<div class="row">
<div class="col-md-8 col-md-offset-2 text-center" >
<div class="form-group">
    <div class="col-md-8 col-md-offset-2" >
      <div class="form-group">
        <h5> Pay Hospitality Charges</h5>
      </div>
    </div>

    <div class="col-md-6 col-md-offset-3 text-center">
    <a href = "hospitality.php"><button class="btn btn-info btn-fill btn-wd btn_auth">
    Pay Now
    </button></a>
		<br>&nbsp;<br>&nbsp;
</div>
</div>
</div>
</div>
			
			<hr>

<!---------------  -->

<div class="row">
<div class="col-md-8 col-md-offset-2 text-center" >
<div class="form-group">
    <div class="col-md-8 col-md-offset-2" >
      <div class="form-group">
        <h5> Pay for registered events.</h5>
		  <p>Pay only for events whose payment you haven't done earlier.</p>
      </div>
    </div>

    <div class="col-md-6 col-md-offset-3 text-center">
    <a href = "payment.php"><button class="btn btn-info btn-fill btn-wd btn_auth">
    Pay Now
    </button></a>
		<br>&nbsp;<br>&nbsp;
</div>
</div>
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