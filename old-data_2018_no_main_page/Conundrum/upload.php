<!DOCTYPE html>
<?php
session_start();
 $user=$_SESSION['userid'];
  $db = mysqli_connect('localhost','conundrum','halla123ppp@@@SS','Conundrum')
 or die('Error connecting to MySQL server.');
?>
<html>

<head>
		<title><?php echo $user; ?></title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
    Select File to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>
<?php
if(isset($_POST["submit"])) 
{
	$target_dir = "";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($_FILES["fileToUpload"]["type"] == "text/csv") {
        $uploadOk = 1;
    } else {
        echo $_FILES["fileToUpload"]["type"];
        $uploadOk = 0;
    }

if($imageFileType != "csv" && $imageFileType != "CSV" ) {
    echo "Sorry, only CSV files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    } 
}
$result=exec('python3 calculate.py '.$_FILES["fileToUpload"]["name"]);
if ($result!='File format incorrect')
{
	$val = floatval($result);
	$query="update main set score= $val where Username='$user';";
	mysqli_query($db, $query) or die('Error querying database.');	
}
$query="select Username, score from main where score>0 order by score desc;";
$result=mysqli_query($db, $query) or die('Error querying database.');
while($row=mysqli_fetch_array($result)){
	echo "</br>    ".$row['Username']."      ".$row['score']."</br>";
}
}
?>
</body>
</html>
