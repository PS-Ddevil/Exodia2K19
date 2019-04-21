
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exodia'19 Login Area</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
$conn = new mysqli("localhost", "exodia_sap", "exodia@12345", "SAP");
// $conn = new mysqli("localhost", "root", "", "SAP");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Fetching Values from URL
$email = $_POST["email"];
$password = $_POST["pass"];
$sql = "SELECT * FROM registeration WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows>0) {
    if ($email == "sap_details") { 
    $sql = "SELECT * FROM sap_details";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    echo '	<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
				<h1 style="color: white;">SAP registeration details</h1><br><br>
                <table>
                    <thead>
                        <tr class="table100-head">
                            <th class="column1">Name</th>
                            <th class="column2">Email</th>
                            <th class="column3">College</th>
                            <th class="column4">Phone</th>
                            <th class="column5">Whatsapp</th>
                            <th class="column6">Gender</th>
                        </tr>
                    </thead>
                    <tbody>';
    while($row = $result->fetch_assoc()) {
        echo '<tr>
        <td class="column1">'.$row["name"].'</td>
        <td class="column2">'.$row["email"].'</td>
        <td class="column3">'.$row["college"].'</td>
        <td class="column4">'.$row["phone"].'</td>
        <td class="column5">'.$row["whatsapp"].'</td>
        <td class="column6">'.$row["gender"].'</td>
         </tr>';
    }
    echo '</tbody>
    </table>
</div>
</div>
</div>
</div>';
} else {
    echo "0 results";
}
    }

    elseif ($email=="event_participants") {
        $new_conn = new mysqli("localhost", "exodia_sap", "exodia@12345", "event_registeration");
        if ($new_conn->connect_error) {
            die("Connection failed: " . $new_conn->connect_error);
        }
        $sql_query = "SELECT * FROM payment";
        $result = $new_conn->query($sql_query);
        echo '	<div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
					<h1 style="color: white;">Event Payment Details</h1><br><br>
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Name</th>
                                <th class="column2">Email</th>
                                <th class="column3">Phone</th>
								<th class="column4">Order-ID</th>
								<th class="column5">Event</th>
								<th class="column6">Team_Size</th>
								<th class="column7">Accomodation</th>
								<th class="column8">Amount Paid</th>
                            </tr>
                        </thead>
                        <tbody>';
        while($row = $result->fetch_assoc()) {
            echo '<tr>
            <td class="column1">'.$row["name"].'</td>
            <td class="column2">'.$row["email"].'</td>
            <td class="column3">'.$row["phone"].'</td>
			<td class="column4">'.$row["order_id"].'</td>
			<td class="column5">'.$row["event"].'</td>
			<td class="column6">'.$row["team_size"].'</td>
			<td class="column7">'.$row["accomodation"].'</td>
			<td class="column8">'.$row["amount"].'</td>
             </tr>';
        }
        echo '</tbody>
        </table>
    </div>
    </div>
    </div>
    </div>';
	$new_conn->close();
    }
    
}
else {
//    echo "Login Failed!";
    header("Location: https://register.exodia.in/oops");
}
$conn->close(); // Connection Closed
?>
<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>