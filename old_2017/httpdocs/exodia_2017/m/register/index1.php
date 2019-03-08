<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
</head>
<style type="text/css">
	.body{
		background:#F5F5F5;
	}
	
	.loginrhomb,.signuprhomb,.teamrhomb{
		padding:20px 0px 20px 15px;
		margin:100px auto auto auto;
		background: #BDC3C6;
		width: 320px;
		height:auto;
		color:#F95706;
		font:16px arial;
		display:block;
		border-radius: 5px;
		box-shadow: 0 5px 10px 1px #CDD1D3;
	}
	.signuprhomb{
		display: none;
	}
	.teamrhomb{
		display: none;
	}
	input[type=text],input[type=password],input[type=email],input[type=number],select{
		margin-top: 20px;
		border:0px solid #AB987A;
		background:#F5F5F5;
		width:300px;
		color: #0F1626;
		font:17px helvetica;
		padding:5px 10px;
		box-sizing: border-box;
	}
	.login-button{
		background-color: #339193;
		border:1px solid #339193;
		width:300px;
		margin-top: 20px;
		padding: 5px 10px;
		text-align: center;
		font:20px helvetica;
		color:white;
		cursor: pointer;
		outline: none;
		box-sizing: border-box;
	}
	#sign_up,#log_in{
		cursor: pointer;
	}
	.checkbox-round {
    width: .8em;
    height: .8em;
    border:2px solid white;
    background-color: white;
    box-shadow: 0px 0px 0px 1px #0F1626;
    vertical-align: middle;
    -webkit-appearance: none;
    appearance:none;
    outline: none;
    cursor: pointer;
    opacity: .7
}

.checkbox-round:checked {
	outline: none;
	border:2px solid white;
    background-color: #0F1626;
    opacity: .7;
    box-shadow: 0px 0px 0px 1px #0F1626;
    box-sizing: border-box;
}
#email_list{
	box-shadow: 0 2px 2px 1px #CEC3B2;
	margin-top:5px;
	margin-bottom: 15px;
	padding-bottom: 0px;
	width:300px;
	border: 1px solid #AB987A;
	border-top:0;
	background: #F5F5F5;
	box-sizing: border-box;
	display: none;
}
.emails{
	padding:5px;
	cursor:pointer;
	list-style-type: none;
	color: grey;
}
.email_cross{
	float:right;
	color:red;
	font-family: arial;
}
</style>
<body>
	<?php if(!isset($_SESSION['user'])){
	?>
<div class="loginrhomb">
	<form>
		<input type="text" name="login_email" id="username" placeholder="Email">
		<input type="password" name="login_pass" id="passWord" placeholder="Password">
		<input type="submit" name="login" class="login-button" id="logBT">
		<p id="sign_up"><b><u>Sign Up</u></b></p>
	</form>
</div>
<div class="signuprhomb">
	<form>
		<input type="text" name="name" id="name" placeholder="Name" required>
		<input type="email" name="Email" id="regname" placeholder="Email" required>
		<input type="password" name="password" id="regpassw" placeholder="Password" required>
		<input type="password" name="conf_pass" id="cregpass" placeholder="Confirm Password" required>
		<input type="text" name="college_name" id="coll_name" placeholder="College Name" required>
		<input type="text" name="ref_code" id="referal"  placeholder="Referral Code">
		<input type="number" name="phone" id="phoneNo" placeholder="Phone Number" required>
		
	</form>
	<button id="regBT" class="login-button">Sign Up</button>
	<p id="log_in"><b><u>Log in</u></b></p>
</div>
	<?php
	}else{
echo<<___
<script>
$("#pop").load("/reg/index.php");
</script>	
?>
<div class="teamrhomb">
	<form>
		<select name="event_sel" >
			
			<optgroup style="background:#BDC3C6 " label="Technical"></optgroup>
		    	<option value="junkyard">Junkyard Wars</option>
		    	<option value="robowars">RoboWars</option>
		    	<option value="iot">Internet Of Things</option>
		    	<option value="hurdle">Hurdle Rush</option>
		    	<option value="dumpit">Dump it</option>
		    	<option value="lasertag">LaserTag</option>
		    	<option value="linefollower">Line Follower</option>
		    	<option value="nirman">Nirman</option>
	    	</optgroup>
	    	<optgroup style="background:#BDC3C6 " label="Cultural"></optgroup>
		    	<option value="idol">Exodia Idol</option>
		    	<option value="sync">Synchronians</option>
		    	<option value="bandslam">Band Slam</option>
		    	<option value="groove">Groove Fanatics</option>
		    	<option value="couture">Couture</option>
		    	<option value="bigstink">Big Stink</option>
		    	<option value="canvas">Canvas</option>
		    	<option value="survivor">Survivor</option>
		    	<option value="biggestliar">Biggest Liar</option>
	    	</optgroup>
	    	<option value="Choose" selected="selected" disabled="disabled">Choose an event</option>
	    </select>
		<input type="text" name="team_name" placeholder="Name of the team">
		<input id="enter_email" type="text" name="parti_email" placeholder="Email of participant(s)">
		<button type="button" class="login-button" style="margin-top: 5px;margin-bottom: 15px" id="parti_em">Add Participant</button>
		<div id="email_list">
		</div>
		<input class="checkbox-round" id="acomo" type="checkbox" name="acom" value="acomo" unchecked>
		<span><u>I want accomodation(1200INR for 3 days)</u></span>
		<input type="submit" class="login-button">
		
	</form>
	<p id="log_in"><b><u>Log in</u></b></p>
</div>

<div id="pop" style="position:absolute !important;left:-10% !important;top:2% !important;width:90%;important;height:auto;margin-bottom:2%;background:#fff;">
<div class="msg"></div>
</div>
<?php
}
?>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/reg.js"></script>
<script type="text/javascript">
	$("#sign_up").click(function(){
		$(".loginrhomb").hide();
		$(".signuprhomb").fadeIn(50);
		
	});
	$("#log_in").click(function(){
		$(".signuprhomb").hide();
		$(".loginrhomb").fadeIn(50);
		
	});
</script>
</body>
</html>
