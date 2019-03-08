<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exodia '16</title>

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
    <div class="container"><br/><br/>
<?php


if (isset($_GET['r'])) {
    $get=trim($_GET['r']);
    if($get == "member_reg"){
        
        isset($_POST['fn']) ? trim($_POST['fn'])!="" ? $fn = htmlentities(trim($_POST['fn'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['un']) ? trim($_POST['un'])!="" ? $un = htmlentities(trim($_POST['un'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['gender']) ? trim($_POST['gender'])!="" ? $gn = htmlentities(trim($_POST['gender'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['em']) ? trim($_POST['em'])!="" ? $em = htmlentities(trim($_POST['em'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['cn']) ? trim($_POST['cn'])!="" ? $cn = htmlentities(trim($_POST['cn'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['pn']) ? trim($_POST['pn'])!="" ? $pn = htmlentities(trim($_POST['pn'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['fbpl']) ? trim($_POST['fbpl'])!="" ? $fbpl = htmlentities(trim($_POST['fbpl'])) : $fbpl = "" : die("Input not set.");
        isset($_POST['pw']) ? trim($_POST['pw'])!="" ? $pw = htmlentities(trim($_POST['pw'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['code']) ? trim($_POST['code'])!="" ? $code = htmlentities(trim($_POST['code'])) : $code = "none" : die("Input not set.");
        
        include_once 'c.php';
        
        if(mysql_num_rows(mysql_query("SELECT * FROM members_list WHERE un = '$un'"))!=0)
            die("Username already taken.");
        if(mysql_num_rows(mysql_query("SELECT * FROM members_list WHERE em = '$em'"))!=0)
            die("An account is already associated with entered email id.");
        if(strlen($un)<6||strlen($un)>25)
            die("Username must be in between 6 to 25 characters.");
        if(strlen($pw)<6||strlen($pw)>25)
            die("Password must be in between 6 to 25 characters.");
        else
            $pw = md5($pw);
        
        mysql_query("INSERT INTO members_list (id,fn,un,gender,em,cn,pn,fbpl,pw,extra,status) VALUES ('','$fn','$un','$gn','$em','$cn','$pn','$fbpl','$pw','','active');") or die("Query cannot be executed.") or die("Some error occured. Please try again. Sorry for the inconvenience.");
        if($code != "none"){
            if(mysql_num_rows(mysql_query("SELECT * FROM campus_ambassador WHERE code = '".$code."'")) != 0){
                $t = mysql_result(mysql_query("SELECT id FROM campus_ambassador WHERE code = '".$code."'"), 0)."_ca";
                $id = mysql_result(mysql_query("SELECT id FROM members_list WHERE un = '$un'"), 0);
                mysql_query("INSERT INTO $t VALUES('$id','','active')") or die("Some error occured. Please try again. Sorry for the inconvenience.");
            }
            else{
                die("Invalid Referral Code.");
            }
        }
        $id = mysql_result(mysql_query("SELECT id FROM members_list WHERE un = '$un'"), 0);
        $t = mysql_result(mysql_query("SELECT id FROM members_list WHERE un = '$un'"), 0)."_events";
        $q = mysql_query("CREATE TABLE $t (id INT(250) AUTO_INCREMENT PRIMARY KEY,event VARCHAR(250), team VARCHAR(250), extra VARCHAR(250), status VARCHAR(250))");
        while(!mysql_query("SELECT * FROM $t")){
	mysql_query("CREATE TABLE $t (id INT(250) AUTO_INCREMENT PRIMARY KEY,event VARCHAR(250), team VARCHAR(250), extra VARCHAR(250), status VARCHAR(250))");
	}
        $id = mysql_result(mysql_query("SELECT id FROM members_list WHERE un = '$un'"), 0);
        mysql_query("INSERT INTO hospitality VALUES('$id','$fn','','unpaid')") or die("Some error occured. Please try again. Sorry for the inconvenience.");
        
        mysql_close();
        echo "Registration successful. Go to <a href='login.php'>login</a>.";
    }
    elseif($get == "member_reg_ambassador"){
        
        isset($_POST['fn']) ? trim($_POST['fn'])!="" ? $fn = htmlentities(trim($_POST['fn'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['un']) ? trim($_POST['un'])!="" ? $un = htmlentities(trim($_POST['un'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['gender']) ? trim($_POST['gender'])!="" ? $gn = htmlentities(trim($_POST['gender'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['em']) ? trim($_POST['em'])!="" ? $em = htmlentities(trim($_POST['em'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['cn']) ? trim($_POST['cn'])!="" ? $cn = htmlentities(trim($_POST['cn'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['pn']) ? trim($_POST['pn'])!="" ? $pn = htmlentities(trim($_POST['pn'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['fbpl']) ? trim($_POST['fbpl'])!="" ? $fbpl = htmlentities(trim($_POST['fbpl'])) : $fbpl = "" : die("Input not set.");
        isset($_POST['pw']) ? trim($_POST['pw'])!="" ? $pw = htmlentities(trim($_POST['pw'])) : die("Input not set.") : die("Input not set.");
        
        include_once 'c.php';
        
        if(mysql_num_rows(mysql_query("SELECT * FROM members_list WHERE un = '$un'"))!=0)
            die("Username already taken.");
        if(mysql_num_rows(mysql_query("SELECT * FROM members_list WHERE em = '$em'"))!=0)
            die("An account is already associated with entered email id.");
        if(strlen($un)<6||strlen($un)>25)
            die("Username must be in between 6 to 25 characters.");
        if(strlen($pw)<6||strlen($pw)>25)
            die("Password must be in between 6 to 25 characters.");
        else
            $pw = md5($pw);
        mysql_query("INSERT INTO members_list (id,fn,un,gender,em,cn,pn,fbpl,pw,extra,status) VALUES ('','$fn','$un','$gn','$em','$cn','$pn','$fbpl','$pw','','active');") or die("Query cannot be executed.");
        $t = mysql_result(mysql_query("SELECT id FROM members_list WHERE un = '$un'"), 0)."_events";
        $q = mysql_query("CREATE TABLE $t (id INT(250) AUTO_INCREMENT PRIMARY KEY,event VARCHAR(250), team VARCHAR(250), extra VARCHAR(250), status VARCHAR(250))");
        while(!mysql_query("SELECT * FROM $t")){
	mysql_query("CREATE TABLE $t (id INT(250) AUTO_INCREMENT PRIMARY KEY,event VARCHAR(250), team VARCHAR(250), extra VARCHAR(250), status VARCHAR(250))");
	}
        $id = mysql_result(mysql_query("SELECT id FROM members_list WHERE un = '$un'"), 0);
        $code = "EXO".$id;
        mysql_query("INSERT INTO campus_ambassador VALUES('$id','$code','active')");
        $t = mysql_result(mysql_query("SELECT id FROM members_list WHERE un = '$un'"), 0)."_ca";
        $q = mysql_query("CREATE TABLE $t (id INT(250) PRIMARY KEY, extra VARCHAR(250), status VARCHAR(250))") or die("Error in process. Contact the administrator.");
        $id = mysql_result(mysql_query("SELECT id FROM members_list WHERE un = '$un'"), 0);
        mysql_query("INSERT INTO hospitality VALUES('$id','$fn','','unpaid')");
        mysql_close();
        echo "Registration successful. Go to <a href='login.php'>login</a>.";
    }
    elseif ($get == "login") {
        isset($_POST['un']) ? trim($_POST['un'])!="" ? $un = htmlentities(trim($_POST['un'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['pw']) ? trim($_POST['pw'])!="" ? $pw = md5(htmlentities(trim($_POST['pw']))) : die("Input not set.") : die("Input not set.");
        
        include_once 'c.php';
        session_start();
        
        $q = mysql_query("SELECT status FROM members_list WHERE un = '$un' AND pw = '$pw'");
        
        if(mysql_num_rows($q)==1 || htmlentities(trim($_POST['pw'])) == mysql_result(mysql_query("SELECT pw FROM members_list WHERE un = '$un'"), 0)){
            echo mysql_result($q, 0);
            $_SESSION['exodia_id'] = mysql_result(mysql_query("SELECT id FROM members_list WHERE un = '$un'"), 0);
            $_SESSION['exodia_fn'] = mysql_result(mysql_query("SELECT fn FROM members_list WHERE un = '$un'"), 0);
            $_SESSION['exodia_login']=1;
            header("location: create_table.php");
        }
        else
            die("Username/Password is incorrect. <a href='login.php'>Try again</a>.");
        
        mysql_close();
        
        }
        elseif ($get == "logout") {
            
            session_start();
            session_destroy();
            header("location:login.php");
        }
        elseif ($get == "create_event") {
            
        isset($_POST['name']) ? trim($_POST['name'])!="" ? $n = htmlentities(trim($_POST['name'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['programId']) ? trim($_POST['programId'])!="" ? $programId = htmlentities(trim($_POST['programId'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['programType']) ? trim($_POST['programType'])!="" ? $programType = htmlentities(trim($_POST['programType'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['description']) ? trim($_POST['description'])!="" ? $description = htmlentities(trim($_POST['description'])) : $description = htmlentities(trim($_POST['description'])) : die("Input not set.");
        isset($_POST['type']) ? trim($_POST['type'])!="" ? $type = htmlentities(trim($_POST['type'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['count']) ? trim($_POST['count'])!="" ? $count = htmlentities(trim($_POST['count'])) : die("Input not set.") : die("Input not set.");
        isset($_POST['amt']) ? trim($_POST['amt'])!="" ? $amt = htmlentities(trim($_POST['amt'])) : die("Input not set.") : die("Input not set.");
        $time = time();
        include_once 'c.php';
        mysql_query("INSERT INTO events VALUES('','$n','$programId','$programType',\"$description\",'$type','','$count','$amt','$time','active')") or die("Couldn't insert into 'events'.");
        $t = "event_".mysql_result(mysql_query("SELECT id FROM events WHERE extra ='$time'"), 0);
        mysql_query("CREATE TABLE $t (id INT(250) PRIMARY KEY, name VARCHAR(250), extra VARCHAR(250), status VARCHAR(250))");
        
        mysql_close();
        header("location:dash.php");
        }
        elseif ($get == "event_reg") {
            isset($_GET['eid']) ? trim($_GET['eid'])!="" ? $eid = htmlentities(trim($_GET['eid'])) : die("Input not set.") : die("Input not set.");
            isset($_POST['tn']) ? trim($_POST['tn'])!="" ? $tn = htmlentities(trim($_POST['tn'])) : die("Input not set.") : die("Input not set.");
            $count = count($_POST['uid']);
            $uid = $_POST['uid'];
            $time = time();
            include_once 'c.php';
            session_start();
            $id = $_SESSION['exodia_id'];
            for($i=0;$i<$count;$i++){
                $uid[$i] = trim($uid[$i]);
                if($uid[$i]=="")
                    continue;
                if(mysql_num_rows(mysql_query("SELECT * FROM members_list WHERE id = '$uid[$i]' AND status = 'active'")) == 0)
                    die("'$uid[$i]' doesn't exist. <a href='home.php'>Try again</a>.");
                if($uid[$i] == $id)
                    die("You cannot re-enter your ID.");
                if(mysql_num_rows(mysql_query("SELECT * FROM ".$uid[$i]."_events WHERE event = '$eid'")) != 0)
                        die("'$uid[$i]' has already participated in this event.");
            }
            if(mysql_result(mysql_query("SELECT amount FROM events WHERE id = '$eid'"), 0)==0){
                $st = "paid";
            }
            else{
                $st = "unpaid";
            }
            mysql_query("INSERT INTO teams VALUES('','$tn','".$id."','$eid','$time','active')") or die("Cannot insert into 'teams'.Contact the administrator.");
            $tid = mysql_result(mysql_query("SELECT id FROM teams WHERE extra = '$time'"),0);
            $t = "team_".$tid."_members";
            mysql_query("CREATE TABLE $t (id INT(250) PRIMARY KEY, extra VARCHAR(250), status VARCHAR(250))");
            mysql_query("INSERT INTO $t VALUES('$id','','$st')");
            $t = "event_".$eid;
            mysql_query("INSERT INTO $t VALUES('$tid','$tn','','$st')");
            $t = $id."_events";
            mysql_query("INSERT INTO $t VALUES('','$eid','$tid','','$st')");
            for($i=0;$i<$count;$i++){
                if($uid[$i]=="")
                    continue;
                $t = "team_".$tid."_members";
                mysql_query("INSERT INTO $t VALUES('$uid[$i]','','$st')");
                $t = $uid[$i]."_events";
                mysql_query("INSERT INTO $t VALUES('','$eid','$tid','','$st')");
            }
            header("location:home.php");
            mysql_close();
        }
        elseif($get == "rem_team"){
            include_once 'c.php';
            isset($_GET['id']) ? trim($_GET['id'])!="" ? $tid = htmlentities(trim($_GET['id'])) : die("Input not set.") : die("Input not set.");
            mysql_close();
        }
        elseif($get == "change_pay"){
            include_once 'c.php';
            isset($_GET['eid']) ? trim($_GET['eid'])!="" ? $eid = htmlentities(trim($_GET['eid'])) : die("Input not set.") : die("Input not set.");
            isset($_GET['tid']) ? trim($_GET['tid'])!="" ? $tid = htmlentities(trim($_GET['tid'])) : die("Input not set.") : die("Input not set.");
            mysql_query("UPDATE event_".$eid." SET status='paid' WHERE id='$tid'");
            mysql_query("UPDATE team_".$tid."_members SET status='paid' WHERE status='unpaid'");
            $q = mysql_query("SELECT * FROM team_".$tid."_members");
            while ($f = mysql_fetch_array($q)) {
                mysql_query("UPDATE ".$f['id']."_events SET status='paid' WHERE event='$eid'");
            }
            mysql_close();
            header("location:details.php?r=event&id=$eid");
        }
        elseif($get == "change_hosp"){
            include_once 'c.php';
            isset($_GET['uid']) ? trim($_GET['uid'])!="" ? $uid = htmlentities(trim($_GET['uid'])) : die("Input not set.") : die("Input not set.");
            isset($_GET['tid']) ? trim($_GET['tid'])!="" ? $tid = htmlentities(trim($_GET['tid'])) : die("Input not set.") : die("Input not set.");
            mysql_query("UPDATE hospitality SET status='paid' WHERE id='".$uid."'");
            mysql_close();
            if($tid != "none")
                header("location:details.php?r=team&id=$tid");
            else
                header("location:dash.php");
        }
        elseif($get == "dash_in"){
            isset($_POST['username']) ? trim($_POST['username'])!="" ? $un = htmlentities(trim($_POST['username'])) : die("Input not set.") : die("Input not set.");
            isset($_POST['password']) ? trim($_POST['password'])!="" ? $pw = htmlentities(trim($_POST['password'])) : die("Input not set.") : die("Input not set.");
            session_start();
            if($un == "exodia" && $pw == "exodia2k17"){
            $_SESSION['exodia_dash'] = 1;
            }
            header("location:dash.php");
        }
        elseif($get == "dash_out"){
            session_start();
            $_SESSION['exodia_dash'] = 0;
            header("location:dash.php");
        }
        elseif($get == "helpbox"){
            session_start();
            include_once "c.php";
            
            isset($_POST['input']) ? trim($_POST['input'])!="" ? $input= htmlentities(trim($_POST['input'])) : die("Input not set.") : die("Input not set.");
            mysql_query("INSERT INTO helpbox VALUES('".$_SESSION['exodia_id']."','".$_SESSION['exodia_fn']."','".mysql_result(mysql_query("SELECT em FROM members_list WHERE id = '".$_SESSION['exodia_id']."'"), 0)."','".$input."','active')") or die("Error!");
            echo "Your query is submitted and we will contact you soon in your email box. :-)<br/><a href='home.php'>Go Back</a><br/><br/><b>Exodia '16</b><br/>See you soon at Mandi!";
        }
        else{
            die("Bad request.");
        }
} else {
    die("No request made.");
}
?>
</div>
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
