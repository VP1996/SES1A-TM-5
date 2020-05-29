<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <header>
        <title> DocBook </title>
        <link rel="stylesheet" type="text/css" href= "./css/docleftbar.css" />
        <link rel="stylesheet" type="text/css" href= "./css/style.css" />        
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">  
        <link rel="stylesheet" type="text/css" href="./css/footer.css"> 
    </header>
    <div class="headerMenu">
        <div class="container2">
            <div class="container2-box" style="flex-basis: 50%;">
                <div id="wrapper">
                    <div class="logo">
                        <a href="PatHomePage.php">
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
                    <a href="index.php"><button class="loginbutton">Sign Out</button></a>
                </div>  
            </div>
        </div>
    </div>

        <div class="navbar" >
            
        <a href="PatHomePage.php">Home</a> 
			<a href="PatientProfile.php">Profile</a> 
			<a href="availDoc.php">Doctors</a> 
			<a href="PatPrescriptions.php">Prescriptions</a> 
			<a href="chatpage.php">Chat</a> 
		
            </div>    
            
        </div>

        <div>
            <br>
           
        </div>

        <div class="container1" style="flex-direction: row; padding: 10px;  ">
            <div style="flex-basis: 25%; background-color: rgba(255, 255, 255, 0.774); padding: 1%; overflow: auto;">

            
            <div class="calendar_header">
                        <img src="./img/male.png" alt="avatar" style="float:right;border-radius:50%; width:40px; border-style:solid; border-width:thin">
                        <h1 style="font-size: 22px;" >Welcome Back</h1>
                        <p class="header_copy"> Schedule</p>
                      </div>
                      <div class="calendar_plan">
                        <div class="cl_plan">
                        
                        <div class="cl_title;">Today</div>
                        <div class="cl_copy">28th  May  2020</div>
                        <a href="#"> <img src="./img/adddate.png" alt="add" style="float:right;border-radius:50%; width:40px; margin-top:5% "></a>
                        </div>
                          </div>

                 <h3>Bookings</h3>
                 <hr style="color: #000;">

                <!-- Add your php here -->

                 <br>
                 <label>patient 1</label> &nbsp | &nbsp <label>10:30am</label>
                 <hr style="color: #000;">
                 <br>
                 <label>patient 2</label> &nbsp | &nbsp <label>11:30am</label>
                 <hr style="color: #000;">

                <!---->
                
            </div>
            <div style="flex-basis: 1%;">
            </div>
            <div style="flex-basis: 74%; background-color: rgba(255, 255, 255, 0.774); padding: 1%;">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    
                    <div class="mySlides fade" style="display: block;">
                        <div class="numbertext">1 / 3</div>
                        <img src="./img/5doctors.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>
        
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="./img/coffin1.jpeg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>
        
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="./img/coffin2.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>
        
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>
        
                    <!-- The dots/circles -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <br>
                    <br>
                </div>
            
                <div class="container2">
                    <div class="container2-box" style="height: 100%;"><img src="./img/appointment2.png" style="vertical-align: middle; padding-left: 50px; padding-right: 50px;"/>
                        <div>
                            <br>
                            <p style="text-align: center;"><b class="big">Select an appointment date</b></p>
                            <p class="normal" style="text-align: center;">Create an appointment by selecting the suitable date for you.<br>It can be anytime according to doctors' availability.<br>You can choose to have an appointment now or later for the available time.</p>
                        </div>
                    </div>
                    <div class="container2-box" style="height: 100%;"><img src="./img/appointment3.png" style="vertical-align: middle; padding-left: 50px; padding-right: 50px;"/>
                        <div>
                            <br>
                            <p style="text-align: center;"><b class="big">Confirm</b></p> 
                            <p class="normal" style="text-align: center;">Complete your appointment by confirming your availability, preferred doctor and medical history.<br>Then proceed to billing and receive your confirmation email.</p>
                        </div>
                    </div>
                    <div class="container2-box" style="height: 100%;"><img src="./img/appointment4.png" style="vertical-align: middle; padding-left: 50px; padding-right: 50px;"/>
                        <div>
                            <br>
                            <p style="text-align: center;"><b class="big">Meet with your doctor online.</b></p> 
                            <p class="normal" style="text-align: center;">Meet ours doctors through online video call system using your available devices to dicuss.<br>Medical certificate and drug prescription may be provided afterwards</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <br>
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
   	  		<li><a href="PatHomePage.php">Home</a></li>
   	  		<li><a href="about.php">About</a></li>
   	  		<li class="p1"><a href="contactUS.php">Contact</a></li>
   	  		
        <br>

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
   
</html>