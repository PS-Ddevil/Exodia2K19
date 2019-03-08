<!DOCTYPE html>
<?php
session_start();
 $db = mysqli_connect('localhost','conundrum','halla123ppp@@@SS','Conundrum')
 or die('Error connecting to MySQL server.');
?>
<html>
<head>
<title>SignIn</title>
<style>
  
  input, .company{
    -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
    border-radius: 40px;
    font-size: 15px;
    padding:10px;
    width: 300px;
    height: 24px;
    position: absolute;
    display: block;
    text-align: center;
    background: #4e4c59;
    border-style: none;
    color: white; 
  }
  .left{
      margin-left: 300px;
      margin-top: 100px;
  }
  .Right{
      margin-left: 900px;
      margin-top: -300px;
  }
  button{
    webkit-border-radius: 80px;
        -moz-border-radius: 80px;
        border-style: none;
    border-radius: 20px;
    font-size: 15px;
    padding:10px;
    width: 320px;
    height: 50px;
    position: absolute;
    display: block;
    margin-left: 0px;
    text-align: center;
    margin-top: 40px;
    background:  #ed1c2a;
    color: white; 
  }
</style>
</head>
<body>
  <div class="box">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <div class="left">
      <input type="text" placeholder="Username" name="first"/>
      </br></br></br>
      <input type="password" placeholder="Password" name="pass"/>
      </br></br></br>
      <input type="text" placeholder="E-mail Address" name="email"/>
      </br></br></br>
      <input type="text" placeholder="College" name="college"/>
      </br></br></br>
      <button type="submit" name="submit">Sign Up</button>
    </form>
  </div>




  <div class="box">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <div class="Right">
      <input type="text" placeholder="Username" name="first_sign"/>
      </br></br></br>
      <input type="password" placeholder="Password" name="pass_sign"/>
      </br></br></br>
      <button type="submit" name="submit_sign">Sign In</button>
    </form>
  </div>
<?php
if(isset($_POST['submit']))
{
  echo "1";
$Uname=$_POST['first'];
$Pass=$_POST['pass'];
$Email=$_POST['email'];
$College=$_POST['college'];
$query1 = "insert into main values('$Uname','$Pass',NULL,'$Email','$College');";
//echo $query1;
mysqli_query($db, $query1) or die('Error querying database.');
mysqli_close($db);
$_SESSION['userid']=$Uname;
header("location:upload.php");
}
if(isset($_POST['submit_sign']))
{
  $Uname=$_POST['first_sign'];
  $Pass=$_POST['pass_sign'];
  $query="select Username,password from main where Username='$Uname' and password='$Pass'; ";
  $result = mysqli_query($db,$query)or die("Can't Connect".mysqli_error());
  $num_row = mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
  mysqli_close($db);
  echo $num_row;
  if( $num_row ==1 )
     {
      echo "Yo!";
 $_SESSION['userid']=$Uname;
 header("Location:upload.php");
  }
}
?>

</body>
</html>
