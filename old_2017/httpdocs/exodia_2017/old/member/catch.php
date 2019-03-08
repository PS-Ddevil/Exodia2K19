<?php

$eid = $_POST['registeredsubprogramName_1'];
$uid = $_POST['registeredattendeeextrainfoname_1'];
$tid = $_POST['registeredattendeeextrainfovalue_1'];
$ticket = $_POST['ticketId'];
if($eid == "hospitality"){
            include_once 'c.php';
            mysql_query("UPDATE hospitality SET status='paid' WHERE id='$uid'");
            mysql_query("UPDATE hospitality SET extra='$ticket' WHERE id='$uid'");
            mysql_close();
            header("location:home.php");
}
else{
	    include_once 'c.php';
            mysql_query("UPDATE event_".$eid." SET status='paid' WHERE id='$tid'") or die("1");
            mysql_query("UPDATE team_".$tid."_members SET status='paid' WHERE status='unpaid'") or die("2");
            $q = mysql_query("SELECT * FROM team_".$tid."_members") or die("3");
            while ($f = mysql_fetch_array($q)) {
                mysql_query("UPDATE ".$f['id']."_events SET status='paid' WHERE event='$eid'") or die("x");
            }
            mysql_close();
            header("location:home.php");
}

?>