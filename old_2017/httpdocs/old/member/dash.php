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
<?php
session_start();
if(isset($_SESSION['exodia_dash'])){
    if($_SESSION['exodia_dash']!=1){
        die("<br/><div class='container'><form action='a.php?r=dash_in' method='post'><input type='text' name='username' placeholder='username' required/><br/><br/><input type='password' name='password' placeholder='password' required/><br/><br/><input class='btn bg-primary' type='submit' value='Login'/></form></div></body></html>");
    }
}
else{
    die("<br/><div class='container'><form action='a.php?r=dash_in' method='post'><input type='text' name='username' placeholder='username' required/><br/><br/><input type='password' name='password' placeholder='password' required/><br/><br/><input class='btn bg-primary' type='submit' value='Login'/></form></div></body></html>");
}

?>
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
                        <a href="a.php?r=dash_out">Log Out</a>
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
                <div class="col-lg-12" style="height:500px">
                <!--
    <h3>Create Event</h3>
    <form action="a.php?r=create_event" method="post">
    <table class='table'>
        <tr><td>Event Name: </td><td><input type="text" name="name" placeholder="Event Name" required/></td><td></td></tr>
        <tr><td>Program ID: </td><td><input type="text" name="programId" placeholder="programId" required/></td><td></td></tr>
        <tr><td>Program Type: </td><td><input type="text" name="programType" placeholder="programType" required/></td><td></td></tr>
        <tr><td>Description: </td><td><input type="text" name="description" placeholder="Description"/></td><td></td></tr>
        <tr><td>Type: </td>
            <td>
                <select name="type" style="width:175px;color: black" required>
                    <option value="Technical">Technical</option>
                    <option value="Cultural">Cultural</option>
                    <option value="Literary">Literary</option>
                    <option value="Other">Other</option>
                </select>
            </td><td></td></tr>
        <tr><td>No. of max team members: </td><td><input type="text" name="count" placeholder="" required/></td><td></td></tr>
        <tr><td>Fee: </td><td><input type="number" name="amt" placeholder="" required/></td><td></td></tr>
        <tr><td></td><td><input class="btn bg-primary" type="submit" name="submit" value="Submit"/></td><td></td></tr>
    </table>
    </form>
    <hr/>
    -->
    <h3>List of Events</h3>
    <?php
    
    include_once 'c.php';
    
    $q = mysql_query("SELECT * FROM events");
    if(mysql_num_rows($q)>0){
        echo "<table class='table'><tr><td style='font-weight:bold'>ID</td><td style='font-weight:bold'>Event Name</td><td style='font-weight:bold'>Type</td><td style='font-weight:bold'>Max no. of team members</td><td style='font-weight:bold'>No. of teams registered [Total]</td><td style='font-weight:bold'>Fee</td></tr>";
    while($f = mysql_fetch_array($q)){
        echo"<tr><td>".$f['id']."</td><td><a href='details.php?r=event&id=".$f['id']."'>".$f['name']."</a></td><td>".$f['type']."</td><td>".$f['count']."</td><td>".mysql_num_rows(mysql_query("SELECT * FROM event_".$f['id']))."</td><td>".$f['amount']."</td></tr>";
    }
    echo "</table>";
    }
    else{
        echo "No event created.";
    }
    
    ?>
    <hr/><h3>List of Participants</h3>
    <?php
    
    include_once 'c.php';
    
    $q = mysql_query("SELECT * FROM members_list");
    if(mysql_num_rows($q)>0){
        echo "<table class='table'><tr><td style='font-weight:bold'>ID</td><td style='font-weight:bold'>Full Name</td><td style='font-weight:bold'>Email</td><td style='font-weight:bold'>College Name</td><td style='font-weight:bold'>Phone no.</td><td style='font-weight:bold'>Hospitality</td><td style='font-weight:bold'>No. of events registered in</td></tr>";
    while($f = mysql_fetch_array($q)){
        echo "<tr><td>".$f['id']."</td><td><a href='details.php?r=member&id=".$f['id']."'>".$f['fn']."</a></td><td>".$f['em']."</td><td>".$f['cn']."</td><td>".$f['pn']."</td><td>";
        if(mysql_result(mysql_query("SELECT status FROM hospitality WHERE id = '".$f['id']."'"), 0) == "paid"){
                    echo "paid";
                }
                else{
                    echo "unpaid <a href='a.php?r=change_hosp&uid=".$f['id']."&tid=none'>[Set as paid]</a>";
                }
        echo "</td><td>".mysql_num_rows(mysql_query("SELECT * FROM ".$f['id']."_events"))."</td></tr>";
    }
    echo "</table>";
    }
    else{
        echo "No one registered.";
    }
    
    ?>
    <hr/><h3>Helpbox</h3>
    <?php
    
    include_once 'c.php';
    
    $q = mysql_query("SELECT * FROM helpbox WHERE status = 'active'");
    if(mysql_num_rows($q)>0){
        echo "<table class='table'><tr><td style='font-weight:bold'>ID</td><td style='font-weight:bold'>Full Name</td><td style='font-weight:bold'>Email</td><td style='font-weight:bold'>Query</td></tr>";
    while($f = mysql_fetch_array($q)){
        echo "<tr><td>".$f['id']."</td><td><a href='details.php?r=member&id=".$f['id']."'>".$f['fn']."</a></td><td>".$f['em']."</td><td>".$f['input']."</td></tr>";
    }
    echo "</table>";
    }
    else{
        echo "No query.";
    }
    
    ?>
    <hr/>
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
