<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Events - EXODIA'17 IIT MANDI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Vesper+Libre" rel="stylesheet">
  <link rel="stylesheet" href="../css_1/style.css">
  <link rel="stylesheet" href="../css_1/events.css">
  <link rel="stylesheet" href="../css_1/events_1.css">
  <link rel="stylesheet" href="../css/log_sign.css">
  <style>

    @import url('https://fonts.googleapis.com/css?family=Lato|Oswald|Raleway|Roboto|Source+Sans+Pro');

    #team{
      margin-top: 3.2vw;
      margin-left: 8%;
      background: #000;
      text-align: left;
      font-family: 'Lato',sans-serif;
      font-size: 4vw;
      color:#fff;
    }
    #pop{
      background: #fff;
      display: none;
      top: 200px;
      position: fixed;
      opacity: 1 !important;
      left: 800px;
    }
  </style>


</head>
<body>
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://www.exodia.in/">
          <img src="../images/logo-white.png" alt="Exodia" class="img-responsive">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#" data-scroll>EVENTS</a>
          </li>
          <li>
            <a href="../team" data-scroll>TEAM</a>
          </li>
          <li>
            <a href="../sponsors" data-scroll>SPONSORS</a>
          </li>
          <li>
            <a href="../sap" data-scroll>SAP</a>
          </li>
          <li>
            <a href="../gallery" data-scroll>GALLERY</a>
          </li>
          <li>
            <a href="../outreach_workshops" data-scroll>OUTREACH WORKSHOPS</a>
          </li>
          <?php 
          if(isset($_SESSION['name'])){ 
            $name = $_SESSION['name'];
            echo "<li><a href='#' onclick='POP()'>REGISTER</a></li><li style='border:none !important;'><a>$name</a></li><li style='border:none !important;'><a href='../logout.php'>Logout</a></li>"; 
          }else echo "<li><a href='#' onclick='POP()'>REGISTER</a></li>";
          ?>                                
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <DIV id="pop" class="fixed" style="background:transparent;z-index: 2;">
    <div id="overlay" style="position: fixed;top: 0;left: 0;height: 100%;width: 100%;background: #fff;opacity: 0.7;z-index:1;"><a href="#" onclick="unpop()" style="position: fixed;top: 5%;right: 7%;text-decoration: none;">CLOSE</a></div>
    
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
            <div class="cont_forms">
              <div class="cont_form_login" >
                <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>


                <input type="email" placeholder="Email" id="username" required />

                <input type="password" placeholder="Password" id="passWord" required/>
                <button class="btn_login" id="logBT" onclick="cambiar_login()">LOGIN</button>
                <div class="msg"></div> 
              </div>

              <div class="cont_form_sign_up tbexpan" style="">

                <input type="name" id="name" placeholder="Name" onblur="redify(this)" required="" style="margin-bottom: : 10px !important;"/>
                <input type="email" id="regname" placeholder="Email" onblur="redify(this)" required="" style="margin-bottom: : 10px !important;"/>
                <input type="password" id="regpassw" placeholder="Password" required="" />
                <input type="password" id="cregpassw" placeholder="Confirm Password" required/>
                <input type="text" id="coll_name" required onblur="redify(this)" placeholder="College Name" style="margin-bottom: : 10px !important;"/>
                <input type="text" class="describe" id="referal" onblur="redify(this)" placeholder="Referral Code">
                <input type="text" id="phoneNo" required onblur="redify(this)" placeholder="Phone number">
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
        $("#pop").load("../reg/index.php");
      </script>
      <?php

    }
    ?>

  </DIV>
  <div class="container-fluid">
    <!-- Title -->
    <div class="row" id="team">
      EVENTS.
    </div>        

    <br/>

    <div class="pageContentWrapper">

      <div class="form">

        <ul class="tab-group">
          <li class="tab active"><a href="#news">News</a></li>
          <li class="tab"><a href="#technical">Technical</a></li>
          <li class="tab"><a href="#cultural">Cultural</a></li>
          <li class="tab"><a href="#online">Online</a></li>
          <li class="tab"><a href="#informal">Informal</a></li>
        </ul>

        <div class="tab-content">
          <div id="news">
            <h1>News</h1><br><br>
            <p>Re-touch Starts on 30/01/2017. <a href="./Re1.pdf">Click Here</a> to view the details.</p>
          </div>

          <div id="technical">
            <nav id="events">
              <ul id="sub_events">
                <li class="technical" onclick="func(this)">
                  <b>Junkyard Wars</b>
                  <span>&rarr;</span>
                  <div>
                    <h1>Junkyard Wars</h1>
                    <p>The event is an on-spot design &amp; fabrication challenge where the teams will be tested on their ability to crack the problem and come up with solutions from the available junk given to them.The teams have to go for making/fabricating their design in the allotted time from the heap of junk made available to them.</p><br><br>
                    <p><b><u>Prizes:</u></b> TBA<br><br><b><u>Contact:</u></b> Wasim Salih, <br>Udit Soni
                    </p>
                    <a  href="junkyard.docx"><button>Problem Statement and Details</button></a>
                  </div>
                </li>
                <li class="technical" onclick="func(this)">
                  <b>RoboWar</b>
                  <span>&rarr;</span>
                  <div>
                    <h1>RoboWar</h1>
                    <p>Build the Machines that can brutually demolish your enemy and show your robotic acumen,blend your intellect & fighter instinct, controlling skill. Design and construct a manually controlled wired or wireless robot that can

                      destroy the bots of your opponents or can throw their bots out of the arena.</p><br><br>
                      <p><b><u>Prizes:</u></b> TBA<br><br><b><u>Contact:</u></b> Kushagra Singhal( +917807054936), <br>Abhay Singh Chauhan( +918989018259)
                      </p>
                      <a  href="robowars.pdf"><button>Problem Statement and Details</button></a>

                    </div>
                  </li>
                  <li class="technical"  onclick="func(this)">
                    <b>IOT-Internet of Things</b>
                    <span>&rarr;</span>
                    <div>
                      <h1>Internet of Things</h1>
                      <p>Theme: Smart City. In this theme, participants are advised to solve one or more problems faced by cities.

                        Devices made by the participants should have web or application based interfaces to

                        communicate with an array of devices interconnected through the internet.</p><br><br>
                        <p><b><u>Prizes:</u></b> TBA<br><br><b><u>Contact:</u></b> Piyush Anand, <br>Hitesh Ramchandani
                        </p>
                        <a  href="iot.pdf"><button>Problem Statement and Details</button></a>

                      </div>
                    </li>
                    <li class="technical"  onclick="func(this)">
                      <b>Laser Tag</b>
                      <span>&rarr;</span>
                      <div>
                        <h1>Laser Tag</h1>

                        <p>Each team must make a bot that will compete against the other robots in

                          a one on one fight. The fight will pit two robots in a spectator thrilling

                          laser-tag fight that will be timed where the aim of each team will be to

                          shoot the Detector of the other team&#39;s robot via the laser.</p><br><br>
                          <p><b><u>Prizes:</u></b> Participants scoring more than x points will get certificates and

                            top 3 Winners will get prizes worth YINR<br><br><b><u>Contact:</u></b> Akash Agarwal, <br>Akash Sharma
                          </p>
                          <a  href="#"><button>Problem Statement and Details</button></a>
                        </div>
                      </li>
                      <li class="technical"  onclick="func(this)">
                        <b>Line Follower</b>
                        <span>&rarr;</span>
                        <div>
                          <h1>Line Follower</h1>
                          <p>Device an autonomous vehicle capable of navigating efficiently through guided black

                            lines on a white floor. The vehicle must be able to effectively follow the guided black

                            path. The contestants will be judged on the basis of time of completion of path and

                            also on accuracy.</p><br><br>
                            <p><b><u>Prizes:</u></b>TBA<br><br><b><u>Contact:</u></b> Parinaya Chaturvedi(<a href="http://fb.com/parinayac">Facebook</a>), <br>Sanidhya Aggarwal(<a href="http://fb.com/sanidhya.aggarwal.5">Facebook</a>)
                            </p>
                            <a  href="lf.pdf"><button>Problem Statement and Details</button></a>
                          </div>
                        </li>

                        <li class="technical"  onclick="func(this)">
                          <b>Nirman</b>
                          <span>&rarr;</span>
                          <div>
                            <h1>Nirman</h1>
                            <p><p>It’s not that we use technology, we live technology. The world is now in the Digital era, and young mids are fueling its fire with technology and innovation.</p><br><br>
                            <p><b><u>Prizes:</u></b>TBA<br><br><b><u>Contact:</u></b> Abhay Singh Chauhan (+918989018259)</p>
                            <a  href="nirmaan.pdf"><button>Problem Statement and Details</button></a>
                          </p>
                        </div>
                      </li>
                      <li class="technical"  onclick="func(this)">
                        <b>Trade and Win</b>
                        <span>&rarr;</span>
                        <div>
                          <h1>Trade and Win<br> (Event Partner - Digi Infy)</h1>
                          <p><p>We have created a framework where in, you can learn, prove your mettle and practice your skill, and the best part- you will be rewarded. On a positive note, we are heartily inviting you to a competition, where your trading skills will be your best friend and are going to be extremely beneficial for you.</p><br><br>
                          <p><b><u>Prizes:</u></b>Rs.13000<br><br><b><u>Contact:</u></b> TBA</p>
                          <a  href="stocks.pdf"><button>Problem Statement and Details</button></a>
                        </p>
                      </div>
                    </li>
                  </ul>  
                  <div id="before">
                    <h1>Technical Events</h1>
                    <p>It’s not that we use technology, we live technology. The world is now in the Digital era, and young mids are fueling its fire with technology and innovation.</p><br><br>
                    <p>So through our technical events we urge you to use your brains and make the best out of the technologies!</p>
                  </div>
                </nav>

              </div>

              <div id="cultural">
                <nav id="events">
                  <ul id="sub_events_1">
                    <li class="cultural" onclick="func_1(this)">
                      <b>Synchornians</b>
                      <span>&rarr;</span>
                      <div>
                        <h1>Synchornians</h1>
                        <p>Group Thematic Dance Competition. All types of dance forms are encouraged. Props are allowed.</p><br><br>
                        <p><b><u>Prizes:</u></b> Rs.20,000/-<br><br><b><u>Contact:</u></b> Sai Sandeep: 9492032503, <br>Shantanu Kaushik : 8447095656
                        </p>
                        <a  href="synchronians.docx"><button>Details and Rules</button></a>
                      </div>
                    </li>
                    <li class="cultural" onclick="func_1(this)">
                      <b>Band Slam</b>
                      <span>&rarr;</span>
                      <div>
                        <h1>Band Slam</h1>
                        <p>Have you been jamming? Get your band together and make the best music to glorify all of the himalayas to your tune. A perfect platform to showcase your musical fervour.</p><br><br>
                        <p><b><u>Prizes:</u></b> TBA<br><br><b><u>Contact:</u></b> Shreyak Kumar
                        </p>
                        <a  href="bandslam.rtf"><button>Details and Rules</button></a>

                      </div>
                    </li>
                    <li class="cultural" onclick="func_1(this)">
                      <b>Canvas</b>
                      <span>&rarr;</span>
                      <div>
                        <h1>Canvas</h1>
                        <p>Ever group will be given a set of drawing sheets, you will be making individual paintings in such a way

                          that after joining them it should be a complete painting. Each individual painting must have a sense. You

                          can work in teams or in groups</p><br><br>
                          <p><b><u>Prizes:</u></b> TBA<br><br><b><u>Contact:</u></b> Abhijeet Sharma(<a href="http://fb.com/sharmajeekabeta">Facebook</a>), <br>Vishnu Priya Jindal(<a href="http://fb.com/vishnupriya.jindal">Facebook</a>)
                          </p>
                          <a  href="canvas.docx"><button>Details and Rules</button></a>

                        </div>
                      </li>
                      <li class="cultural" onclick="func_1(this)">
                        <b>Re-Touch</b>
                        <span>&rarr;</span>
                        <div>
                          <h1>Re-Touch</h1>

                          <p>“Design, in its broadest sense, is the enabler of the digital era - it's a process that creates order

                            out of chaos that renders technology usable to business. Design means being good, not just

                            looking good.” Re-Touch is photo editing event having online Weekly Preliminary Rounds and the final round during Exodia. It is a

                            10 week long event.</p><br><br>
                            <p><b><u>Prizes:</u></b> TBA<br><br><b><u>Contact:</u></b>Mohit Sharma : 8629015362, <br>Rahul Singh : 9425852130
                            </p>
                            <a  href="re1.pdf"><button>Details and Rules</button></a>
                          </div>
                        </li>
                        <li class="cultural" onclick="func_1(this)">
                          <b>Survivor</b>
                          <span>&rarr;</span>
                          <div>
                            <h1>Survivor</h1>
                            <p>Literary Event: You and a bunch of people are all passengers of a doomed airplane. The pickle is, there is only one

                              parachute. Now convince others why you deserve to live while they die.</p><br><br>
                              <p><b><u>Prizes:</u></b>TBA<br><br><b><u>Contact:</u></b> Saksham Bathla
                              </p>
                              <a  href="#"><button>Details and Rules</button></a>
                            </div>
                          </li>

                          <li class="cultural" onclick="func_1(this)">
                            <b>Biggest Liar</b>
                            <span>&rarr;</span>
                            <div>
                              <h1>Biggest Liar</h1>
                              <p>Literary Event: It’s a very simple game. We ask you a lot of questions and you can only lie, the moment you don’t, you are out of the game.</p><br><br>
                              <p><b><u>Prizes:</u></b>TBA<br><br><b><u>Contact:</u></b> Sakhsham Bathla</p>
                              <a  href="#"><button>Details and Rules</button></a>

                            </div>
                          </li>


                          <li class="cultural" onclick="func_1(this)">
                            <b>More</b>
                            <span>&rarr;</span>
                            <div>
                              <h1>GROOVE FANATICS</h1>
                              <p><b><u>Contact:</u></b> Mamta Bhagia, Vedant Agarwal</p><br>
                              <h1>EXODIA IDOL</h1>
                              <p><b><u>Contact:</u></b> Simranjeet Singh</p><br>
                              <h1>Couture</h1>
                              <p><b><u>Contact:</u></b> </p><br>
                            </div>
                          </li>

                        </ul>  
                        <div id="before_1">
                          <h1>Cultural Events</h1>
                          <p>Exodia provides a whole new dimension to culture and literature.</p><br><br>
                          <p>The best participants, the most distinguished judges, big prizes and the most electric atmosphere in the Himalayas!</p>
                        </div>
                      </nav>

                    </div>

                    <div id="online">   

                      <nav id="events">
                        <ul id="sub_events_2">
                          <li class="online" onclick="func_2(this)">
                            <b>Dementia</b>
                            <span>&rarr;</span>
                            <div>
                              <h1>Dementia</h1>
                              <p>Dementia is a competitive programming contest, where the participant has to prove their knowledge of algorithms and problem solving skills by solving  some programming problems,but mere knowledge of algorithms will not prove to be enough.The contest will be held on www.codechef.com .</p><br><br>
                              <p><b><u>Prizes:</u></b> TBA<br><b><u>Contact:</u></b> Sahil Arora
                              </p>
                              <a  href="#"><button>Problem Statement and Details</button></a>
                            </div>
                          </li>
                          <li class="online" onclick="func_2(this)">
                            <b>Re-Touch</b>
                            <span>&rarr;</span>
                            <div>
                              <h1>Re-Touch</h1>

                              <p><u>RE-TOUCH IS LIVE! </u><br> Re-Touch is photo editing event having online Weekly Preliminary Rounds and the final round during Exodia. It is a

                                10 week long event.</p><br><br>
                                <p><b><u>Prizes:</u></b> TBA<br><br><b><u>Contact:</u></b>Mohit Sharma : 8629015362,Rahul Singh : 9425852130
                                </p>
                                <a  href="re1.pdf"><button>Details and Rules</button></a>

                              </div>
                            </li>
                            <li class="online"  onclick="func_2(this)">
                              <b>Mr and Miss Exodia</b>
                              <span>&rarr;</span>
                              <div>
                                <h1>Mr and Miss Exodia</h1>
                                <p>Details to be announced.</p><br><br>
                              </div>
                            </li>
                            <li class="online"  onclick="func_2(this)">
                              <b>Strip Mics</b>
                              <span>&rarr;</span>
                              <div>
                                <h1>Strip Mics</h1>

                                <p>Details to be announced.</p><br><b><u>Contact:</u></b> Nisha Kumari,Shreyas Bapat
                              </p>
                            </div>
                          </li>
                          <li class="online"  onclick="func_2(this)">
                            <b>Imagination</b>
                            <span>&rarr;</span>
                            <div>
                              <h1>Imagination</h1>

                              <p>Details to be announced.</p><br><b><u>Contact:</u></b> Rahul Kumar Chaudhary, Chandan Purbia
                            </div>
                          </li>

                        </ul>  
                        <div id="before_2">
                          <h1>Online Events</h1>
                          <p>Get your taste of some of the events even before Exodia starts, in our online events. Get a glimpse of awesomeness.</p><br><br>
                          <p>So register for our online events and showcase that you should be feared in Exodia!</p>
                        </div>
                      </nav>


                    </div>

                    <div id="informal">   

                     <h1>Fray</h1><br><p> Co-ordinators- Amit Ghangas</p>

                     <h1>Trekking</h1><br><p> Co-ordinators-</p>

                   </div>
                 </div><!-- tab-content -->


               </div> <!-- /form -->
             </div>

             <div class="foot"><b>  Exodia '17.</b> Web Coordinators: <a href="http://www.facebook.com/abhigyankhaund">Abhigyan Khaund</a> | <a href="http://www.facebook.com/lakshayArora940">Lakshay Arora</a>
             </div>

             <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

             <script>

              document.getElementsByClassName("foot")[0].style.bottom="0";
              document.getElementsByClassName("foot")[0].style.right="0";
              document.getElementsByClassName("foot")[0].style.left="0";
              document.getElementsByClassName("foot")[0].style.position="absolute"; 

              $('.tab a').on('click', function (e) {

                e.preventDefault();

                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');

                target = $(this).attr('href');
                if(target=="#technical" || target=="#cultural" || (screen.width<=800 && target=="#online") ){
                  document.getElementsByClassName("foot")[0].style.position="relative";
                }
                else{ 
                  document.getElementsByClassName("foot")[0].style.bottom="0";
                  document.getElementsByClassName("foot")[0].style.right="0";
                  document.getElementsByClassName("foot")[0].style.left="0";
                  document.getElementsByClassName("foot")[0].style.position="absolute"; 

                }
                $('.tab-content > div').not(target).hide();

                $(target).fadeIn(600);

              });

              var a = document.getElementsByClassName("technical");
              var c = document.getElementsByClassName("cultural");
              var o = document.getElementsByClassName("online");
              var ul = document.getElementById("sub_events");
              var ul1 = document.getElementById("sub_events_1");
              var ul2 = document.getElementById("sub_events_2");
              var b = document.getElementById("before");
              var b1 = document.getElementById("before_1");
              var b2 = document.getElementById("before_2");
              ul.addEventListener('click',removeStart);
              ul1.addEventListener('click',removeStart_1);
              ul2.addEventListener('click',removeStart_2);
              function removeStart(){
                b.style.display = "none";
                ul.removeEventListener('click',removeStart);
              };

              function removeStart_1(){
                b1.style.display = "none";
                ul1.removeEventListener('click',removeStart);
              };
              function removeStart_2(){
                b2.style.display = "none";
                ul2.removeEventListener('click',removeStart);
              };

              function func(li){
                for (var i = a.length - 1; i >= 0; i--) {
                  a[i].childNodes[5].style.display="none";
                  a[i].classList.remove("activeIn");
                }
                li.childNodes[5].style.display="block";
                li.classList.add("activeIn");

              };
              function func_1(li){
                for (var i = c.length - 1; i >= 0; i--) {
                  c[i].childNodes[5].style.display="none";
                  c[i].classList.remove("activeIn");
                  if(screen.width <= 800){
                    c[i].style.width="100%";
                  };
                }
                li.childNodes[5].style.display="block";
                li.classList.add("activeIn");

              };
              function func_2(li){
                for (var i = o.length - 1; i >= 0; i--) {
                  o[i].childNodes[5].style.display="none";
                  o[i].classList.remove("activeIn");
                  if(screen.width <= 800){
                    o[i].style.width="100%";
                  };
                }
                li.childNodes[5].style.display="block";
                li.classList.add("activeIn");

              };
            </script>
            <script src="../js/log_sign.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../js/reg.js"></script>
          </body>
          </html>
