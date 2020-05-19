<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>Contact Us</title>
       
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <script src="./js/Slideshow.js" type="text/javascript"></script>
    <body>
         
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
                    </div>  
                </div>
            </div>
        </div>

        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contactUS.php">Contact</a>
        </div>
    </div> 
   </head> 

   <div class="box1" style=" background-color: rgba(255, 255, 255, 0.808); padding:20px; text-align: left; margin: 13px; width: 1550px; margin-left:auto; margin-right:auto; border-radius: 8px;">
                
             <h1>Contact Us</h1>
            
                  <div style="margin:20px">
                    <form action="/action_page.php">

                      <label for="fname">First Name</label>
                      <input type="text" id="fname" name="firstname" placeholder="Your First Name">
                      <label for="lname">Last Name</label>
                      <input type="text" id="lname" name="lastname" placeholder="Your Last Name">
                      <label for="fname" >Email Address</label>
                      <input type="text" id="fname" name="EmailAddress" placeholder="Your Email Address">
                      <label for="subject">Comments</label>
                      <textarea id="subject" name="Comments"  style="height:170px"></textarea>
                      <input type="submit" value="Submit" class='btn'>
                    </form>
                  </div>

                    <div class="mapouter"><div class="gmap_canvas" style="display:inline-block; "><iframe width="1000" height="480" id="gmap_canvas" src="https://maps.google.com/maps?q=Sydney&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="" marginheight="0" marginwidth="3"></iframe><a href="https://periodic-table-of-elements.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style></div>
</div>
             </div>
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
                      <td><a href="contactUS.php">Email</a></td>
                    </tr>
                    <tr>
                      <td><a href="contactUS.php">Phone</a></td>
                    </tr>
                  </table>
            </div>
                  

            
    
</html>
  
  
  
   