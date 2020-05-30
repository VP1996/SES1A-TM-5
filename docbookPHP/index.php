<?php include('server.php')
 ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>DocBook</title>
   
    
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <script src="./js/Slideshow.js" type="text/javascript"></script>
    <body></body>
    <!--
        <div class="headerMenu">
            <div id="wrapper">
               <div class="logo">
                   <a href="index.html">
                   <img src="./img/docbook-logo.png"/> </a>
                        <div>
                            <a href="#"><button class='loginbutton'>Login</button></a>
                            <a href="#"><button class='registerbutton'>Register</button></a>
                        </div>
                  </div>
               </div>
            </div>
        </div>

    -->

    <div id="page-container">
        <div id="content-wrap">

        <div class="headerMenu">
            <div class="container2">
                <div class="container2-box" style="flex-basis: 50%;">
                    <div id="wrapper">
                        <div class="logo">
                            <a href="index.php">
                            <img src="./img/docbook-logo.png"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container2-box" style="flex-basis: 50%;">
                    <div style="text-align: right; padding-right: 10px;">
                        <br>
                        <br>
                        <br>
                        <a href="login.php"><button class="loginbutton">Login</button></a>
                        <a href="register.php"><button class="loginbutton">Register</button></a>
                    </div>  
                </div>
            </div>
        </div>

        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contactUS.php">Contact</a>
        </div>
        </div> 
        <!--
        <div >
            <p style="text-align: center;> <b style="font-size: large;">Contact Us</b> </p>
            <p style="text-align: center; font-size: 14px;"> &nbsp; </p>
        </div>
        -->
      
    
        
        <!--Middle Content-->


       
            <div class="box1" style=" background-color: rgba(255, 255, 255, 0.9); text-align: left; margin: 13px; width: 1550px; margin-left:auto; margin-right:auto; border-radius: 8px;">
                <br>
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    
                    <div class="mySlides fade" style="display: block;">
                        <div class="numbertext">1 / 3</div>
                        <img src="./img/5doctors.jpg" style="width:100%">
                        <div class="text">Convenience</div>
                    </div>
        
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="./img/doctors1.jpg" style="width:100%">
                        <div class="text">Reliabilty</div>
                    </div>
        
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="./img/doctors2.jpg" style="width:100%">
                        <div class="text">Safety</div>
                    </div>
        
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                    <!-- The dots/circles 
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>-->
                </div>

                    <div class="container1">
                        <div class="box1" style="flex: 70%; background-color: rgba(255, 255, 255, 0.767); border-radius: 8px;">
                        
                            <div class="container2">
                                <div class="container2-box" style="height: 100%;"><img src="./img/appointment1.png" style="vertical-align: middle; align-self: center; padding-left: 50px; padding-right: 50px;"/>
                                    <div>
                                        <br>
                                        <p style="text-align: center;"><b class="big">Step 1. Login or Register</b></p> 
                                        <p class="normal" style="text-align: center;">You will have to login first to make an appointment.<br>Don't have an account?<br>Register <a href="#">Now!</a></p>
                                    </div>
                                </div>
                                <div class="container2-box" style="height: 100%;"><img src="./img/appointment2.png" style="vertical-align: middle; padding-left: 50px; padding-right: 50px;"/>
                                    <div>
                                        <br>
                                        <p style="text-align: center;"><b class="big">Step 2. Select an appointment date</b></p>
                                        <p class="normal" style="text-align: center;">Create an appointment by selecting the suitable date for you.<br>It can be anytime according to doctors' availability.<br>You can choose to have an appointment now or later for the available time.</p>
                                    </div>
                                </div>
                                <div class="container2-box" style="height: 100%;"><img src="./img/appointment3.png" style="vertical-align: middle; padding-left: 50px; padding-right: 50px;"/>
                                    <div>
                                        <br>
                                        <p style="text-align: center;"><b class="big">Step 3. Confirm</b></p> 
                                        <p class="normal" style="text-align: center;">Complete your appointment by confirming your availability, preferred doctor and medical history.<br>Then proceed to billing and receive your confirmation email.</p>
                                    </div>
                                </div>
                                <div class="container2-box" style="height: 100%;"><img src="./img/appointment4.png" style="vertical-align: middle; padding-left: 50px; padding-right: 50px;"/>
                                    <div>
                                        <br>
                                        <p style="text-align: center;"><b class="big">Step 4. Meet with your doctor online.</b></p> 
                                        <p class="normal" style="text-align: center;">Meet ours doctors through online video call system using your available devices to dicuss.<br>Medical certificate and drug prescription may be provided afterwards</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box2" style="flex-basis: 30%;"></div>
                        <div class="box3" style="flex-basis: 30%;"></div>
                    </div>
                    <br>
                    <br>
                    <div>
                        <center>
                            <a href="register.php">
                            <button class="buttonS" style="vertical-align: middle; padding: 10px;" ><span style="font-size: 16px;">Make an Appointment now!</span></button>
                            </a>
                        </center>
                        
                    </div> 
                    <br>
                            </div>
                        </div>
                    </div>
            
        </div>
    </div>



    <div class="w3hubs-footer">
   	  
   	  <div class="w3hubs-icon">
   	  	<ul>
   	  		<li><a href="#" target="black"><i class="fa fa-facebook"></i></a></li>
   	  		<li><a href="#" target="black"><i class="fa fa-twitter"></i></a></li>
   	  		<li><a href="#" target="black"><i class="fa fa-youtube-play"></i></a></li>
   	  	</ul>
   	  </div>
   	  <div class="w3hubs-nav">
   	  	<ul>
   	  		<li><a href="index.php">Home</a></li>
   	  		<li><a href="about.php">About</a></li>
   	  		<li class="p1"><a href="contactUS.php">Contact</a></li>
   	  		

   	  	</ul>
   	  </div>
   	  <div class="w3hubs-nav1">
   	  	<ul>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">T&C's</a></li>         
   	  		<li><a href="https://github.com/VP1996/SES1A-TM-5">Our GitHub</a></li>
   	  		<li><a href="https://trello.com/b/IACoN3uK/docbook-development">Our Trello</a></li>
   	  		
   	  		
   	  		
   	  	</ul>
   	  </div>

   	  <div class="w3hubs-nav2">
   	  	<ul>
   	  		
   	  		<li><a href="#" title="To Top"><i class="fa fa-chevron-down"></i></a></li>
   	  		
   	  	</ul>
   	  </div>
   </div>

   <div class="footer-end">
   	  <p>Copyright &copy; 2020 DocBook </p>
   </div>
</body>
</html>
   