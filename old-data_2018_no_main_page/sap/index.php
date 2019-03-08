<?php

	$conn=mysqli_connect('localhost','developer','Priyansh#MadeThis@26','sap_db');
	//$conn=mysqli_connect('localhost','root','','sap_db');

	do {
		$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$res = "";
		for ($i = 0; $i < 6; $i++) {
		    $res .= $chars[mt_rand(0, strlen($chars)-1)];
		}
		$qq = "SELECT * from contact_info where referral ='$res'";
	    $find_email=mysqli_query($conn,$qq);
	}while(mysqli_num_rows($find_email)>=1);

	//echo $res;

?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112495335-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112495335-1');
	</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#0b0f16">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#0b0f16">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0b0f16">

	<title>SAP | Exodia IIT Mandi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Exodia - Student Ambassador Program" />
  <meta name="keywords" content="exodia, iit mandi, exodia iit mandi, sap" />
  <meta name="author" content="Hritik Gupta" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="exo2.png">

  <!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400|Crimson+Text' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">

	

	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

	<style type="text/css">
		@media (max-width: 768px){
			.desktop{
				display: none;
			}
			.mobile{
				display: block;
			}
		}
		.mobile{display: none;}
		#prelaoder div{
		  display: block;
		  position: relative;
		  left: 0;
		  bottom: 0;
		  right: 0;
		  top: 30%;
		}
		
		#prelaoder div img{
			/*width: 170px;*/
		  height: 250px;
		  width: auto;
		}	
		
	</style>
	<body class="inner-page">
		<div id="prelaoder" style="text-align: center;">
			<div>
				<img src="../4_n.gif">
			</div>
		</div>
		<header id="fh5co-header-section" role="header" class="" >
				<div class="container">
					<a href="../"><img id="fh5co-logo" class="pull-left desktop" src="exo1.png" style="width: 50px"></img></a>
					<a href="../"><img id="fh5co-logo" class="pull-left mobile" src="exo2.png" style="width: 50px"></img></a>
					
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="../">Home</a>
							</li>
							<!-- <li>
								<a href="#" class="fh5co-sub-ddown">Dropdown</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="left-sidebar.html">Left Sidebar</a></li>
								 	<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="#">HTML5</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">JavaScript</a>
										<ul class="fh5co-sub-menu">
											<li><a href="#">jQuery</a></li>
											<li><a href="#">Zipto</a></li>
											<li><a href="#">Node.js</a></li>
											<li><a href="#">AngularJS</a></li>
										</ul>
									</li>
									<li><a href="#">CSS3</a></li> 
								</ul>
							</li> -->
							<li class="active"><a href="index.html">SAP Form</a></li>
							<!-- <li><a href="contact.html">Contact</a></li> -->
						</ul>
					</nav>

				</div>
			</header>
			<aside id="fh5co-hero" style="background-image: url(images/hero2.jpg);">
<!-- 			<img src="exo1.png" class="img-responsive"> -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="fh5co-hero-wrap">
								<div class="fh5co-hero-intro">
										<h2>Exodia presents<span></span></h2>
										<h1>Student Ambassador Program</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>

			<div id="fh5co-main">

				<section>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="fh5co-uppercase-heading-sm text-center">The bigger picture</h2>
							</div>
							<div class="col-md-8 col-md-offset-2 clearfix fh5co-header">
								<h1 class="h1 fh5co-heading fh5co-no-margin-bottom">What is it all about?</h1>
								<h4 class="h5 fh5co-heading-sub" style="padding-top: 1vw;"><strong>Exodia</strong>, the biggest technical and cultural fest of the Himalayas, is all about fun-filled, enlightening, and exciting experiences, to bring out the best in you. In the serene lap of nature, this tech-cult fest will ignite your passion and provide you an opportunity to interact with an entirely new world.</h4>
								<div class="fh5co-spacer fh5co-spacer-sm"></div>
							</div>
						</div>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="fh5co-uppercase-heading-sm text-center">We got your back</h2>
							</div>
							<div class="col-md-8 col-md-offset-2 clearfix fh5co-header">
								<h1 class="h1 fh5co-heading fh5co-no-margin-bottom">What's in it for me?</h1>
								<div class="fh5co-spacer fh5co-spacer-sm"></div>
							</div>
						</div>
						<!-- <div class="fh5co-spacer fh5co-spacer-sm"></div> -->
					</div>
				</section>
				<section>
					<div class="container">
						<div class="row fh5co-feature-3">
						
							<div class="col-md-12">
							</div>
							<div class="col-md-8 col-md-offset-2">
								<div class="row">
									<div class="col-md-6 fh5co-feature-item">
										<span class="fh5co-feature-icon"><i class="ti-world"></i></span>
										<div class="fh5co-feature-blurb">
											<h2 class="h4 fh5co-feature-title">Expanding Network</h2>
											<p>Interact with new people as you learn and improve your soft skills.</p>
										</div>
									</div>

									<div class="col-md-6 fh5co-feature-item">
										<span class="fh5co-feature-icon"><i class="ti-star"></i></span>
										<div class="fh5co-feature-blurb">
											<h2 class="h4 fh5co-feature-title">Awesome Swag</h2>
											<p>Get Exodia merchandise and free passes to the fest.</p>
										</div>
									</div>

									<div class="col-md-6 fh5co-feature-item">
										<span class="fh5co-feature-icon"><i class="ti-receipt"></i></span>
										<div class="fh5co-feature-blurb">
											<h2 class="h4 fh5co-feature-title">Certificates</h2>
											<p>Get the coveted certificate, commemorating your efforts.</p>
										</div>
									</div>
									
									<div class="col-md-6 fh5co-feature-item">
										<span class="fh5co-feature-icon"><i class="ti-home"></i></span>
										<div class="fh5co-feature-blurb">
											<h2 class="h4 fh5co-feature-title">Accomodation</h2>
											<p>Free accommodation for the top scoring ambassador.</p>
										</div>
									</div>

									<div class="col-md-6 fh5co-feature-item">
										<span class="fh5co-feature-icon"><i class="ti-heart"></i></span>
										<div class="fh5co-feature-blurb">
											<h2 class="h4 fh5co-feature-title">GET HIGH, Literally!</h2>
											<p>Enjoy the sheer beauty of nature,be a part of hikes, treks and other activities majorly exclusive to this Indian Institute of Technology. </p>
										</div>
									</div>

									<div class="col-md-6 fh5co-feature-item">
										<span class="fh5co-feature-icon"><i class="ti-wand"></i></span>
										<div class="fh5co-feature-blurb">
											<h2 class="h4 fh5co-feature-title">You and Exodia</h2>
											<p>Become an inalienable part of Exodia 2k18 as you witness the best you have ever had.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
				</section>


				<section>
					<div class="container">
						<div class="row">
						
							
							<div class="col-md-12">
								<h2 class="fh5co-uppercase-heading-sm text-center">Roles you play as an Ambassador</h2>
								
								<div class="fh5co-spacer fh5co-spacer-sm"></div>

								<div id="fh5co-tab-feature-center" class="fh5co-tab text-center">
									<ul class="resp-tabs-list hor_1">
										<li><i class="fh5co-tab-menu-icon ti-microphone-alt"></i>Publicise and Promote</li>
										<li><i class="fh5co-tab-menu-icon ti-ink-pen"></i>Participate</li>
										<li><i class="fh5co-tab-menu-icon ti-sharethis"></i>Social Media</li>
									</ul>
									<div class="resp-tabs-container hor_1">
										<div>
											<div class="row">
												<div class="col-md-12">
													<h2 class="h3">Promotion and Publicity</h2>
												</div>
												<div class="col-md-12">
													<p>Put up posters provided to you within a specified duration at various hangout spots of your college, aware the masses about EXODIA.</p>
												</div>
											</div>
										</div>
										<div>
											<div class="row">
												<div class="col-md-12">
													<h2 class="h3">Fetching Participation</h2>
												</div>
												<div class="col-md-12">
													<p>Encourage participation of various clubs active in your college in EXODIA. The more is the participation from your college, the better is your score!</p>
												</div>
											</div>
										</div>
										<div>
											<div class="row">
												<div class="col-md-12">
													<h2 class="h3">Spread on Social Media</h2>
												</div>
												<div class="col-md-12">
													<p>Facebook, Twitter, Youtube or any other social platform that you can get your hands on, be sure that the world hears us! Share our posts and encourage your friends to do the same!</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<hr class="fh5co-spacer fh5co-spacer-sm">
						</div>
					</div>
				</section>

				<section>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 class="fh5co-uppercase-heading-sm text-center">Become a Student Ambassador</h2>
								<div class="fh5co-spacer fh5co-spacer-sm"></div>
							</div>
							<div class="col-md-8 col-md-offset-2">
								<form id="my-form" action="submit.php" method="post">
									<div class="col-md-6">
										<div class="form-group">
											<label for="name" class="sr-only">Name</label>
											<input required placeholder="Name" id="name" name="name" type="text" class="form-control input-lg">
										</div>	
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="email" class="sr-only">College</label>
											<input required placeholder="College" name="college" id="college" type="text" class="form-control input-lg">
										</div>	
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="email" class="sr-only">Email</label>
											<input required placeholder="Email" id="email" name="email" type="email" class="form-control input-lg">
										</div>	
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="contact" class="sr-only">Contact Number</label>
											<input pattern="[789][0-9]{9}" required placeholder="Contact Number" name="contact" id="contact" type="text" class="form-control input-lg">
										</div>	
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="whatsapp" class="sr-only">WhatsApp Contact</label>
											<input pattern="[789][0-9]{9}" required placeholder="WhatsApp Contact" id="whatsapp" name="whatsapp" type="text" class="form-control input-lg">
										</div>	
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="refer" class="sr-only">Referral Code</label>
											<input placeholder="Referral Code" id="referral" name="referral" type="text" class="form-control input-lg">
										</div>	
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-lg " value="Send">

											<input type="reset" class="btn btn-outline btn-lg " value="Reset">
										</div>	
									</div>									
								</form>	
								<div class="fh5co-spacer fh5co-spacer-sm"></div>
							</div>
							
						</div>

					</div>
				</section>
		

				<footer id="fh5co-footer">
					<div class="container">
						
						<ul class="fh5co-social-icons">
							<li><a href="https://www.facebook.com/Exodia.IITMandi/" target="_blank"><i class="ti-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/exodia.in/?hl=en" target="_blank"><i class="ti-instagram"></i></a></li>
							<li><a href="https://twitter.com/exodia_iitmandi" target="_blank"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="https://www.youtube.com/user/exodiaiitmandi" target="_blank"><i class="ti-youtube"></i></a></li>
						</ul>
						<p class="text-muted fh5co-no-margin-bottom text-center"><small>&copy; 2018 <a href="../">Exodia</a>. All rights reserved.</p>

					</div>
				</footer>
			
		
			</div>
			
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
		<script src="js/sweetalert.js"></script>
		<script>
			 $(window).load(function() {
	
			  setTimeout(function() {
				$('.spinner').fadeOut("slow");

				  setTimeout(function() {
				  $('#prelaoder').fadeOut("slow"); 

					  setTimeout(function() {
						  $('.content-block').addClass('animated fadeInDown').fadeIn("slow");
						   $('#footer').fadeIn('slow');

					  }, 900);
				  }, 700);	  
			  }, 700);	

		});
			
			$("#my-form").on("submit", function(event){
				
			event.preventDefault();
			var name = $("#name").val();
			var college = $("#college").val();
			var email = $("#email").val();
			var contact= $("#contact").val();
			var whatsapp = $("#whatsapp").val();
			var referral = $("#referral").val();
			var ref = '<?php echo $res; ?>';




				
			var ename = encodeURIComponent(name);
			var ecollege = encodeURIComponent(college);
			var eemail = encodeURIComponent(email);
				
			var res = 'http://www.exodia.in/sap/form/index.php?name='+ename+'&college='+ecollege+'&email='+eemail;
			

			swal(
		      'Voila!',
		      'We have received your entry for becoming Exodia\'s Student Ambassador. \nKeep steady, as we make the form ready. Find it <a target="_blank" href = "'+res+'">HERE</a> in a minute! \nWe\'ve also sent you a mail regarding the same. Your Referral Code is <b>'+ref+'</b>.',
		      'success'
		    );
			

			$.post('submit.php',{name:name,college:college,email:email,contact:contact,whatsapp:whatsapp, referral:referral, ref:ref},function(data){
				$('#msg').html(data);//handle received data
				// swal(
			 //      'Voila!',
			 //      'We have received your entry for becoming Exodia\'s Student Ambassador. \nLookout for our mail.',
			 //      'success'
			 //    );
				//swal('Any fool can use a computer');
			});
			//location.reload();
		});
		</script>
		<!-- <script type="text/javascript">
			$(document).ready(function(){
			  $('#my-form').on('submit',function(e) { 
			  $.ajax({
			      url:'submit.php', 
			      data:$(this).serialize(),
			      type:'POST',
			      success:function(data){
			        console.log(data);
				    swal("Voila!", "We have received your entry for becoming Exodia\'s Student Ambassador. \nLookout for our mail.", "success");
			      },
			      error:function(data){
				    swal("Aw, Snap!", "Something went wrong :(", "error");
			      }
			    });
			    e.preventDefault();
			  	$("#my-form")[0].reset();
			  });
			});
		</script> -->
	</body>
</html>
