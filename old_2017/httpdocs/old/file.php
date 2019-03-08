<?php
include_once 'c.php';
$q = mysql_query("SELECT * FROM members_list WHERE cn = 'Faculty of Engineering and Technology, Agra College, Agra'");
while($f = mysql_fetch_array($q)){
$id = $f['id'];
if(mysql_num_rows(mysql_query("SELECT * FROM campus_ambassador WHERE id = '$id'")) == 1){
}
}
?>