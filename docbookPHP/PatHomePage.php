<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <header>
        <title> DocBook </title>
        <link rel="stylesheet" type="text/css" href= "./css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">  
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

        <div class="container1" style="flex-direction: row; padding: 10px;  ">
            <div style="flex-basis: 25%; background-color: rgba(255, 255, 255, 0.774); padding: 1%; overflow: auto;">
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
            </div>
        </div>

        <div class="container1">
            <div class="box1" style="flex: 70%; background-color: rgba(255, 255, 255, 0.767); border-radius: 8px;">
                <br>
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

        <div class="footer" style="position: relative;">
            <div>
                <p style="font-size: 16px; color: #000; font-family: sans-serif; padding-left: 100px;"> Copyright &copy; 2020 DocBook </p>
            </div>
            <br>
            <div style="padding-left: 100px;">
                <table id="contact">
                    <tr>
                      <th><b style="font-size: 16px;">Contact Us</b></th>
                    </tr>
                    <tr>
                      <td><a href="#">Email</a></td>
                    </tr>
                    <tr>
                      <td><a href="#">Phone</a></td>
                    </tr>
                  </table>
            </div>
        </div>
    </body>
    
</html>