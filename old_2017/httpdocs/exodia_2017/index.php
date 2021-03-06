<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EXODIA'17 IIT MANDI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/log_sign.css">
	<link rel="stylesheet" href="css_1/loader.css">
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">

	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Righteous');

		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both
		}

		@-webkit-keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInDown {
			-webkit-animation-name: fadeInDown;
			animation-name: fadeInDown
		}

		@keyframes fadeInUp {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}

			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInUp {
			-webkit-animation-name: fadeInUp;
			animation-name: fadeInUp
		}

		*, :after, :before {
			box-sizing: border-box
		}

		body, html {
			margin: 0;
			padding: 0;
			height: 100%;
		}

		body {
			width: 100%;
			position: relative;
			background: transparent !important; 
			color: #333;
			font-size: 15px
		}

		h1 {
			font-family: 'Righteous', cursive;
			font-weight: 700
		}
		h3 {
			font-family: Dosis, sans-serif;
			font-weight: 700
		}

		* {
			border-radius: 0!important
		}
		p{
			text-align: center;
			width: 40%;
			position: relative;
			padding-top: 3%;
			left:50%;
			top:30%;
			transform: translate(-50%,0);
			font-family: 'Aldrich', sans-serif;
			font-weight: 300;
			color: #000;
			font-size: 1.12vw;
		}

		.navbar {
			font-family: Dosis, sans-serif;
			font-weight: 700;
			position: absolute;
			width: 100%;
		}

		.navbar-inverse {
			margin-bottom: 0
		}

		.navbar-inverse .navbar-brand img {
			height: 250%;
			margin-top: -30%;
		}

		.header {
			vertical-align: middle;
			color: #000 !important;
		}

		.background-image {
			position: fixed;
			z-index: -1;
			top: 0;
			left: 0;
			background-repeat: no-repeat;
			min-width: 10000px;
			height: 100%;
			background-size: 100% 100%;
			background-position:0 0;
			// box-shadow: inset 0 0 0 1000px rgba(0,0,0,.2);
		}

		.home-content {
			position: relative;
			display: table-cell;
			vertical-align: middle
		}

		.event-details, .event-name {
			font-weight: 300
		}

		.event-name {
			margin: 2rem 0;
			font-size: 8rem;
			line-height: 6rem;
			font-weight: 400
		}

		.event-details {
			display: inline-block;
			margin-top: 30px;
			border: 2px solid #000;
			padding: 6px 15px
		}

		#countdown {
			position: relative;
			margin-top: 100px;
			display: block;
			overflow: hidden;
			text-align: center
		}

		.days, .hours, .minutes {
			border-right: 1px solid #000
		}

		.title {
			font-size: 14px;
			line-height: 22px;
			width: 100%;
			display: block;
			font-weight: 100;
			clear: both
		}

		.digit {
			font-size: 40px;
			line-height: 40px;
			font-weight: 300;
			height: 40px;
			display: inline-block;
			overflow: hidden;
			text-align: center;
			position: relative;
			vertical-align: middle
		}

		@media screen and (min-width: 767px) {
			.navbar-inverse {
				background: 0 0;
				border-bottom: 1px solid rgba(255, 255, 255, .25)
			}

			.navbar-inverse * {
				color: #000 !important
			}

			.navbar-inverse li {
				border-bottom: 1px solid rgba(255, 255, 255, 0);
				-webkit-transition: .3s ease;
				-moz-transition: .3s ease;
				-o-transition: .3s ease;
				transition: .3s ease
			}

			.navbar-inverse li:hover {
				border-bottom: 1px solid #000
			}

			h1{
				text-transform:uppercase;
			}

		}

		@media screen and (max-width: 767px) {
			.navbar-inverse ul.navbar-nav {
				text-align: center
			}
		}

		@media screen and (max-width: 767px) {
			.background-image {
				position: absolute
			}
		}
		*{
			margin: 0;
			padding: 0;
		}
		.scroll
		{
			position: fixed;
		}
		.fixed{
			position: fixed;
			top: 0;
			left: 0;
		}
		#pop{
			background: #fff;
			display: none;
			top: 200px;
			position: fixed;
			opacity: 1 !important;
			left: 800px;
		}
.tooltip{
     position:absolute;
    top:55%;
left:2%;
display:none;
height:auto;
width:100%;
padding:10px;
opacity:1 !important;
background:Red;
color:#fff;
}
	#hover{visibility:hidden;
	width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
	top: -5px;
    left: 105%;
}
	#referal:focus #hover{visibility:visible;};
	</style>
	<script type="text/javascript">
		<!--
		if (screen.width <= 800) {
			window.location = "http://www.exodia.in/m/";
		}
  //-->
</script>

</head>
<body style="height:700vw !important;">

	<div class="loader-wrapper">
		<div id="loader">E</div>
		<div id="loader">X</div>
		<div id="loader">O</div>
		<div id="loader">D</div>
		<div id="loader">I</div>
		<div id="loader">A</div>

		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>


	<nav class="navbar navbar-inverse navbar-static-top fixed">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" alt="exodia" class="img-responsive">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					
					<li>
						<a href="./schedule" data-scroll>SCHEDULE</a>
					</li>
					<li>
						<a href="#events" onclick="scroller(this.getAttribute('href'))" data-scroll>EVENTS</a>
					</li>
					
					<li>
						<a href="#gallery" onclick="scroller(this.getAttribute('href'))" data-scroll>GALLERY</a>
					</li>
					<li>
						<a href="#sap" onclick="scroller(this.getAttribute('href'))" data-scroll>SAP</a>
					</li>
					<li>
						<a href="#sponsors" onclick="scroller(this.getAttribute('href'))" data-scroll>SPONSORS</a>
					</li>
					<li>
						<a href="#workshops" onclick="scroller(this.getAttribute('href'))" data-scroll>WORKSHOPS</a>
					</li>
					<li>
						<a href="#team" onclick="scroller(this.getAttribute('href'))" data-scroll>TEAM</a>
					</li>
					<li>
						<a href="#register" onclick="scroller(this.getAttribute('href'))" data-scroll">REGISTER</a>
					</li>
					<?php 
					if(isset($_SESSION['name'])){ 
						$name = $_SESSION['name'];
						echo "<li style='border:none !important;'><a>$name</a></li><li style='border:none !important;'><a href='logout.php'>Logout</a></li>"; 
					}
					?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="header"> 
		<img class="background-image scroll" id ="data-bg" src="images/bg.png" />

		<img class="scroll" style="z-index: -2; max-height: 100%;background-color: #fff; left:0;" src="images/clouds.png" />

		<a href="workshops" style="position: fixed;" id="work"></a>
		<a href="events" id="even" style="position: fixed;"></a>
		<a href="#" onclick="POP()" id="reg" style="position: fixed;"></a>
		<a href="sap" id="sap" style="position: fixed;"></a>
		<a href="gallery" id="gall" style="position: fixed;"></a>
		<a href="#" id="hosp" style="position: fixed;"></a>
		<a href="sponsors" id="spon" style="position: fixed;"> </a>
		<a href="team" id="team" style="position: fixed;"></a>
		<div class="home-content text-center scroll" style="position: absolute;top:1.6%;left: 4%;">
			<div class="container">
				<h1 class="event-name wow fadeInDown">Exodia'17</h1>
				<h3 class="event-details wow fadeInUp">7-9 April, 2017 - IIT MANDI</h3>
				<div id="countdown" class="col-xs-12 col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-delay="1s" data-day="7" data-month="4" data-year="2017">
					<div class="days col-xs-3">.
						<div class="digit">0</div>
						<div class="digit">0</div>
						<span class="title">Days</span>
					</div>
					<div class="hours col-xs-3">
						<div class="digit">0</div>
						<div class="digit">0</div>
						<span class="title">Hours</span>
					</div>
					<div class="minutes col-xs-3">
						<div class="digit">0</div>
						<div class="digit">0</div>
						<span class="title">Minutes</span>
					</div>
					<div class="seconds col-xs-3">
						<div class="digit">0</div>
						<div class="digit">0</div>
						<span class="title">Seconds</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="home" class="scroll front" style="width: 750vw;">

		<div class="scrolled" id="e1" style="position: absolute;left: 135vw;top: 25vh;"></div>
           <!-- <div class="scrolled" id="events" style="position: absolute;left: 80vw;top: 25vh;"> 1690
                <h1 style="text-align: center;" id="eve">EVENTS</h1>
                <p>We invite you to hammer your brains in the web of events which seek the best of the brains and talents out there. Get ready and think hard to aim for top slot in the over awesome events of this edition.</p>
                <br>
                <p><a class="btn btn-primary btn-lg" href="coming-soon" role="button">COMING SOON »</a></p>
            </div>
            
             <div class="scrolled" id="register" style="position: absolute;left: 200vw;top: 25vh;">           
                <h1 style="text-align: center;">REGISTER</h1>
                <p style="width:80%;"">Register to be able test yourself along with the best of the lot in the over whelming events that will be on.</p>
                <br>
                <p><a class="btn btn-primary btn-lg" href="coming-soon" role="button">COMING SOON »</a></p>   
            </div>
            <div class="scrolled" id="team1" style="position: absolute;left: 300vw;top: 25vh;">
                <h1 style="text-align: center;">TEAM</h1>
                <p style="width:100%;">The brains behind the scenes of this awesome event this time.</p>
                <br>

                <br>
                <p><a class="btn btn-primary btn-lg" href="team" role="button">SEE 'EM! »</a></p>
            </div>
            <div class="scrolled" id="gallery" style="position: absolute;left: 350vw;top: 25vh;">           
                <h1 style="text-align: center;">GALLERY</h1>
                <p>Sooth your curiousness about how hot to expect it to be. Divulge in the shoots from last year from the various glazing and smoking events. Just remind yourself that this time it's going to be bigger.</p>
                <br>
                <p><a class="btn btn-primary btn-lg" href="gallery" role="button">EXPLORE MORE »</a></p>   
            </div>
            <div class="scrolled" id="sap" style="position: absolute;left: 450vw;top: 25vh;">
                <h1 style="text-align: center;">SAP</h1>
                <p>Ever wanted to be a part of the organizing team for fests in your college ? (if you are already one, even better !) This is YOUR chance to join hands with the IIT Mandi EXODIA team and become the official representative of your college. </p>
                <br>
                <p><a class="btn btn-primary btn-lg" href="sap" role="button">JOIN NOW »</a></p>
            </div>
             <div class="scrolled" is="sponsors" style="position: absolute;left: 600vw;top: 25vh;">           
                <h1 style="text-align: center;">SPONSORS</h1>
                <p style="width: 100%;">The ones that made it all possible. The rich guys!</p>
                <br>
                <p><a class="btn btn-primary btn-lg" href="sponsors" role="button">FIND OUT WHO »</a></p>   
            </div>
        
            <div class="scrolled" id="workshops" style="position: absolute;left: 650vw;top: 25vh;">
                <h1 style="text-align: center;">WORKSHOPS</h1>
                <p>Inquistive for the latest technology and want to learn and have a go at them? Yes? Then workshops here bring you hands on with them under the expertise of some renowned professionals.</p>
                <br>
                <p><a class="btn btn-primary btn-lg" href="coming-soon" role="button">COMING SOON »</a></p>
            </div>
            <div class="scrolled" style="position: absolute;left: 12000px;top: 25vh;">
                <h1 style="text-align: center;">CONTACT US</h1>
                <br>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">COMING SOON »</a></p>
            </div>-->
        </div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <DIV id="pop" class="fixed" style="background:transparent;">
        	<?php

        	if(!isset($_SESSION['user'])){
        		?>
        		<div class="cotn_principal">
        			<div class="cont_centrar">

        				<div class="cont_login">
        					<div class="cont_info_log_sign_up tbrem">
        						<div class="col_md_login">
        							<div class="cont_ba_opcitiy">

        								<h2>LOGIN</h2>
        								<p>Login if you have already registered.</p> 
        								<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
        							</div>
        						</div>
        						<div class="col_md_sign_up">
        							<div class="cont_ba_opcitiy">
        								<h2>SIGN UP</h2>
        								<p>Register.</p>

        								<button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
        							</div>
        						</div>
        					</div>
        					<div class="cont_forms" id="signup">
        						<div class="cont_form_login" >
        						

        						<input type="email" placeholder="Email" id="username" required />

        							<input type="password" placeholder="Password" id="passWord" required/>
        							<button class="btn_login" id="logBT" onclick="cambiar_login()">LOGIN</button>
        							<div class="msg"></div>	
        						</div>

        						<div class="cont_form_sign_up tbexpan" style="" >

        							<input type="name" id="name" placeholder="Name" onblur="redify(this)" required="" style="margin-bottom: : 10px !important;"/>
        							<input type="email" id="regname" placeholder="Email" onblur="redify(this)" required="" style="margin-bottom: : 10px !important;"/>
        							<input type="password" id="regpassw" placeholder="Password" required="" />
        							<input type="password" id="cregpassw" placeholder="Confirm Password" required/>
        							<input type="text" id="coll_name" required onblur="redify(this)" placeholder="College Name" style="margin-bottom: : 10px !important;"/>
									<span class="tooltip" id="ttip"><a href="#" style="position:absolute;right:2%;top:5%;" onclick="this.parentElement.style.display='none'">X</a>If you are referred by a Student ambassador then write his/her name otherwise leave it blank</span>
        							<input type="text" id="referal" placeholder="Student ambassador name, if referred" onfocus="document.getElementById('ttip').style.display='inline-block'">
									<input type="text" id="phoneNo" onblur="redify(this)" required placeholder="Phone number">
        							<button class="btn_sign_up" id='regBT'>SIGN UP</button>
        							<div class="msg"></div>
        						</div>


        					</div>

        				</div>
        				
        			</div>

        		</div>

        		<?php
        	}else {
        		?>
        		<script type="text/javascript">
        			$("#pop").css({"top":"20%","left":"20%","width":"30%"});
        			$("#pop").load("reg/index.php");
        		</script>
        	<?php

        	}
        	?>

        </DIV>
        <a href="https://www.znetlive.com"><img src="images/spon/znet.png" style="position: fixed; width:10%; bottom:0; right: 0;"/></a>
        
        <script type="text/javascript" src="js/jquery.jInvertScroll.js"></script>
        <script>
        	var mul = 0;
        	(function($) {
        $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
        {
            height: 'auto',                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                //$(".fixed").animate();
            }
        });
    }(jQuery));

        	var a = document.getElementsByClassName("scrolled");
        	for (var i = 0; i < a.length; i++) {
        		a[i].style.height =document.body.clientHeight;
        	}
        	function scroller(e){
        		mul = ($("#e1").position().left)/135;
        		var map = {"events" : 200,"register":268,"team":900,"gallery":445,"sap":320,"sponsors":635,"workshops":100};
        		$("html, body").animate({ scrollTop: (map[e.split('#')[1]])*(mul) });
            //$(window).scrollTop((map[e.split('#')[1]])*(mul));
        }
        
        $(document).ready(function() {
        	wwh = {wx: $("#data-bg").width(),w :$("#data-bg").width(), h:$("#data-bg").height(),sc:$("body").scrollTop()};
        	$("#work").offset({top: wwh.h * .14 + wwh.sc, left: wwh.w *.17 });
        	$("#work").width(wwh.w * .025);
        	$("#work").height(wwh.h * .075);

        	$("#even").offset({top: wwh.h * 13/28.3 + wwh.sc, left: wwh.w *106/352.73 });
        	$("#even").width(wwh.w * .02);
        	$("#even").height(wwh.h * .07);

        	$("#reg").offset({top: wwh.h * 13/28.3 + wwh.sc, left: wwh.w *133/352.73 });
        	$("#reg").width(wwh.w * 8/352.73);
        	$("#reg").height(wwh.h * 2/28.3);

        	$("#sap").offset({top: wwh.h * 15/28.3 + wwh.sc, left: wwh.w *161/352.73 });
        	$("#sap").width(wwh.w * 3/352.73);
        	$("#sap").height(wwh.h * 3/28.3);

        	$("#gall").offset({top: wwh.h * 17/28.3 + wwh.sc, left: wwh.w *213/352.73 });
        	$("#gall").width(wwh.w * 11/352.73);
        	$("#gall").height(wwh.h * 2/28.3);

        	$("#hosp").offset({top: wwh.h * 4/28.3 + wwh.sc, left: wwh.w *253/352.73 });
        	$("#hosp").width(wwh.w * 18/352.73);
        	$("#hosp").height(wwh.h * 2.5/28.3);

        	$("#spon").offset({top: wwh.h * 4/28.3 + wwh.sc, left: wwh.w *295/352.73 });
        	$("#spon").width(wwh.w * 10/352.73);
        	$("#spon").height(wwh.h * 2/28.3);

        	$("#team").offset({top: wwh.h * 13/28.3 + wwh.sc, left: wwh.w *338/352.73 });
        	$("#team").width(wwh.w * 9/352.73);
        	$("#team").height(wwh.h * 3/28.3);
        	$(window).scroll(function(){
        		wwh.w=$("#data-bg").offset().left;
        		
        		//alert(wwh.w);
        		$("#work").offset(function(){
        			return {left : wwh.w+(wwh.wx*.17) , top:$(this).offset().top};
        		});
        		$("#even").offset(function(){
        			return {left : wwh.w+(wwh.wx*106/352.73) , top:$(this).offset().top};
        		});
        		$("#reg").offset(function(){
        			return {left : wwh.w+(wwh.wx*133/352.73) , top:$(this).offset().top};
        		});
        		$("#sap").offset(function(){
        			return {left : wwh.w+(wwh.wx*161/352.73) , top:$(this).offset().top};
        		});
        		$("#gall").offset(function(){
        			return {left : wwh.w+(wwh.wx*213/352.73) , top:$(this).offset().top};
        		});
        		$("#hosp").offset(function(){
        			return {left : wwh.w+(wwh.wx*253/352.73) , top:$(this).offset().top};
        		});
        		$("#spon").offset(function(){
        			return {left : wwh.w+(wwh.wx*295/352.73) , top:$(this).offset().top};
        		});
        		$("#team").offset(function(){
        			return {left : wwh.w+(wwh.wx*338/352.73) , top:$(this).offset().top};
        		});
        	});

        });
	

	
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/log_sign.js"></script>
<script src="reg.js"></script>
</body>
</html>
