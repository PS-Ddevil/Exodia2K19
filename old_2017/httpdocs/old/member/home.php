<?php

session_start();

if(isset($_SESSION['exodia_login'])){
    if($_SESSION['exodia_login']!=1){
        header("location: login.php");
    }
    else{
        $id = $_SESSION['exodia_id'];
        $fn = $_SESSION['exodia_fn'];
    }
}
else{
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exodia '16 - Members</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <div id ="helpbox" class="" style="width: 15%;position: fixed;right: 0;bottom: 0;z-index: 5;background-color: white;border-top-left-radius: 10px">
        <div id="helpbox_head" style="width: 100%;padding: 10px;background-color: #2C3E50;color: white;font-size: 20px;cursor: pointer;border-top-left-radius: 10px">
            Need a help?
        </div>
        <div id="helpbox_body" style="width: 100%;padding: 10px;font-size: 20px">
            <form method="POST" action="a.php?r=helpbox">
                <br/>
                <textarea name="input" cols="40" class="form-control" required></textarea><br/>
                <input class="btn bg-primary" type="submit" name="submit" value="Submit"/>
            </form>
        </div>
    </div>
    <div id ="helpbox" class="" style="width: 15%;position: fixed;left: 0;bottom: 0;z-index: 5;background-color: white">
        <div id="helpbox_head" style="width: 100%;padding: 10px;background-color: #2C3E50;color: white;font-size: 20px;cursor: pointer;border-top-right-radius: 10px">
            <a style="color:white" href="http://exodia.in/member/send.php?eid=hospitality&tid=none">Pay Now for Hospitality</a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Exodia '16</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="help.php" target="_blank">Help</a>
                    </li>
                    <li class="page-scroll">
                        <a href="hospitality.php">Register for Hospitality</a>
                    </li>
                    <li class="page-scroll">
                        <a href="a.php?r=logout">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
    <?php
    include_once 'c.php';
    echo "<b>Full Name</b>: $fn | <b>Exodia ID</b>: $id";
    if(mysql_num_rows(mysql_query("SELECT * FROM campus_ambassador WHERE id = '$id'")) == 1){
        $amb = 1;
        echo " | <b>Referral Code</b>: EXO".$id." | <a href='#ca_list' style='color: white'>View registrations under your Reference</a>";
    }
    ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
    <h3>List of Events:</h3>
    <a href="#myevents">My Events</a> |<a href="#technical">Technical Events</a> | <a href="#cultural">Cultural Events</a> | <a href="#literary">Literary Events</a> | <a href="#other">Gaming Events</a> | <a href="#workshops">Technical Workshops</a>
    <?php
    
    $q = mysql_query("SELECT * FROM events WHERE type='Technical'");
    if(mysql_num_rows($q)>0){
        echo "<h4 id='technical'>Technical Events:</h4><table class='table'><tr><td style='font-weight:bold'>Event Name</td><td style='font-weight:bold'>Max no. of team members</td><td style='font-weight:bold'>Fee[per team]</td><td></td></tr>";
    while($f = mysql_fetch_array($q)){
        $eid = $f['id'];
        echo"<tr><td><a target='_blank' href='".$f['link']."'>".$f['name']."</a></td><td>".$f['count']."</td><td>Rs. ".$f['amount']."</td><td><a href='event_reg.php?eid=$eid'>Register</a></td></tr>";
    }
    echo "</table><hr/>";
    }
    
    
    $q = mysql_query("SELECT * FROM events WHERE type='Cultural'");
    if(mysql_num_rows($q)>0){
        echo "<h4 id='cultural'>Cultural Events:</h4><table class='table'><tr><td style='font-weight:bold'>Event Name</td><td style='font-weight:bold'>Max no. of team members</td><td style='font-weight:bold'>Fee[per team]</td><td></td></tr>";
    while($f = mysql_fetch_array($q)){
        $eid = $f['id'];
        echo"<tr><td><a target='_blank' href='".$f['link']."'>".$f['name']."</a></td><td>".$f['count']."</td><td>Rs. ".$f['amount']."</td><td><a href='event_reg.php?eid=$eid'>Register</a></td></tr>";
    }
    echo "</table><hr/>";
    }
    
    $q = mysql_query("SELECT * FROM events WHERE type='Literary'");
    if(mysql_num_rows($q)>0){
        echo "<h4 id='literary'>Literary Events:</h4><table class='table'><tr><td style='font-weight:bold'>Event Name</td><td style='font-weight:bold'>Max no. of team members</td><td style='font-weight:bold'>Fee[per team]</td><td></td></tr>";
    while($f = mysql_fetch_array($q)){
        $eid = $f['id'];
        echo"<tr><td><a target='_blank' href='".$f['link']."'>".$f['name']."</a></td><td>".$f['count']."</td><td>Rs. ".$f['amount']."</td><td><a href='event_reg.php?eid=$eid'>Register</a></td></tr>";
    }
    echo "</table><hr/>";
    }
    
    $q = mysql_query("SELECT * FROM events WHERE type='Other'");
    if(mysql_num_rows($q)>0){
        echo "<h4 id='other'>Gaming Events:</h4><table class='table'><tr><td style='font-weight:bold'>Event Name</td><td style='font-weight:bold'>Max no. of team members</td><td style='font-weight:bold'>Fee[per team]</td><td></td></tr>";
    while($f = mysql_fetch_array($q)){
        $eid = $f['id'];
        echo"<tr><td><a target='_blank' href='".$f['link']."'>".$f['name']."</a></td><td>".$f['count']."</td><td>Rs. ".$f['amount']."</td><td><a href='event_reg.php?eid=$eid'>Register</a></td></tr>";
    }
    echo "</table><hr/>";
    }
    
    ?>
    <h4 id="workshops">Technical Workshops</h4>
    Exodia '16 is organising technical workshops all over India in association with its technical partners. This provides you the opportunity to host some of the best guides and mentors in the field of technology and receive training, experience, certifications and accolades from the the tech giants. The workshops can be selected from a vast array of choices, to suit your needs in the best possible way. From IC Engines to Android Development to Entrepreneurship to Cultural Delights - we've got 'em all!<br/><br/>
    Entrench Electronics is organising the first workshop of a three-workshop series at IIT Mandi Campus in April. <a href="http://entrench.in/workshop-registration-iit-mandi/" target="_blank">Enroll now!</a><hr/>
    <h3 id="myevents">My Events:</h3>
    <?php
    
    $q = mysql_query("SELECT * FROM ".$id."_events");
    if(mysql_num_rows($q)>0){
        echo "<table class='table'><tr><td style='font-weight:bold'>Event Name</td><td style='font-weight:bold'>Team Name[Leader's ID]</td><td style='font-weight:bold'>Status</td></tr>";
    while($f = mysql_fetch_array($q)){
        $eid = $f['event'];
        $en = mysql_result(mysql_query("SELECT name FROM events WHERE id = '$eid'"), 0);
        $tid = $f['team'];
        $tn = mysql_result(mysql_query("SELECT name FROM teams WHERE id = '$tid' AND event = '$eid'"), 0);
        $ld = mysql_result(mysql_query("SELECT leader FROM teams WHERE id = '$tid' AND event = '$eid'"), 0);
        $st = $f['status'];
            if($ld == $id){
                echo "<tr><td>$en <b>[Leader]</b></td><td>".$tn."[".$ld."]</td>";
            }
            else{
                echo "<tr><td>$en</td><td>".$tn."[".$ld."]</td>";
            }
            if($st == "unpaid"){
                echo "<td>Unpaid <a href='pay.php?eid=$eid&tid=$tid'>[Pay/Print]</a></td></tr>";
            }
            else{
                echo "<td>Confirmed <a href='pay.php?eid=$eid&tid=$tid'>[Print]</a></td></tr>";
            }
    }
    echo "</table>";
    }
    else
        echo "You haven't registered for any event yet.";
    
   
    echo "<hr/>";
    
    if(mysql_num_rows(mysql_query("SELECT * FROM campus_ambassador WHERE id = '$id'")) == 1){
    echo "<h3 id='ca_list'>List of registration under your reference</h3><hr/>";  
    $q = mysql_query("SELECT * FROM ".$id."_ca WHERE status = 'active'");
    if(mysql_num_rows($q)>0){
        echo "<table class='table'><tr><td style='font-weight:bold'>Exodia ID</td><td style='font-weight:bold'>Full Name</td><td style='font-weight:bold'>Email ID</td><td style='font-weight:bold'>College Name</td><td style='font-weight:bold'>Number of events registered in</td></tr>";
    while($f = mysql_fetch_array($q)){
        $id = $f['id'];
        $fn = mysql_result(mysql_query("SELECT fn FROM members_list WHERE id = '$id'"), 0);
        $em = mysql_result(mysql_query("SELECT em FROM members_list WHERE id = '$id'"), 0);
        $cn = mysql_result(mysql_query("SELECT cn FROM members_list WHERE id = '$id'"), 0);
        echo "<tr><td>$id</td><td>$fn</td><td>$em</td><td>$cn</td><td>".mysql_num_rows(mysql_query("SELECT * FROM ".$id."_events"))."</td></tr>";
    }
    echo "</table>";
    }
    else
        echo "No registrations yet.";
    
    }
    
    ?>
    
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Exodia 2016 | IIT Mandi
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $("#helpbox_body").hide();
            $("#helpbox_head").click(function(){
            $("#helpbox_body").slideToggle();
            });
        });
    </script>

</body>

</html>
