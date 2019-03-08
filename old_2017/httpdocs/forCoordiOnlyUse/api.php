<?php
$servername = "localhost";
$username = "exodia";
$password = "Exodia@!2k17";
$dbname = "exodia";

$x = $_POST['id'];
$safex = mysql_real_escape_string($x);
echo "$safex";
// Create connection
$conn = mysql_connect($servername, $username, $password);
$db = mysql_select_db($dbname, $conn);
if($x=="pay"){
	$result = "<a href='Attendee_Report (1).xls'>Excel Sheet</a><br>Last updated:06:10PM 04-04-2017";
}
else if($x!="all"){
$query = mysql_query("select * from events where event='$x'", $conn);
$result = "";
$result .= "<div id='display'>";
$result .="<table border=\"1\">";
$result .="<tr><th>Event</th><th>Email</th><th>Name</th><th>Phone</th><th>College</th><th>Team Name</th></tr>";
while($row = mysql_fetch_assoc($query)){
$user = $row['username'];
$query_2 = mysql_query("select * from teams where username='$user' and event='$x'", $conn);
$row_2 = mysql_fetch_assoc($query_2);
$team = $row_2['team_name'];
$query_3= mysql_query("select * from team_members where team_name='$team'", $conn);
	while($row_3 = mysql_fetch_assoc($query_3)){
		$team_user=$row_3['username'];	
		$query_4 = mysql_query("select * from exodia where username='$team_user'", $conn);
		$row_4 = mysql_fetch_assoc($query_4);
		if($row_4['name']){
			$result .= "<tr><td> {$row['event']}</td>"."<td> {$row_4['username']}</td>"."<td>{$row_4['name']}</td>"."<td> {$row_4['phoneNo']}</td>"."<td> {$row_4['coll_name']}</td>"."<td> {$row_2['team_name']}</td></tr></p>";			
		}
		else{
			$result .= "<tr><td> {$row['event']}</td>"."<td> {$row_3['username']}</td>"."<td>NOT REGISTERED</td>"."<td> ON EXODIA.IN</td>"."<td> WEBSITE</td>"."<td> {$row_2['team_name']}</td></tr></p>";
		}
	}
}
$result .="</table>";
$result .= "</div>";
// $query_2 = mysql_query("select * from exodia where username='$user'", $conn);
// $row_2 = mysql_fetch_assoc($query_2);
// $query_3= mysql_query("select * from team_members where username='$user'", $conn);
// $row_3 = mysql_fetch_assoc($query_3);
// $result .= "<tr><td> {$row['event']}</td>"."<td> {$row['username']}</td>"."<td>{$row_2['name']}</td>"."<td> {$row_2['phoneNo']}</td>"."<td> {$row_2['coll_name']}</td>"."<td> {$row_3['team_name']}</td></tr></p>";
// }
// $result .="</table>";
// $result .= "</div>";

}
else if ($x=="all"){
$query = mysql_query("select * from exodia", $conn);	


$result = "";
$result .= "<div id='display'>";
$result .="<table border=\"1\">";
$result .="<tr><th>Email</th><th>College Name</th><th>Name</th><th>Sap</th><th>Phone</th></tr>";
while($row = mysql_fetch_assoc($query)){
$result .= "<tr><td> {$row['username']}</td>"."<td> {$row['coll_name']}</td>"."<td> {$row['name']}</td>"."<td> {$row['refer']}</td>"."<td> {$row['phoneNo']}</td></tr></p>";
}
$result .="</table>";
$result .= "</div>";


}
echo $result;
?>