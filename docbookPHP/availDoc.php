<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>Doctors</title>
   
     <!-- CSS here-->

    <link rel="stylesheet" type="text/css" href= "./css/style1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">  
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
			<a href="PatientPrescriptions.php">Prescriptions</a> 
			<a href="chatpage.php">Chat</a> 
			<a href="#"> <i class="fa fa-bell" aria-hidden="true"></i> Notification</a> 
 
        </div>
        <br>
        
        <div class="container1">
            <div class="box1" style="flex: 3; background-color: rgba(255, 255, 255, 0.9); padding: 10px; border-radius: 8px;" >
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
        <div class="footer" style="bottom: 0;">
            

            <div>
                <p style="font-size: 16px; color: #000; font-family: sans-serif; padding-left: 100px;"> Copyright &copy; 2020 DocBook </p>
            </div>
            <div style="padding-left: 100px;">
                <table id="contact">
                    <tr>
                      <th><b style="font-size: 16px;">Contact Us</b></th>
                    </tr>
                    <tr>
                      <td><a href="contactUS.php">Email</a></td>
                    </tr>
                    <tr>
                      <td><a href="contactUS.php">Phone</a></td>
                    </tr>
                  </table>
            </div>
        </div>
    </body>
</html>
  
  
  
   