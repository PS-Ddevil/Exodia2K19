<?

isset($_GET['eid']) ? trim($_GET['eid'])!="" ? $eid = htmlentities(trim($_GET['eid'])) : die("Input not set.") : die("Input not set.");
isset($_GET['tid']) ? trim($_GET['tid'])!="" ? $tid = htmlentities(trim($_GET['tid'])) : die("Input not set.") : die("Input not set.");

include_once 'c.php';
session_start();
if(isset($_SESSION['exodia_login'])){
    if($_SESSION['exodia_login']!=1){
        header("location: login.php");
    }
    else{
        $uid = $_SESSION['exodia_id'];
        $fn = $_SESSION['exodia_fn'];
    }
}
else{
    header("location: login.php");
}
if($eid != "hospitality"){
$attendingEvent=array();
$attendingEvent[0]['programId']=mysql_result(mysql_query("SELECT programId FROM events WHERE id = '$eid'"), 0);
$attendingEvent[0]['programName']=mysql_result(mysql_query("SELECT name FROM events WHERE id = '$eid'"), 0);
$attendingEvent[0]['subProgramName']=$eid;
$attendingEvent[0]['eventTypeId']=mysql_result(mysql_query("SELECT programType FROM events WHERE id = '$eid'"), 0);
$attendingEvent[0]['quantity']=1;
$attendingEvent[0]['fare']=mysql_result(mysql_query("SELECT amount FROM events WHERE id = '$eid'"), 0);
$attendingEvent[0]['attendees'][0]['name']=$fn;
$attendingEvent[0]['attendees'][0]['email']=mysql_result(mysql_query("SELECT em FROM members_list WHERE id = '$uid'"), 0);
$attendingEvent[0]['attendees'][0]['phone']="NA";
$attendingEvent[0]['attendees'][0]['cn']=mysql_result(mysql_query("SELECT cn FROM members_list WHERE id = '$uid'"), 0);
$attendingEvent[0]['attendees'][0]['city']="NA";
$attendingEvent[0]['attendees'][0]['extraInfoName']=$uid;
$attendingEvent[0]['attendees'][0]['extraInfoValue']=$tid;
$data = json_encode(array(
"eventId" => 534,
"eventName"=> "Exodia 2016",
"bookingUser" => 29647530,
"totalFare"=> 750,
"attendingEvents"=> $attendingEvent
));
$url = "http://services.thecollegefever.com/event-service/v1/booking/bookevent";
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
array('Content-Type: application/json', 'Content-Length: ' . strlen($data)));
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$output = curl_exec($ch);
$result = json_decode($output);
$url = $result->pgUrl;
header("location: ".$url);
}
else{
$attendingEvent=array();
$attendingEvent[0]['programId']=655;
$attendingEvent[0]['programName']="Hospitality";
$attendingEvent[0]['subProgramName']="hospitality";
$attendingEvent[0]['eventTypeId']=21;
$attendingEvent[0]['quantity']=1;
$attendingEvent[0]['fare']=900;
$attendingEvent[0]['attendees'][0]['name']=$fn;
$attendingEvent[0]['attendees'][0]['email']=mysql_result(mysql_query("SELECT em FROM members_list WHERE id = '$uid'"), 0);
$attendingEvent[0]['attendees'][0]['phone']="NA";
$attendingEvent[0]['attendees'][0]['cn']=mysql_result(mysql_query("SELECT cn FROM members_list WHERE id = '$uid'"), 0);
$attendingEvent[0]['attendees'][0]['city']="NA";
$attendingEvent[0]['attendees'][0]['extraInfoName']=$uid;
$attendingEvent[0]['attendees'][0]['extraInfoValue']=$tid;
$data = json_encode(array(
"eventId" => 534,
"eventName"=> "Exodia 2016",
"bookingUser" => 29647530,
"totalFare"=> 750,
"attendingEvents"=> $attendingEvent
));
$url = "http://services.thecollegefever.com/event-service/v1/booking/bookevent";
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
array('Content-Type: application/json', 'Content-Length: ' . strlen($data)));
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$output = curl_exec($ch);
$result = json_decode($output);
$url = $result->pgUrl;
header("location: ".$url);
}
?>