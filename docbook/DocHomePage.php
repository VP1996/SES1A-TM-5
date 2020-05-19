	   

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <header>
        <title> DocBook </title>
        <link rel="stylesheet" type="text/css" href= "./css/style.css" />
        <script src="./js/Slideshow.js" type="text/javascript"></script>
    </header>
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

        <div class="navbar" >
            
                <a href="#">Your Profile</a>
                <a href="#">Online Prescriptions</a>
                <a href="#">Chat with patient</a>
                <a href="#">Appointments</a>
                <a href="index.php">Sign out</a>
            
            
        </div>

        <div>
            <br>
           
        </div>

        <div class="container1" style="flex-direction: row; padding: 10px;  ">
            <div style="flex-basis: 25%; background-color: rgba(255, 255, 255, 0.774); padding: 1%; overflow: auto;">
                 <h3>Next</h3>
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

        
        <br>

        <div class="footer">
            
        <div>
            <p style="font-size: 16px; color: #000; font-family: sans-serif; padding-left: 100px;"> Copyright &copy; 2020 DocBook </p>
        </div>
        <br>
        
    

    

    </body>
    
</html>
