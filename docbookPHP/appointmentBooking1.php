<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <header>
        <title> DocBook </title>
        <link rel="stylesheet" type="text/css" href= "./css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
          
    </header>
    <body>

        
    <div id="page-container">
        <div id="content-wrap">
        
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
        <a href="PatientPrescriptions.php">Prescriptions</a> 
		<a href="chatpage.php">Chat</a> 
       
            
            
        </div>

        <div>
            <br>
           
        </div>

                <div >
                    <h1 style="text-align: center;">Booking Appointment with <?php printf("%s %s ", $AvailDocName1["DFName"], $AvailDocName1["DLName"]); ?></h1>
                </div>  
        <div>
            <br>
            <br>
            
        </div>
        <form method="post" action="appointmentBooking1.php">
        <div class="container1">
            <div class="box1" style="flex: 1; background-color: rgba(209, 209, 209, 0.856); text-align: left; border-radius: 4px;">
                <div class="container2" style="flex-flow: column;">
                    <br>
                    <div class="container2-box" style="text-align: center;">
                        <label for="fname" style="font-size: 18px; color: #000;" >First Name</label>
                        <div style="padding-left: 100px; padding-right: 100px;">
                        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
                        </div>
                    </div>
                    <div class="container2-box" style="text-align: center;">
                        <label for="lname" style="font-size: 18px; color: #000;">Last Name</label>
                        <div style="padding-left: 100px; padding-right: 100px;">
                        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                        </div>
                    </div>
                    <div class="container2-box" style="text-align: center;">
                        <label for="condition" style="font-size: 18px; color: #000;">Condition of illness</label>
                        <div style="padding-left: 100px; padding-right: 100px;">
                        <input type="text" id="condition" name="conditionofillness" placeholder="Current condition.." required>
                        </div>
                    </div>
                    <div class="container2-box" style="text-align: center;">
                        <label for="date" style="font-size: 18px; color: #000;">Insert a perferred time and date for the appointment</label>
                        <div style="padding-left: 100px; padding-right: 100px;">
                            <br>
                                <label for="date" style=" color: #000;">Date/Time:</label>
								<input type="text" id="date" name="AppDate" required>
                        </div>
                    </div>
				
                    <br>
                 
                    <div class="container2-box" style="padding-left: 200px; padding-right: 200px;">
                        <input type="submit" name="App1_sub"  value="Submit appointment">
                    </div>
                    <br>
                </div>
            </div>
            <div class="box2">

            </div>
            <div class="box3">

            </div>
        </div>
        </form>
        <div>

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
   	  		<li><a href="PatHomePage.php">Home</a></li>
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
   