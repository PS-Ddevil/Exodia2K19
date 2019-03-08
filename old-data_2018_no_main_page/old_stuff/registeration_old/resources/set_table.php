<?php

	session_start();

	if (isset($_POST['tname']) && !empty($_POST['tname'])) {
		$_SESSION['name_of_tableww'] = $_POST['tname'];
		echo 1;
	}


?>