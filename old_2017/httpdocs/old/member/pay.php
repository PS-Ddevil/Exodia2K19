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
    echo "<b>Full Name</b>: $fn | <b>Exodia ID</b>: $id";
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
                    <h3>1. Online Mode</h3>
                    <?php
                    
                    include_once 'c.php';
                    isset($_GET['eid']) ? trim($_GET['eid'])!="" ? $eid = htmlentities(trim($_GET['eid'])) : die("Input not set.") : die("Input not set.");
                    isset($_GET['tid']) ? trim($_GET['tid'])!="" ? $tid = htmlentities(trim($_GET['tid'])) : die("Input not set.") : die("Input not set.");
                    echo "<b>Event ID:</b> $eid<br/><b>Team ID:</b> $tid";
                    echo "<br/><b>Registration Fees (Hospitality excluded): </b> Rs. ".$amt = mysql_result(mysql_query("SELECT amount FROM events WHERE id = '".$eid."'"), 0);
                    echo "<br/><b>Status of payment: </b>";
                    if(mysql_result(mysql_query("SELECT status FROM event_".$eid." WHERE id = '".$tid."'"), 0) == "paid"){
                       echo "Confirmed";
                    }
                    else{
                       echo "Unpaid";
                    }
                    $r = mysql_result(mysql_query("SELECT status FROM event_".$eid." WHERE id = '".$tid."'"), 0);
                    if ($r == "unpaid"){
                        echo "<br/><br/><a href='send.php?eid=$eid&tid=$tid'>[PAY Rs.$amt]</a>";
                    }
                    
                    ?>
                    <hr/><h3>2. Offline Mode</h3>
                    You can pay at our desk. You need to show a printed form and present it. Your ID(s) will be given to you immediately. Click below to create form and then press Ctrl+P to print.<br/><hr/>
                    <h3>Print Registration Form:</h3>
                    In both the cases, you need to bring printed form in order to get ID cards.<br/><br/>
                    <?php
                    echo "<a href='print.php?eid=$eid&tid=$tid'>{PRINT]</a>";
                    ?>
                    <hr/>
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

</body>

</html>
