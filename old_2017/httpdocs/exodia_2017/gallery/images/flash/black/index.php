<?php

$servername = "localhost";
$username = "exodia";
$password = "Exodia@!2k17";

$conect=mysqli_connect("localhost","exodia","Exodia@!2k17", "exodia") or die(mysql_error());
$check=mysqli_query($conect, "SELECT username,coll_name FROM exodia") or die(mysql_error());
$check2=mysqli_query($conect, "SELECT team_name,username FROM team_members") or die(mysql_error());
$check3=mysqli_query($conect, "SELECT team_name,username FROM teams") or die(mysql_error());
?>
	<!DOCTYPE html>
		<html>
		<head>
			<title>ha ha</title>
		</head>
		<style>
			table, th, td {

			    border: 1px solid white;
			    border-collapse: collapse;
				font:16px arial;
			}
		</style>
		<body style="text-align:left;color:white;background:black">
		<h1><b>LIST ONE</b></h1>
		<table>
			  <tr>
				   <td style="border-collapse:separate;"><b>s.no.</b></td>
				  <td style="border-collapse:separate;"><b>email</b></td>
				  <td style="border-collapse:separate;"><b>college</b></td> 
			  </tr>

			<?php
			$count=0;
			while($col=mysqli_fetch_array($check)){
			?>
			  <tr>
				  <td><?php
					echo $count++;
				?></td>
			    <td><?php
					echo $col['username'];
				?></td>
			    <td><?php
					echo $col['coll_name'];
				?></td> 
			  </tr>
			<?php
			}
			?>
			</table>
			<p style=" font:30px arial;"><b>LIST TWO</b></p>
			<table>
				  <tr>
					   <td style="border-collapse:separate;"><b>s.no.</b></td>
					  <td style="border-collapse:separate;"><b>team name</b></td>
					  <td style="border-collapse:separate;"><b>email</b></td> 
				  </tr>

				<?php
				while($col2=mysqli_fetch_array($check2)){
				?>
				  <tr>
					  <td><?php
					echo $count++;
					?></td>
				    <td><?php
						echo $col2['team_name'];
					?></td>
				    <td><?php
						echo $col2['username'];
					?></td> 
				  </tr>
				<?php
				}
				?>
			</table>
			<p style=" font:30px arial;"><b>LIST THREE</b></p>
			<table>
				  <tr>
					   <td style="border-collapse:separate;"><b>s.no.</b></td>
					  <td style="border-collapse:separate;"><b>team name</b></td>
					  <td style="border-collapse:separate;"><b>email</b></td> 
				  </tr>

				<?php
				while($col3=mysqli_fetch_array($check3)){
				?>
				  <tr>
					  <td><?php
					echo $count++;
					?></td>
				    <td><?php
						echo $col3['team_name'];
					?></td>
				    <td><?php
						echo $col3['username'];
					?></td> 
				  </tr>
				<?php
				}
				?>
			</table>
		</body>
		</html>
<?php


?>