<style type="text/css">
  p {
    font-family: arial;
    margin-left: 100px;
    margin-top: -20px;
  }

  form {
    display: inline-block;
    margin-left: 100px;

  }

  input:focus {
    background: #d0e6f5;
  }

  input {
    font-family: helvetica;
    font-size: 12px;
    padding: 10px;
    text-align: left !important;
  }

  #button{
    display: inline-block;
    padding:15px; 
    background-color:#0074cc;
    font-family:arial;
    font-weight:bold;
    color:#ffffff;
    border-radius: 5px;
    text-align:center;
    margin-top:2px;
  }

  #button:hover{

    cursor: pointer;
  }

  .list {
    font-family:arial;
    color:#0074cc;
    margin-left: 100px;
    overflow: hidden;
    width: 200px;
  }

  .list:hover {
    cursor: pointer;
  }

  .inst {
    text-align: left;
    width: 400px;
    margin-left: 350px;
    margin-top: -20px;
    position: absolute;
  }

</style> 
<div id="reg_event" class="container " data-pos="1"  style="position:relative;width: 100%;background: white; border: 1px solid black; border-bottom:none; overflow:hidden; margin-left:40%;">
  <h2 >Make a team</h2>

  <form name="checkListForm" action="#" style="margin-left: -9px !important ;background: transparent;">
    <select id="events" >
      <option value="">Choose an event:</option>
      <optgroup label="Technical">
        <option value="junk">Junkyard Wars</option>
        <option value="robo">RoboWars</option>
        <option value="IOT">IOT(Internet of things)</option>
        <option value="hurdle">Hurdle Rush</option>
        <option value="laser">LaserTag</option>
        <option value="line">Line follower</option>
        <option value="nirman">Nirman</option>
        <option value="biotech">Effective solutions for sustainable development</option>
      </optgroup>
      <optgroup label="Workshops">
        <option value="cloud">Cloud Computing</option>
        <option value="hacking">Ethical Hacking</option>
        <option value="3d">3D Animation</option>
        <option value="raceengg">Race Engineering</option>
      </optgroup>
      <optgroup label="Cultural">
        <option value="idol">Exodia Idol</option>
        <option value="sync">Synchronians</option>
        <option value="seno">Senorita Beauty Peagent</option>
        <option value="band">Band Slam</option>
        <option value="groove">Groove Fanatics</option>
        <option value="cotoure">Couture</option>
        <option value="street">Streek Soul</option>
        <option value="canvas">Canvas</option>
        <option value="surv">Survivor</option>
        <option value="liar">Biggest Liar</option>
      </optgroup>
      <optgroup label="Fray">
        <option value="csgo">Counter Strike</option>
        <option value="fifa">Fifa</option>
        <option value="nfs">NFS Most Wanted</option>
      </optgroup>
    </select><br><br>
    <input type="text" placeholder="Name of the team" id="tname" required name="">
    <input type="text" id="members" required="" placeholder="Enter email id of participant(as given at the time of registration)" ><br><br>
    <input type="button" value="Add participant" id="button"/>
    <input type="button" id="subTeam" value="Submit" />     
  </form>
  <br/>
  <div class="items">
    <div class="list"></div>
  </div>
<div id="log"></div>

</div>
<div id="reg_exist" class="container " data-pos="1"  style="position:relative;top: 0;width: 100%; background: white;border: 1px solid black; border-top:none; margin-left:40%;">
  <div id="refund">Review your college on <a href="http://www.careers360.com/colleges/reviews/write-review?referralcode=V59T4D" target="_blank">this</a> page and get a refund.(amount TBA) </div>
<h2 style="text-align: center;">Your teams</h2>
  <center>
    <?php
    session_start();
    $servername = "localhost";
    $username = "exodia";
$password = "Exodia@!2k17";
    if(isset($_SESSION['user'])){
      $usern = $_SESSION['user'];
      try {
        $conn = new PDO("mysql:host=$servername;dbname=exodia", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $conn->query("SELECT * FROM team_members where username='$usern'");
        $result = $sth->fetchAll(PDO::FETCH_BOTH);
        if($result){
          echo"<a href='https://www.thecollegefever.com/events/exodia-59cpkdHsPN'>Proceed to payment</a><br>";
        }
        foreach ($result as $col=>$val) {
          echo "Team name : ".$val["team_name"] . "<br>";

        }
        if(!$result){
          echo "You are currently not a member of any team.";
        }
      }
      catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
      }
    }else {
      die("Login to continue."); 
    }
    ?>
  </center>
<div id="reg-details" style="position: relative;bottom: 35%;left: 0%;color:red;display: inline-block;width:100%; height: 50px;clear:both; ">*Each participant of every team has to register individually. Payment will be done for a team by any one team member.<br>Technical Issue: Lakshay Arora: 7018367184/ Other Issue: Kislaya Mishra: 8629015413</div>
</div>
<Script>  
  
    
</Script>
</html>