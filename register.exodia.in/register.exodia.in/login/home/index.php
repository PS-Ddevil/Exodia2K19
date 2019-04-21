<?php
require __DIR__ . '/vendor/autoload.php';
$db = new \Delight\Db\PdoDsn('mysql:dbname=login;host=localhost;charset=utf8mb4', 'login_exodia', 'root@exodia12345');
$auth = new \Delight\Auth\Auth($db);
if($auth->isLoggedIn()){
    echo '
<!DOCTYPE html>
<html lang="en">
<head>
<title>Events @Exodia 19</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="icon" href="https://www.exodia.in/img/favicon.ico">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style>
    #overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 15;
        cursor: pointer;
    }

    #text {
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 15px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color: white;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
    }
</style>
</head>
<body onload="on()">
<div id="overlay" onclick="off()">
    <div id="text"><a href="./event.jpg"><img src="./event.jpg" height="480" width="320"></a><br><string>* Remaining events are free of cost<br>* Accomodation - @Rs.1200/head (3 Days)<br><center><i class="fa fa-close fa-2x" style="color:red"></i><center></div>
</div>
<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="https://www.exodia.in"><img src="images/exologo.png" height="70px"></a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li class="active"><a href="https://www.exodia.in">Home</a></li>
									<li><a href="https://www.exodia.in/T&C.pdf">T&C</a></li>
									<li><a href="https://register.exodia.in/success/logout.php">Logout</a></li>
									<li><a href="#contact">Contact</a></li> 
								</ul>
							</nav>
							<div class="header_phone ml-auto">Email us: publicity@exodia.in</div>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="https://www.facebook.com/Exodia.IITMandi/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/exodia_iitmandi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="https://www.exodia.in"><img src="images/exologo.png" height="70px"></a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
                <li class="active"><a href="https://www.exodia.in">Home</a></li>
                <li><a href="https://www.exodia.in/T&C.pdf">T&C</a></li>
				<li><a href="https://register.exodia.in/success/logout.php">Logout</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto">Email us: publicity@exodia.in</div>
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="https://www.facebook.com/Exodia.IITMandi/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/exodia_iitmandi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider.jpg);"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Remake the Rapture</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Remake the Rapture</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Remake the Rapture</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="home_page_nav">
				<ul class="d-flex flex-column align-items-end justify-content-end">
					<li ><a href="#" data-scroll-to="#destinations" style="font-weight: 1000; font-size: 25px">Events</a></li>
					<li style="color:red;"><a href="#" data-scroll-to="#testimonials" style=" font-weight: 1000; font-size: 25px">Testimonials</a></li>
					<li style="color:red;"><a href="#" data-scroll-to="#news" style="font-weight: 1000; font-size: 25px">Videos</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="intro_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_container">
						<div class="row">

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="images/beach.jpg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Cultural Events</div>
										<div class="intro_subtitle"><p>15+ events</p></div>
									</div>
								</div>
							</div>

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="images/wallet.png" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Technical Events & Workshops</div>
										<div class="intro_subtitle"><p>25+ events</p></div>
									</div>
								</div>
							</div>

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="images/suitcase.jpg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Online Events</div>
										<div class="intro_subtitle"><p>10+ events</p></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>
	<center><div class="section_title"><h2><a href="https://register.exodia.in/success/?manager=hospitality&event=Accomodation"> Accomodation Only?</a></h2></div></center>
	<!-- Destinations -->

	<div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">Events List</div>
					<div class="section_title"><h2>Cultural Events</h2></div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/band1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Band Slam</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Band_Slam">Register here</a></div>
							</div>
						</div>

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/sing1.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Exodia Idol</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Exodia_Idol">Register here</a></div>
							</div>
                        </div>
                        
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/rap-1.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Rap Battle</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Rap_Battle">Register here</a></div>
							</div>
						</div>
                            
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/solo1.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Groove Fanatics</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Groove_Fanatics">Register here</a></div>
							</div>
						</div>
                            
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/sync1.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Synchronians</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=synchronians">Register here</a></div>
							</div>
						</div>
                        
                        <div class="destination item">
                            <div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/drama1.jpg" height="263" alt=""></center>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="https://www.exodia.in/events">Street Play</a></div>
                                <div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=street_play">Register here</a></div>
                            </div>
                        </div>

                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/street.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Game of Street</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Game_Of_Street">Register here</a></div>
							</div>
						</div>
                            
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/monoact1.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Mono Act</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Mono_Act">Register here</a></div>
							</div>
						</div>
                            
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/canvas1.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Canvas</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Canvas">Register here</a></div>
							</div>
						</div>
                        
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/open-2.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Open Mic</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Open_Mic">Register here</a></div>
							</div>
                        </div>
                        
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/fashion1.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Couture</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=couture">Register here</a></div>
							</div>
                        </div>
                        
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/face-2.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Face Painting</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Face_Painting">Register here</a></div>
							</div>
                        </div>
                        
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/live-2.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Live Sketching</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Live_Sketching">Register here</a></div>
							</div>
						</div>

                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/landscape1.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Landscape Photography</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=landscape_photography">Register here</a></div>
							</div>
						</div>
                        
                        <div class="destination item">
							<div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/potrait1.jpg" height="263" alt=""></center>
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Portrait Photography</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=portrait_photography">Register here</a></div>
							</div>
                        </div>  
                        
                        <div class="destination item">
                            <div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/write-1.jpg" height="263" alt=""></center>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="https://www.exodia.in/events">Creative Writing</a></div>
                                <div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Creative_Writing">Register here</a></div>
                            </div>
                        </div>  
                        <div class="destination item">
                            <div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/bee-2.jpg" height="263" alt=""></center>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="https://www.exodia.in/events">Spell Bee</a></div>
                                <div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Spell_Bee">Register here</a></div>
                            </div>
                        </div>
                        <div class="destination item">
                            <div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/liar-1.jpg" height="263" alt=""></center>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="https://www.exodia.in/events">Biggest Liar</a></div>
                                <div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Biggest_Liar">Register here</a></div>
                            </div>
                        </div>
                        <div class="destination item">
                            <div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/survive-1.jpg" height="263" alt=""></center>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="https://www.exodia.in/events">Survivor</a></div>
                                <div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Survivor">Register here</a></div>
                            </div>
                        </div>
                        <div class="destination item">
                            <div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/congress-2.jpg" height="263" alt=""></center>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="https://www.exodia.in/events">Youth Parliament</a></div>
                                <div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Youth_Parliament">Register here</a></div>
                            </div>
                        </div>
                        <div class="destination item">
                            <div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/india.jpg" height="263" alt=""></center>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="https://www.exodia.in/events">India Quiz</a></div>
                                <div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=India_Quiz">Register here</a></div>
                            </div>
                        </div>
                        <div class="destination item">
                            <div class="destination_image">
                                <center><img src="https://www.exodia.in/events/img/events/sports_1.jpg" height="263" alt=""></center>
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="https://www.exodia.in/events">Sports Quiz</a></div>
                                <div class="destination_price"><a href="https://register.exodia.in/success/?manager=cultural&event=Sports_Quiz">Register here</a></div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
<!--					<div class="section_subtitle">Events List</div>-->
					<div class="section_title"><h2>Technical Events</h2></div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/dementia1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Dementia</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=dementia">Register here</a></div>
							</div>
                        </div>
                        
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/conundrum-2.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Conundrum</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=Conundrum">Register here</a></div>
							</div>
						</div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/debug-1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">D3Bug</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=D3BUG">Register here</a></div>
							</div>
						</div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/war-1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Robo Wars</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=Robowars">Register here</a></div>
							</div>
						</div>
						<div class="destination item">
							<div class="destination_image">
								<img src="https://s3-ap-southeast-1.amazonaws.com/events-exodia/events/drone-1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Drone Racing</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=Drone-Racing">Register here</a></div>
							</div>
						</div>
        
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/line.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Line Follower</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=line_follower">Register here</a></div>
							</div>
						</div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/junk1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">JunkYard Wars</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=JunkyardWars">Register here</a></div>
							</div>
						</div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/nitro3.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Nitro Car Racing</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=NitroCarRacing">Register here</a></div>
							</div>
						</div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/bridge3.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Viaduct</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=viaduct">Register here</a></div>
							</div>
						</div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/cad-1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">CADx</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=CADx">Register here</a></div>
							</div>
                        </div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/quizzar-1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Quizzar</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=Quizzar">Register here</a></div>
							</div>
                        </div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/auction1-min.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">IPL Auction</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=technical&event=IPL_Auction">Register here</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
<!--					<div class="section_subtitle">Events List</div>-->
					<div class="section_title"><h2>Online Events</h2></div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/doodle2.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Doodle</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=online&event=Doodle">Register here</a></div>
							</div>
						</div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/ps1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Pace A Patch</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=online&event=Pace_A_Patch">Register here</a></div>
							</div>
						</div>
                       <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/pic1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">I-Magination</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=online&event=I-Magination">Register here</a></div>
							</div>
                        </div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://www.exodia.in/events/img/events/tele-1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/events">Zenith Horizon</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=online&event=Zenith_Horizon">Register here</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
<!--					<div class="section_subtitle">Events List</div>-->
					<div class="section_title"><h2>Workshop</h2></div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">

						<!-- Destination -->
						<div class="destination item">
							<div class="destination_image">
								<img src="https://s3.ap-south-1.amazonaws.com/workshop-exo/img/ml.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/workshops">ML/DL</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=workshop&event=ML-DL">Register here</a></div>
							</div>
						</div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://s3.ap-south-1.amazonaws.com/workshop-exo/img/bridge.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/workshops">Bridge Making</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=workshop&event=bridge_Making">Register here</a></div>
							</div>
						</div>
                       <div class="destination item">
							<div class="destination_image">
								<img src="https://s3.ap-south-1.amazonaws.com/workshop-exo/img/humanoid.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/workshops">Humanoid Robotics</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=workshop&event=Humanoid_Robotics">Register here</a></div>
							</div>
                        </div>
                        <div class="destination item">
							<div class="destination_image">
								<img src="https://s3.ap-south-1.amazonaws.com/workshop-exo/img/iot.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/workshops">IOT</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=workshop&event=IOT">Register here</a></div>
							</div>
						</div>
						<div class="destination item">
							<div class="destination_image">
								<img src="https://s3.ap-south-1.amazonaws.com/workshop-exo/img/manager-1.jpg" height="263" alt="">
							</div>
							<div class="destination_content">
								<div class="destination_title"><a href="https://www.exodia.in/workshops">Digital Marketing</a></div>
								<div class="destination_price"><a href="https://register.exodia.in/success/?manager=workshop&event=Digital_Marketing">Register here</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonials -->

	<div class="testimonials" id="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">Source [FB]</div>
					<div class="section_title"><h2>Testimonials</h2></div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">EXODIA is something beyond your imagination. This is where you can feel alive.this Is the place from where you can forget about everything......
a perfect collaboration of music and technology with unlimited fun......</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>Muhammed Roshan</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">Best gig ever by far so awesome The Location is Beautiful and Peaceful <3 Loved the crowd and the place <3</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>Lakshay Thakur</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item text-center">
								<div class="testimonial">This is exactly what a college fest should be like. The idea of SAP is too amazing as it makes students from colleges from all around feel involved in the move either in one way or other. Thank you Exodia IIT MANDI.</div>
								<div class="testimonial_author">
									<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
										<div>Siddhant Chandra</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news" id="news">
		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div class="news_container">
						
						<!-- News Post -->
						<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="news_post_image"><iframe width="400" height="300" src="https://www.youtube.com/embed/WU_8wcNML3M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br></div>
							<!-- <div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>01</div>
								</div>
								<div class="news_post_title"><a href="https://youtu.be/WU_8wcNML3M">IIT MANDI OFFICIAL AFTERMOVIE EXODIA 2018</a></div>
							</div> -->
						</div>

						<!-- News Post -->
						<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="news_post_image"><iframe width="400" height="300" src="https://www.youtube.com/embed/LFx_d2d3ZH4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
							<!-- <div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
								</div>
								<div class="news_post_title"><a href="https://youtu.be/LFx_d2d3ZH4">IIT Mandi Campus la Tournée</a></div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer" id="contact">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">Contact Us</div>
<!--							<div class="newsletter_subtitle">Join our database NOW</div>-->
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Mobile: +91 94187 94251</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">come & drop by</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>Indian Institute of Technology, Mandi<br>Himachal Pradesh<br>India</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li>publicity@exodia.in</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="col text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.exodia.in" target="_blank">Web Development Team, Exodia 19</a></div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
</body>
</html>';
                            }
else{
    header("Location: https://register.exodia.in/oops");
}
?>