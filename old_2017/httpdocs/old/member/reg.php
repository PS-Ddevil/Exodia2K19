<?php
session_start();
if(isset($_SESSION['exodia_login'])){
    if($_SESSION['exodia_login']==1){
        header("location: home.php");
    }
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
                    <li class="page-scroll">
                        <a href="hospitality.php">Register for Hospitality</a>
                    </li>
                    <li>
                        <a href="help.php" target="_blank">Help</a>
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
                <div class="col-lg-12" style="height:500px">
    <form action="a.php?r=member_reg" method="post">
    <table>
        <tr><td></td><td></td><td></td></tr>
        <tr><td>Full Name*: </td><td><input type="text" name="fn" placeholder="Full Name" style="width:250px;color: black" required/></td><td></td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td>Username*: </td><td><input type="text" name="un" placeholder="username" style="width:250px;color: black" required/></td><td>Between 6 to 25 characters</td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td>Gender*:</td><td>
                <select name="gender" style="width:250px;color: black" required>
                    <option value="">Select</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
            </td><td></td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td>Email*: </td><td><input type="email" name="em" placeholder="a@b.com" style="width:250px;color: black" required/></td><td></td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td>College Name*: </td><td><input type="text" name="cn" placeholder="Ex: Indian Institute of Technology, Mandi" style="width:250px;color: black" required/></td><td>Full college name with location</td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td>Phone no.*: </td><td><input type="text" name="pn" placeholder="9876543210" style="width:250px;color: black" required/></td><td>No need to add '+91' or '-'</td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td>Facebook Profile Link: </td><td><input type="text" name="fbpl" placeholder="https://www.facebook.com/example" style="width:250px;color: black"/></td><td>For contacting purposes</td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td>Password*: </td><td><input type="password" name="pw" placeholder="password" style="width:250px;color: black" required/></td><td>Between 6 to 25 characters</td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td>Referral Code: </td><td><input type="text" name="code" placeholder="EXO123456" style="width:250px;color: black"/></td><td></td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td><a href="login.php"  style="color:white">Already a member?</a></td><td><input class="btn bg-primary" type="submit" name="submit" value="Sign Up" style="width:250px"/></td><td></td></tr>
        <tr><td><br/></td><td></td><td></td></tr>
        <tr><td><b>(* are mandatory.)</b></td><td></td><td></td></tr>
    </table>
    </form>
                </div>
            </div>
        </div>
    </header>
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
