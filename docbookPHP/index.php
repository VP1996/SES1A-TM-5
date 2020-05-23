<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>DocBook</title>
   
    
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
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
            <a href="contactUS.html">Contact</a>
        </div>
        <!--
        <div >
            <p style="text-align: center;> <b style="font-size: large;">Contact Us</b> </p>
            <p style="text-align: center; font-size: 14px;"> &nbsp; </p>
        </div>
        -->
      
    
        
        <!--Middle Content-->


       
            <div class="box1" style=" background-color: rgba(255, 255, 255, 0.808); text-align: left; margin: 13px; width: 1550px; margin-left:auto; margin-right:auto; border-radius: 8px;">
        <br>
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
  
  
  
   