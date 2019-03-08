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

<body style="border: solid 2px #000;min-height:750px;padding:5px"><img src="exodia.jpg" style="position: fixed; top: 5px;right:10%;width: 9%"/><img src="logo.jpg" style="position: fixed; top: 5px;right: 5px;width: 10%"/>
    <?php
    include 'c.php';
    isset($_GET['eid']) ? trim($_GET['eid'])!="" ? $eid = htmlentities(trim($_GET['eid'])) : die("Input not set.") : die("Input not set.");
    isset($_GET['tid']) ? trim($_GET['tid'])!="" ? $tid = htmlentities(trim($_GET['tid'])) : die("Input not set.") : die("Input not set.");
    
    if($eid != "hospitality"){
    echo "<h1>EXODIA '16</h1><h4>Indian Institute of Technology, Mandi</h4><hr/><table><tr><td><b>Event:</b></td><td>".mysql_result(mysql_query("SELECT name FROM events WHERE id = '$eid' AND status = 'active'"), 0)." [$eid]</td></tr>";
    echo "<tr><td><b>Team:</b></td><td>".mysql_result(mysql_query("SELECT name FROM teams WHERE id = '$tid' AND status = 'active'"), 0)." [$tid]</td></tr>";
    echo "<tr><td width='200px'><b>College:</b></td><td>".mysql_result(mysql_query("SELECT cn FROM members_list WHERE id = '".mysql_result(mysql_query("SELECT leader FROM teams WHERE id = '$tid'"), 0)."'"), 0)."</td></tr></table>";
    echo "<hr/><h5>List of Team Members:</h5><br/>";
    echo "<div class='container'><table class='table'><tr><td><b>ID</b></td><td><b>Full Name</b></td><td><b>Phone No.</b></td><td><b>Email ID</b></td></tr>";
    $q = mysql_query("SELECT * FROM team_".$tid."_members");
    while ($f = mysql_fetch_array($q)) {
        $uid = $f['id'];
        $ufn = mysql_result(mysql_query("SELECT fn FROM members_list WHERE id = '".$uid."'"), 0);
        $ug = mysql_result(mysql_query("SELECT gender FROM members_list WHERE id = '".$uid."'"), 0);
        $upn= mysql_result(mysql_query("SELECT pn FROM members_list WHERE id = '".$uid."'"), 0);
        $uem= mysql_result(mysql_query("SELECT em FROM members_list WHERE id = '".$uid."'"), 0);
        echo "<tr><td>$uid</td><td>$ufn</td><td>$upn</td><td>$uem</td></tr>";
    }
    echo "</table></div><hr/><b>Payment status:</b> ";
    if(mysql_result(mysql_query("SELECT status FROM event_".$eid." WHERE id = '$tid'"), 0) == "paid"){
    echo "Confirmed";
    }
    else{
    if(mysql_result(mysql_query("SELECT amount FROM events WHERE id = '$eid'"), 0) != 0){
    echo "To pay Rs. ". mysql_result(mysql_query("SELECT amount FROM events WHERE id = '$eid'"), 0);
    }
    else{
    echo "Free Event";
    }
    }
    
    
    
    }
    else{
    if($tid == "none"){
    echo "<h1>EXODIA '16</h1><h4>Indian Institute of Technology, Mandi</h4><hr/><h5>Hospitality for Participant</h5><table>";
    echo "<tr><td width='200px'><b>Full Name:</b></td><td>$fn [$id] </td></tr>";
    echo "<tr><td width='200px'><b>Gender:</b></td><td>".mysql_result(mysql_query("SELECT gender FROM members_list WHERE id = '".$id."'"), 0)."</td></tr>";
    echo "<tr><td width='200px'><b>Email ID:</b></td><td>".mysql_result(mysql_query("SELECT em FROM members_list WHERE id = '".$id."'"), 0)."</td></tr>";
    echo "<tr><td width='200px'><b>College:</b></td><td>".mysql_result(mysql_query("SELECT cn FROM members_list WHERE id = '".$id."'"), 0)."</td></tr>";
    echo "<tr><td width='200px'><b>Phone No.:</b></td><td>".mysql_result(mysql_query("SELECT pn FROM members_list WHERE id = '".$id."'"), 0)."</td></tr></table>";
    echo "<hr/><b>Payment status:</b> ";
    echo mysql_result(mysql_query("SELECT status FROM hospitality WHERE id = '$id'"), 0);
    }
    else{
    $eid = mysql_result(mysql_query("SELECT event FROM teams WHERE id = '".$tid."'"), 0);
    echo "<h1>EXODIA '16</h1><h4>Indian Institute of Technology, Mandi</h4><hr/><table><tr><td><b>Event:</b></td><td>".mysql_result(mysql_query("SELECT name FROM events WHERE id = '".$eid."'"), 0)." [$eid]</td></tr>";
    echo "<tr><td><b>Team:</b></td><td>".mysql_result(mysql_query("SELECT name FROM teams WHERE id = '$tid' AND status = 'active'"), 0)." [$tid]</td></tr>";
    echo "<tr><td width='200px'><b>College (of leader):</b></td><td>".mysql_result(mysql_query("SELECT cn FROM members_list WHERE id = '".mysql_result(mysql_query("SELECT leader FROM teams WHERE id = '$tid'"), 0)."'"), 0)."</td></tr></table>";
    echo "<hr/><h5>List of Team Members:</h5><br/>";
    echo "<div class='container'><table class='table'><tr><td><b>Exodia ID</b></td><td><b>Full Name</b></td><td><b>Gender</b></td><td><b>Phone No.</b></td><td><b>Hospitality</b></td></tr>";
    $q = mysql_query("SELECT * FROM team_".$tid."_members");
    $i = 0;
    while ($f = mysql_fetch_array($q)) {
        $uid = $f['id'];
        $ufn = mysql_result(mysql_query("SELECT fn FROM members_list WHERE id = '".$uid."'"), 0);
        $ug = mysql_result(mysql_query("SELECT gender FROM members_list WHERE id = '".$uid."'"), 0);
        $upn= mysql_result(mysql_query("SELECT pn FROM members_list WHERE id = '".$uid."'"), 0);
        $uh = mysql_result(mysql_query("SELECT status FROM hospitality WHERE id = '".$uid."'"), 0);
        if($uh == "unpaid"){$i++;}
        echo "<tr><td>$uid</td><td>$ufn</td><td>$ug</td><td>$upn</td><td>$uh</td></tr>";
    }
    echo "</table></div><hr/><b>Total amount to be paid:</b> Rs. ".$i*900;
    }
    }
    mysql_close();
    ?>

    <div style="text-align: right;margin-right: 20px">
    <br/><br/><br/><br/><br/><br/>
    <b>Sign and Seal<br/>Fest Manager</b>
    </div><hr/>
    <b>Contact for Hospitality:</b><br/>
    Divyanshu Verma: (+91) 8894019775<br/>
    Shubham Biswas: (+91) 7807160143<br/><br/>
    <b>&copy; Exodia 2016 | IIT Mandi</b>
</body>

</html>
