<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <div id="page-container">
        <div id="content-wrap">
    <title>Doctors</title>
   
     <!-- CSS here-->

    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
 
    </head>
    
    <body>


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
    
        <div class="navbar">
        <a href="PatHomePage.php">Home</a> 
			<a href="PatientProfile.php">Profile</a> 
			<a href="availDoc.php">Doctors</a> 
			<a href="PatPrescriptions.php">Prescriptions</a> 
			<a href="chatpage.php">Chat</a> 
		
 
        </div>
        <br>
        
        <div class="container1" style="height: 800px">
            <div class="box1" style="flex: 3; background-color: rgba(255, 255, 255, 0.9); padding: 10px;" >
                <h1> Available Doctors</h1>
                <br>
                <table id="general">
                    <tr>
                      <th>Doctor</th>
                      <th>Location</th>
                      <th>Booking</th>
                    </tr>
                    <tr>
                      <td><?php printf("%s %s ", $AvailDocName1["DFName"], $AvailDocName1["DLName"]); ?> </td>
                      <td><?php printf("%s ", $AvailDocName1["DLocation"]); ?> </td>
                      <td style="text-align: center;"><button class="button"><a href="appointmentBooking1.php">Appointment</a></button></td>
                    </tr>
                    <tr>
                      <td><?php printf("%s %s ", $AvailDocName2["DFName"], $AvailDocName2["DLName"]); ?> </td></td>
                       <td><?php printf("%s ", $AvailDocName2["DLocation"]); ?> </td>
                      <td style="text-align: center;"><button class="button"><a href="appointmentBooking2.php">Appointment</a></button></td>
                    </tr>
                    <tr>
                      <td><?php printf("%s %s ", $AvailDocName3["DFName"], $AvailDocName3["DLName"]); ?> </td></td>
                       <td><?php printf("%s ", $AvailDocName3["DLocation"]); ?> </td>
                      <td style="text-align: center;"><button class="button"><a href="appointmentBooking3.php">Appointment</a></button></td>
                    </tr>
					<tr>
                      <td> </td></td>
                       <td> </td>
                      <td> </td>
                    </tr>
                  </table>
            </div>
            <div class="box2">

            </div>
            <div class="box3">

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
   
  
  
   