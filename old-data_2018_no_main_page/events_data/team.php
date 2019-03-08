<?php

    //include 'connect.php';
    session_start();
    //echo $_SESSION['mallu'];
    if(isset($_SESSION['mallu']) && !empty($_SESSION['mallu']) && isset($_SESSION['name_of_tableww'])) {
       // echo "hi";
        if ( $_SESSION['mallu'] == 'jhinga' ) {
            //$tab_name = 'act';
            //echo "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='events_data' AND TABLE_NAME='$tab_name'";
            //echo $to;

            //echo "SELECT * FROM '$table' limit $start , $to";

            
            //echo  "SELECT * FROM '$table' WHERE id >= $start AND id <= $to";
            //echo "SELECT * FROM $tab_name";'localhost', 'developer', 'Priyansh#MadeThis@26', 'sap_db'
            $conn = mysql_connect('localhost', 'developer', 'Priyansh#MadeThis@26');
            //echo 'k';
            mysql_select_db("sap_db");
            //echo 'j';
            $tab_name = $_SESSION['name_of_tableww'];
            //$tab_name = 'act';
            
            $filename = "data.csv";
            $fp = fopen('php://output', 'w');

            $query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='events_data' AND TABLE_NAME='$tab_name'";
            $result = mysql_query($query);
            while ($row = mysql_fetch_row($result)) {
                $header[] = $row[0];
            }   

            header('Content-type: application/csv');
            header('Content-Disposition: attachment; filename='.$filename);
            fputcsv($fp, $header);

            $query = "SELECT * FROM $tab_name" ;
            $result = mysql_query($query);
            while($row = mysql_fetch_row($result)) {
                fputcsv($fp, $row);
            }
            //exit;



        }
        else {
            header('Location: i.html');
        }
    }
    else
        header('Location: i.html');
?>


