<?php
isset($_GET['r']) ? trim($_GET['r'])!="" ? $r = htmlentities(trim($_GET['r'])) : die("Input not set.") : die("Input not set.");
isset($_GET['id']) ? trim($_GET['id'])!="" ? $id = htmlentities(trim($_GET['id'])) : die("Input not set.") : die("Input not set.");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exodia '16 - Dashboard</title>

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

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-section page-scroll">
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
                    <li class="page-scroll">
                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="height:500px"><br/><br/>
    <?php
        
        include_once 'c.php';
        if($r == "member"){
            echo "<h3>".mysql_result(mysql_query("SELECT fn FROM members_list WHERE id = '".$id."'"), 0)."</h3>";
            echo "<b>Exodia ID:</b> ".$id."<br/>";
            echo "<b>Username:</b> ".mysql_result(mysql_query("SELECT un FROM members_list WHERE id = '".$id."'"), 0)."<br/>";
            echo "<b>Email:</b> ".mysql_result(mysql_query("SELECT em FROM members_list WHERE id = '".$id."'"), 0)."<br/>";
            echo "<b>Gender:</b> ".mysql_result(mysql_query("SELECT gender FROM members_list WHERE id = '".$id."'"), 0)."<br/>";
            echo "<b>College:</b> ".mysql_result(mysql_query("SELECT cn FROM members_list WHERE id = '".$id."'"), 0)."<br/>";
            echo "<b>Phone no.:</b> ".mysql_result(mysql_query("SELECT pn FROM members_list WHERE id = '".$id."'"), 0)."<br/>";
            echo "<b>Facebook Link:</b> <a target='_blank' href='".mysql_result(mysql_query("SELECT fbpl FROM members_list WHERE id = '".$id."'"), 0)."'>".mysql_result(mysql_query("SELECT fbpl FROM members_list WHERE id = '".$id."'"), 0)."</a><br/>";
            $q = mysql_query("SELECT * FROM ".$id."_events");
            if(mysql_num_rows($q)>0){
                echo "<hr/><h3>Events</h3><table class='table'><tr><td>Event Name</td><td>Team Name</td><td>Extra</td><td>Status</td><td></td></tr>";
            while ($f = mysql_fetch_array($q)) {
                $eid = $f['event'];
                $tid = $f['team'];
                $ext = $f['extra'];
                $st = $f['status'];
                echo "<tr><td>".mysql_result(mysql_query("SELECT name FROM events WHERE id = '$eid'"), 0)."</td><td><a href='details.php?r=team&id=$tid'>".mysql_result(mysql_query("SELECT name FROM event_".$eid." WHERE id = '$tid'"), 0)."</a></td><td>$ext</td><td>$st</td><td></td></tr>";
            }
                echo "</table>";
            }
            else{
                echo "<hr/>Registered for no event.";
            }
        }
        elseif($r == "event"){
            $q = mysql_query("SELECT * FROM event_".$id."");
            if(mysql_num_rows($q)>0){
            echo "<h3>Participants</h3><table class='table'><tr><td>ID</td><td>Team Name</td><td>Extra</td><td>Status</td><td></td></tr>";
            while ($f = mysql_fetch_array($q)) {
                $tid = $f['id'];
                $tn = $f['name'];
                $ext = $f['extra'];
                $st = $f['status'];
                echo "<tr><td>".$tid."</td><td><a href='details.php?r=team&id=$tid'>".$tn."</a></td><td>$ext</td><td>";
                if($st == "paid"){
                    echo "$st <a href='print.php?eid=$id&tid=$tid'>[PRINT]</a></td><td></td></tr>";
                }
                else{
                    echo "$st <a href='a.php?r=change_pay&eid=".$id."&tid=".$tid."'>[Set as paid]</a></td><td></td></tr>";
                }
            }
            echo "</table>";
            }
            else{
                echo "No one registered.";
            }
        }
        elseif($r == "team"){
            echo "<h3>Team Members</h3><table class='table'><tr><td>Full Name</td><td>Hospitality</td><td>Status</td><td></td></tr>";
            $q = mysql_query("SELECT * FROM team_".$id."_members");
            while ($f = mysql_fetch_array($q)) {
                $uid = $f['id'];
                $ext = $f['extra'];
                $st = $f['status'];
                echo "<tr><td><a href='details.php?r=member&id=$uid'>".mysql_result(mysql_query("SELECT fn FROM members_list WHERE id = '$uid'"), 0)."</a>";
                if($uid == mysql_result(mysql_query("SELECT leader FROM teams WHERE id = '$id'"), 0)){
                echo " [Leader]";
                }
                echo "</td><td>";
                if(mysql_result(mysql_query("SELECT status FROM hospitality WHERE id = '$uid'"), 0) == "paid"){
                    echo "paid";
                }
                else{
                    echo "unpaid <a href='a.php?r=change_hosp&uid=".$uid."&tid=".$id."'>[Set as paid]</a>";
                }
                echo"</td><td>$st</td><td></td></tr>";
            }
            echo "</table>";
        }
        else{
            die("Bad request.");
        }
        mysql_close();
        ?>
    <hr/><a href="dash.php">Back</a>
                </div>
            </div>
        </div>
    </section>
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

</body>

</html>
