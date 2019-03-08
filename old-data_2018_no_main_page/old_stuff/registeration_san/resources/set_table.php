<?php

	session_start();

	if (isset($_POST['tname']) && !empty($_POST['tname'])) {
		$_SESSION['name_of_tableww'] = $_POST['tname'];

		  if ($_POST['tname'] == "con") {
		    $_SESSION['name_value'] = "Conundrum";
		  }
		  else if ($_POST['tname'] == "dem") {
		    $_SESSION['name_value'] = "Dementia";
		  }
		  else if ($_POST['tname'] == "emp") {
		    $_SESSION['name_value'] = "Eniginners Emporium";
		  }
		  else if ($_POST['tname'] == "gal") {
		    $_SESSION['name_value'] = "Gallileon";
		  }
		  else if ($_POST['tname'] == "hur") {
		    $_SESSION['name_value'] = "Hurdle Rush";
		  }
		  else if ($_POST['tname'] == "ipl") {
		    $_SESSION['name_value'] = "IPL Auction";
		  }
		  else if ($_POST['tname'] == "jun") {
		    $_SESSION['name_value'] = "Junkyard Wars";
		  }
		  else if ($_POST['tname'] == "lin") {
		    $_SESSION['name_value'] = "Line Follower";
		  }
		  else if ($_POST['tname'] == "nit") {
		    $_SESSION['name_value'] = "RC Nitro Car"; 
		  }
		  else if ($_POST['tname'] == "rob") {
		    $_SESSION['name_value'] = "Robo Wars";
		  }
		  else if ($_POST['tname'] == "via") {
		    $_SESSION['name_value'] = "Viaduct";
		  }
		  else if ($_POST['tname'] == "zen") {
		    $_SESSION['name_value'] = "Zenith Horizon";
		  }
		  else if ($_POST['tname'] == "art") {
		    $_SESSION['name_value'] = "Art of Design";
		  }
		  else if ($_POST['tname'] == "ban") {
		    $_SESSION['name_value'] = "Band Slam";
		  }
		  else if ($_POST['tname'] == "can") {
		    $_SESSION['name_value'] = "Canvas";
		  }
		  else if ($_POST['tname'] == "cou") {
		    $_SESSION['name_value'] = "Couture";
		  }
		  else if ($_POST['tname'] == "ido") {
		    $_SESSION['name_value'] = "Exodia Idol";
		  }
		  else if ($_POST['tname'] == "fil") {
		    $_SESSION['name_value'] = "Fill with Feel";
		  }
		  else if ($_POST['tname'] == "fac") {
		    $_SESSION['name_value'] = "Game of Streets(Dance Faceoff)";
		  }
		  else if ($_POST['tname'] == "gro") {
		    $_SESSION['name_value'] = "Groove Fanatics";
		  }
		  else if ($_POST['tname'] == "lan") {
		    $_SESSION['name_value'] = "Landscape Photography";
		  }
		  else if ($_POST['tname'] == "por") {
		    $_SESSION['name_value'] = "Portrait Photography";
		  }
		  else if ($_POST['tname'] == "rea") {
		    $_SESSION['name_value'] = "React and Act";
		  }
		  else if ($_POST['tname'] == "str") {
		    $_SESSION['name_value'] = "Street Soul";
		  }
		  else if ($_POST['tname'] == "syn") {
		    $_SESSION['name_value'] = "Synchronians";
		  }
		  else if ($_POST['tname'] == "ima") {
		    $_SESSION['name_value'] = "Imagination";
		  }
		  else if ($_POST['tname'] == "mov") {
		    $_SESSION['name_value'] = "Short Movie Making";
		  }
		  else if ($_POST['tname'] == "doo") {
		    $_SESSION['name_value'] = "Doodle";
		  }

		echo 1;
	}


?>