<?php include('server.php') ?>
<html>
    <header>
        <title> DocBook </title>
        <link rel="stylesheet" type="text/css" href= "./css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
        <link rel="stylesheet" type="text/css" href= "./css/docleftbar.css" />
        
        
    </header>

    <div id="page-container">
        <div id="content-wrap">

    <div class="headerMenu">
        <div class="container2">
            <div class="container2-box" style="flex-basis: 50%;">
                <div id="wrapper">
                    <div class="logo">
                        <a href="DocHomePage.php">
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
            
            <a href="DocHomePage.php">Home</a> 
            <a href="DoctorProfile.php">Profile</a> 
            <a href="DoctorAppointments.php">Bookings</a> 
            <a href="DoctorPrescriptions.php">Prescriptions</a> 
            <a href="chatpage.php">Chat</a> 
          
        </div>

        <div>
            <br>
           
        </div>

        <div class="container1" style="flex-direction: row; padding: 1%; margin-left:4%;  ">
            <div style="flex-basis: 25%; background-color: rgba(255, 255, 255, 0.9); padding: 1%; overflow: auto;">
            

                <!-- Add your php here -->

                      <div class="calendar_header">
                        <img src="./img/male.png" alt="avatar" style="float:right;border-radius:50%; width:40px; border-style:solid; border-width:thin">
                        <h1 style="font-size: 22px;" >Welcome Back</h1>
                        <p class="header_copy"> Schedule</p>
                      </div>
                      <div class="calendar_plan">
                        <div class="cl_plan">
                        
                        <div class="cl_title;">Today</div>
                        <div class="cl_copy">26th  May  2020</div>
                        <a href="#"> <img src="./img/adddate.png" alt="add" style="float:right;border-radius:50%; width:40px; margin-top:5% "></a>
                        </div>
                          </div>
                        
                      <div class="calendar_events">
                        <p class="header_copy">Upcoming Events</p>
                        <div class="event_item">
                          <div class="dot dot_active"></div>
                          <div class="time"> <?php printf("%s with %s  %s ", $ForBooking1["ATime"], $ForBooking1["PatientFname"] , $ForBooking1["PatientLname"]);?>  </div>
                          <a href="#"><img src="./img/male.png" alt="avatar" style="float:right;border-radius:50%; width:40px; border-style:solid; border-width:thin"></a>
                          <div class="desc"><?php printf(" %s ", $ForBooking1["AConditions"]);?></div>
                        </div>
                        <div class="event_item">
                          <div class="dot"></div>
                          <div class="time"><?php printf("%s with %s %s ", $ForBooking2["ATime"], $ForBooking2["PatientFname"] , $ForBooking2["PatientLname"]);?> </div>
                          <a href="#"><img src="./img/male.png" alt="avatar" style="float:right;border-radius:50%; width:40px; border-style:solid; border-width:thin"></a>
                          <div class="desc"><?php printf(" %s ", $ForBooking2["AConditions"]);?></div>
                        </div>
                        <div class="event_item">
                          <div class="dot"></div>
                          <div class="time"> <?php printf("%s with %s %s ", $ForBooking3["ATime"], $ForBooking3["PatientFname"] , $ForBooking3["PatientLname"]);?> </div>
                          <a href="#"><img src="./img/male.png" alt="avatar" style="float:right;border-radius:50%; width:40px; border-style:solid; border-width:thin"></a>
                          <div class="desc"> <?php printf(" %s ", $ForBooking3["AConditions"]);?>  </div>
                        </div>
</div>
						
						
           
            </div>
            <div style="flex-basis: 1%;">
            </div>
            <div style="flex-basis: 75%; background-color: rgba(255, 255, 255, 0.774); padding: 1%; margin-right:4%">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Australia%2FSydney&amp;src=MjNwdDU3MTc1YnJtZTVlaTA3M2pwZzhva29AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23009688" style="border:solid 1px #777" width="1200" height="800" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
	
	

    
                </div>
            </div>
            <div class="box2" style="flex-basis: 30%;"></div>
            <div class="box3" style="flex-basis: 30%;"></div>
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
   	  		<li><a href="DocHomePage.php">Home</a></li>
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
   