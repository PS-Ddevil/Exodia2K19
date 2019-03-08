<?php

	include 'resources/conn.php';
	include 'resources/saviour.php';



	session_start();

	$_SESSION['name_of_tableww'];
	if(isset($_SESSION['name_of_tableww']) && !empty($_SESSION['name_of_tableww']) ) {
		$table = saviour($_SESSION['name_of_tableww']);
		
		$result = $db->prepare("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = ?");
		$result->bind_param('s', $table);
		if($result->execute()) {

			$result->bind_result($table_recieved);

			if ($result->fetch()) {
				if ($table_recieved == $table) {
					
					if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['college']) && !empty($_POST['college']) && isset($_POST['phone']) && !empty($_POST['phone']) && isset($_POST['names'])  ) {

						$email = saviour($_POST['email']);
						$name = saviour($_POST['name']);
						$college = saviour($_POST['college']);
						$phone = intval(saviour($_POST['phone']));
						$names = saviour($_POST['names']);
						//$phones = saviour($_POST['phones']);

						//echo $email."|".$name."|".$college."|".$phone."|".$names."|";
						//echo 'aa';

						$con = mysql_connect("localhost", "gaganDTtrm", "gagan2805%CP") or  
					    die("Could not connect: " . mysql_error());  
					mysql_select_db("events_data"); 
					$query = sprintf("INSERT INTO %s VALUES( '%s', '%s', '%s', %d, '%s')",
		            mysql_real_escape_string($table),
		            mysql_real_escape_string($email),
		            mysql_real_escape_string($name),
		            mysql_real_escape_string($college),
		            mysql_real_escape_string($phone),
		            mysql_real_escape_string($names)); 
					$result = mysql_query($query); 

						//echo "INSERT INTO act VALUES('$email', '$name', '$college', $phone, '$names')";
						//$query    = "INSERT INTO act VALUES('$email', '$name', '$college', $phone, '$names')";
						//mysql_query($query) or trigger_error(mysql_error()." in ".$query);


						

						/*if ($result = $db->prepare("INSERT INTO act VALUES (?, ?, ?, ?, ?)")) {
						$result->bind_param('sssis', $email, $name, $college, $phone, $names);
							//echo 'alla';
						echo 'bb';
						$result->execute();
						}
						else {
							 $error = $db->errno . ' ' . $db->error;
							 echo $error;
						}

						echo 'a';*/
						 
						$_SESSION['forwaded_message'] = "Successfully Registered!";
						$_SESSION['name_of_tableww'] = '';
						header('Location: select_event.php');
					}
					else {
						$_SESSION['forwaded_message'] = "Information Incomplete! Please try again!";
						//$_SESSION['name_of_tableww'] = '';
						header('Location: team.php');
						//echo $_POST['email']."|".$_POST['name']."|".$_POST['college']."|".$_POST['phone']."|".$_POST['names']."|".$_POST['phones'];
					}
					
				}
			}
			else {
				$_SESSION['forwaded_message'] = "Event Invalid! Please try again!";
				//header('Location: selector.php');
				echo $_SESSION['forwaded_message'];
			}


			
		}
		
	}
	else {
		$_SESSION['forwaded_message'] = "Event Invalid! Please try again!";
		//header('Location: selector.php');
		echo $_SESSION['forwaded_message'];
	}





?>