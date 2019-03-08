<?php

include_once 'c.php';

$q = mysql_query("SELECT * FROM members_list");
while($f = mysql_fetch_array($q)){
$id = $f['id'];
$fn = mysql_result(mysql_query("SELECT fn FROM members_list WHERE id = '$id'"), 0);
$t = $id."_events";
while(!mysql_query("SELECT * FROM $t")){
mysql_query("CREATE TABLE $t (id INT(250) AUTO_INCREMENT PRIMARY KEY,event VARCHAR(250), team VARCHAR(250), extra VARCHAR(250), status VARCHAR(250))");
}
while(mysql_num_rows(mysql_query("SELECT * FROM hospitality WHERE id = '".$id."'")) == 0){
mysql_query("INSERT INTO hospitality VALUES('$id','".$fn."','','unpaid')") or die("Some error occured. Please try again. Sorry for the inconvenience.");
}

}
header("location: home.php");
?>