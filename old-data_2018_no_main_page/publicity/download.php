<?php

	//include 'connect.php';

	if(isset($_POST['option']) && isset($_POST['from']) && isset($_POST['to'])) {
		//echo "hi";
		if ( is_numeric($_POST['from'])  && is_numeric($_POST['to']) ) {
			
			$table = $_POST['option'];
			$start = $_POST['from'];
			$to = $_POST['to'];
			$filename = "'$table'_$start-$to.csv";
			$to -= $start - 1;
			$start--;

			//echo $to;

			//cho "SELECT * FROM '$table' limit $start , $to";

			
			//echo  "SELECT * FROM '$table' WHERE id >= $start AND id <= $to";

			$conn = mysql_connect("localhost","developer","Priyansh#MadeThis@26");
			mysql_select_db("sap_db",$conn);

			//	$filename = "pl.csv";
			$fp = fopen('php://output', 'w');

			$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='sap_db' AND TABLE_NAME='$table'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_row($result)) {
				$header[] = $row[0];
			}	

			header('Content-type: application/csv');
			header('Content-Disposition: attachment; filename='.$filename);
			fputcsv($fp, $header);

			$query = "SELECT * FROM $table limit $start , $to" ;
			$result = mysql_query($query);
			while($row = mysql_fetch_row($result)) {
				fputcsv($fp, $row);
			}
			exit;



		}
		else {
			echo " please contact shivam chaudhary!";
		}
	}
	else
		echo 'loda lele';
?>