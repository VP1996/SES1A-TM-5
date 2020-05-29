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
            <br>
           
        </div>
        <br>
        <div>
            <br>
            <br>
            
        </div>
        <div class="container1" style="height: 800px;">
            <div class="box1" style="flex: 3; background-color: rgba(255, 255, 255, 0.9); padding: 20px;" >
                <div style="overflow: auto;">
                  <h1 >Upcoming appointments</h1>
                  <br>
                  <table id="general">
                      <tr>
                        <th>Patient</th>
                        <th>Condion of illness</th>
                        <th>Time</th>
                      </tr>
                      <tr>
                        <td><?php printf("%s %s ", $ForBooking1["PatientFname"] , $ForBooking1["PatientLname"]);?> </td>
                        <td><?php printf(" %s ", $ForBooking1["AConditions"]);?></td>
                        <td><?php printf(" %s ", $ForBooking1["ATime"]);?> </td>
                      </tr>
                      <tr>
                        <td><?php printf("%s %s ", $ForBooking2["PatientFname"] , $ForBooking2["PatientLname"]);?> </td>
                        <td><?php printf(" %s ", $ForBooking2["AConditions"]);?></td>
                        <td><?php printf(" %s ", $ForBooking2["ATime"]);?> </td>
                      </tr>
                      <tr>
                        <td><?php printf("%s %s ", $ForBooking3["PatientFname"] , $ForBooking3["PatientLname"]);?> </td>
                        <td><?php printf(" %s ", $ForBooking3["AConditions"]);?></td>
                        <td><?php printf(" %s ", $ForBooking3["ATime"]);?> </td>
                      </tr>
                    </table>
                </div>
            </div>
            
            <div class="box2">

            </div>
            <div class="box3">
            </div>
            </div>
            </div>
          <br>
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
</div>
</body>
</html>
   