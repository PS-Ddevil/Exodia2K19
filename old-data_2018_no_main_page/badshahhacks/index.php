<?php
  // mysql> create table entries(id int(11) auto_increment not null, name varchar(55), email varchar(55), phone varchar(15), github varchar(30), message text, primary key(id));

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $servername = "localhost";
  $username = "developer";
  $password = "Priyansh#MadeThis@26";
  $dbname = "sap_db";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $college = $_POST['college'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $github = $_POST['github'];
      $message = $_POST['message'];
      $stmt = mysqli_prepare($conn, "INSERT INTO badshahhacks (name, college, email, phone, github, message) VALUES (?, ?, ?, ?, ?, ?)");
      mysqli_stmt_bind_param($stmt, "sssiss", $name, $college, $email, $phone, $github, $message);

      mysqli_stmt_execute($stmt);

      mysqli_stmt_close($stmt);
      mysqli_close($conn);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Badshah's very own App-Dev Hackathon, Baddies Insomnia">
    <meta name="author" content="Hritik Gupta">
    <link rel="shortcut icon" href="../exo_black.png" type="image/x-icon">
    <link rel="shortcut icon" href="../exo_black.png" type="image/png">
    <link rel="shortcut icon" href="../exo_black.png" type="image/png">
    <meta name="theme-color" content="#0b0f16">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#0b0f16">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#0b0f16">


    <title>Exodia'18 | Baddies Insomnia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
<style type="text/css">
    .nopadding {
           padding: 0 !important;
           margin: 0 !important;
        }
        body{
            background: #0F0E0F;
            color: white;
            font-family: 'Quicksand', sans-serif;

        }
        .register{
            font-size: 5vw;
        }
        img{
          user-drag: none; 
          user-select: none;
          -moz-user-select: none;
          -webkit-user-drag: none;
          -webkit-user-select: none;
          -ms-user-select: none;
        }
        @media screen and (max-width: 768px){
                .register{
                    font-size: 15vw;
                }
            }

          #fh5co-footer {
            /*position: inherit;*/
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            padding: 3em 0;
          }
          @media screen and (max-width: 768px) {
            #fh5co-footer {
              padding: 2em 0;
            }
          }
          /* Social Icons */
          .fh5co-social-icons {
            text-align: center;
            padding: 0;
            margin: 0 0 2em 0;
          }
          .fh5co-social-icons li {
            list-style: none;
            display: inline;
            display: inline-block;
          }
          .fh5co-social-icons li a {
            padding: 0 10px;
            border-bottom: none !important;
          }
          .fh5co-social-icons li i {
            font-size: 30px;
          }
          .fh5co-no-margin-bottom {
            margin-bottom: 0 !important;
          } 
          .g-recaptcha {
              display: inline-block;
          }

</style>

<div class="container" style="width: 100%; height: 100%;">
    <div class="row">
        <div class="col-lg-6 nopadding">
            <img draggable="false" class="img-responsive" width="100%" src="img/1.png" >
        </div>
        <div class="col-lg-6 nopadding">
            <img draggable="false" class="img-responsive" width="100%" src="img/2.png">
        </div>
    </div>


    <h1 style="font-family: 'Iceland', cursive; font-weight: bolder;" class="text-center register"> Register Here</h1><hr>
</div>

<section class="contact-wrap" class="text-center">
        <div class="container text-center">
            <div class="row">
                <form action="" class="contact-form" method="POST">
                    <div class="col-sm-12">
                      <div class="input-block">
                        <label for="">Name</label>
                        <input required="" type="text" name="name" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-block">
                        <label for="">College (if Student)</label>
                        <input type="text" name="college" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-block">
                        <label for="">Email</label>
                        <input required="" type="text" name="email" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-block">
                        <label for="">Phone</label>
                        <input required="" pattern="[789][0-9]{9}" type="text" name="phone" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-block">
                        <label for="">Link to your Github Profile</label>
                        <input required="" type="text" name="github" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-block textarea">
                        <label for="">Drop your message to Badshah</label>
                        <textarea rows="3" type="text" name="message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="text-xs-center">
						<div class="g-recaptcha" data-sitekey="6LeCNE8UAAAAAKalw7E0Xc1BrT87t1djEh2KidR2"></div>
                    </div>  
                   <div class="col-sm-12">
                      <button class="square-button" type="submit" name="submit">Send</button>
                    </div>                       
                  </form>  
              
            </div>
            
        </div>

    </section>
    <hr>

    <div class="">

    </div>

    <footer id="fh5co-footer">
        <div>
            <ul class="fh5co-social-icons">
                <li style="color: #9E9E9E"><a href="https://www.facebook.com/Exodia.IITMandi/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/exodia.in/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://twitter.com/exodia_iitmandi" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/user/exodiaiitmandi" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <p class="text-muted fh5co-no-margin-bottom text-center"><small>&copy; 2018 <a href="#">Exodia</a>. All rights reserved.</p>
        </div>
    </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

</body>

</html>