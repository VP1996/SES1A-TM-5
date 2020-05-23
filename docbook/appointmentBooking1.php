<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <header>
        <title> DocBook </title>
        <link rel="stylesheet" type="text/css" href= "./css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">  
    </header>
    <body>

        
    <div id="page-container">
        <div id="content-wrap">
        
        <div class="headerMenu">
            <div class="container2">
                <div class="container2-box" style="flex-basis: 50%;">
                    <div id="wrapper">
                        <div class="logo">
                            <a href="PatientHomePage.php">
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
                        <a href="PatHomePage.php"><button class="loginbutton">Sign Out</button></a>
                    </div>  
                </div>
            </div>
        </div>

        <div class="navbar" >
            
            <a href="PatHomePage.php">Home</a> 
            <a href="availDoc.php">Doctors</a> 
            <a href="Bookings.php">Bookings</a> 
            <a href="PatientPrescriptions.php">Prescriptions</a> 
            <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
            <a href="#"> <i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
            <a style="float:right" href="PatientProfile.php">Profile</a> 
            
            
        </div>

        <div>
            <br>
           
        </div>

                <div >
                    <h1 style="text-align: center;">Booking Appointment</h1>
                </div>  
        <div>
            <br>
            <br>
            
        </div>
        <form action="appointment3.php">
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
                        <input type="text" id="condition" name="conditionofillness" placeholder="current condition.." required>
                        </div>
                    </div>
                    <div class="container2-box" style="text-align: center;">
                        <label for="time" style="font-size: 18px; color: #000;">Insert a perferred date for the appointment</label>
                        <div style="padding-left: 100px; padding-right: 100px;">
                            <br>
                                <label for="time" style=" color: #000;">Date:</label>
                                <input type="date" id="time" name="time" required>
                        </div>
                    </div>
                    <br>
                    <div class="container2-box" style="text-align: center;">
                        <label for="file" style="font-size: 18px; color: #000;">Insert the previous medical histories. leave if not <br></label>
                        <br>
                        <div>
                        <div style="padding-left: 100px;">
                        <label for="myfile" style=" color: #000;">Select files:</label>
                        <input type="file" id="myfile" name="myfile" style=" color: #000;" multiple><br><br>
                        </div>
                        </div>
                    </div>
                    <div class="container2-box" style="padding-left: 200px; padding-right: 200px;">
                        <input type="submit" value="Proceed to Billing">
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

        <div class="footer">
            

            <div>
                <p style="font-size: 16px; color: #000; font-family: sans-serif; padding-left: 100px;"> Copyright &copy; 2020 DocBook </p>
            </div>
            <br>
            <div style="padding-left: 100px;">
                <table id="contact">
                    <tr>
                      <th>Contact Us</th>
                    </tr>
                    <tr>
                      <td><a href="#">Email</a></td>
                    </tr>
                    <tr>
                      <td><a href="#">Phone</a></td>
                    </tr>
                  </table>
            </div>
        
    
        
    
        </body>
        
    </html>