<?php

/*
include_once 'c.php';
$q = mysql_query("SELECT * FROM members_list WHERE gender= 'Female'");
echo "Ladkiya: ".mysql_num_rows(mysql_query("SELECT * FROM members_list WHERE gender= 'Female'"))."<br/>";
echo "Ladke: ".(mysql_num_rows(mysql_query("SELECT * FROM members_list WHERE gender= 'Male'"))-5)."<hr/>";
while($f = mysql_fetch_array($q)){
echo "<a target='_blank' href='".$f['fbpl']."'>".$f['fn']."</a> ".$f['pn']."<br/>";
}
*/
include_once 'c.php';
$q = mysql_query("SELECT * FROM campus_ambassador");
echo "No. of ambassabors registered: ".mysql_num_rows(mysql_query("SELECT * FROM campus_ambassador"))."<br/>";

echo "<h3>All Ambassadors:</h3>";
while($f = mysql_fetch_array($q)){
$id = $f['id'];
echo "$id (".mysql_result(mysql_query("SELECT fn FROM members_list WHERE id = '".$id."'"), 0)." : ".mysql_num_rows(mysql_query("SELECT * FROM ".$id."_ca")).") - ".mysql_result(mysql_query("SELECT pn FROM members_list WHERE id = '".$id."'"), 0)." - ".mysql_result(mysql_query("SELECT cn FROM members_list WHERE id = '".$id."'"), 0)."<br/>";

}

$q = mysql_query("SELECT * FROM campus_ambassador");
echo "<h3>List of Ambassadors:</h3>";
while($f = mysql_fetch_array($q)){
$id = $f['id'];
if(mysql_num_rows(mysql_query("SELECT * FROM ".$id."_ca"))>0){
echo "<b>$id (".mysql_result(mysql_query("SELECT fn FROM members_list WHERE id = '".$id."'"), 0)." : ".mysql_num_rows(mysql_query("SELECT * FROM ".$id."_ca")).") - ".mysql_result(mysql_query("SELECT pn FROM members_list WHERE id = '".$id."'"), 0)." - ".mysql_result(mysql_query("SELECT cn FROM members_list WHERE id = '".$id."'"), 0)."</b><br/>";
echo "<h5>Members under $id(".mysql_num_rows(mysql_query("SELECT * FROM ".$id."_ca"))."):</h5>";
$q1 = mysql_query("SELECT * FROM ".$id."_ca");
while($f = mysql_fetch_array($q1)){

$id1 = $f['id'];
echo "$id1 (".mysql_result(mysql_query("SELECT fn FROM members_list WHERE id = '".$id1."'"), 0).")<br/>";
}
echo "<hr/>";
}

}

?>