<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>DocBook</title>
   
     <!-- CSS here-->

    <link rel="stylesheet" type="text/css" href= "./css/style1.css" />
    </head>
    
    <body>

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
                    
                </div>  
            </div>
        </div>
    </div>
    
        <div class="navbar">
                <a href="PatHomePage.php">Your Profile</a>
                <a href="availDoc.php">Our Doctors</a>
                <a href="#">Notifications</a>
                <a href="#">Chat with doctor</a>
                <a href="#">Appointments</a>
                <a href="index.php">Sign out</a>
        </div>
        <br>
        
        <div class="container1">
            <div class="box1" style="flex: 3; background-color: rgba(108, 119, 128, 0.822); padding: 10px; border-radius: 8px;" >
                <h1 style="padding-left: 50px;"> Available Doctors</h1>
                <br>
                <table id="general">
                    <tr>
                      <th>Doctor</th>
                      <th>Location</th>
                      <th>Time</th>
                      <th>Availabilitiy</th>
                    </tr>
                    <tr>
                      <td>Alex Jones</td>
                      <td>23 pitt street</td>
                      <td>9am - 12pm</td>
                      <td style="text-align: center;"><button class="button"><a href="appointmentBooking1.php">Appointment</a></button></td>
                    </tr>
                    <tr>
                      <td>Rachekl Done</td>
                      <td>54 george street</td>
                      <td>9am - 12pm</td>
                      <td style="text-align: center;">Busy</td>
                    </tr>
                    <tr>
                      <td>Bob Nan</td>
                      <td>uts building 5</td>
                      <td>2pm -5pm</td>
                      <td style="text-align: center;"><button class="button"><a href="appointmentBooking1.php">Appointment</a></button></td>
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

