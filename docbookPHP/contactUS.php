<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>Contact Us</title>
       
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
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

   <div class="box1" style=" background-color: rgba(255, 255, 255, 0.808); padding:20px; text-align: left; margin: 13px; width: 1550px; margin-left:auto; margin-right:auto; border-radius: 8px; ">
                
             
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
                      <textarea id="subject" name="Comments"  style="height:100px; width:1470px"></textarea>
                      <input type="submit" value="Submit" class='btn'>
                    </form>
                  </div>

                    <center><div class="mapouter"><div class="gmap_canvas" style="display:inline-block; "><iframe width="1000" height="480" id="gmap_canvas" src="https://maps.google.com/maps?q=Sydney&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="" marginheight="0" marginwidth="3"></iframe><a href="https://periodic-table-of-elements.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style></div> </center>
                        </div>
                    </div>
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
   	  		<li><a href="index.php">Home</a></li>
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
   