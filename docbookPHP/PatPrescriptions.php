<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <header>
        <title> Prescriptions </title>
       
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    
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
			<a href="PatientProfile.php">Profile</a> 
			<a href="availDoc.php">Doctors</a> 
			<a href="PatPrescriptions.php">Prescriptions</a> 
			<a href="chatpage.php">Chat</a> 
		
        </div>

        <div>
            <br>
           
        </div>
        <br>
        <div>
            <br>
            <br>
            
        </div>
        <div class="container1" style="height: 800px">
            <div class="box1" style="flex: 3; background-color: rgba(255, 255, 255, 0.9); padding: 20px;" >
                <div style="overflow: auto" >
                  <h1 >Prescriptions</h1>
                  <br>
                  <table id="general">
                      <tr>
                        <th>Doctor</th>
                        <th>Prescription</th>
                        <th>Date issued</th>
                        <th>PDF</th>
                      </tr>
                      <tr>
                        <td>
                          <div class="container1">
                            <div style="flex-basis:40%">
                              <img src="./img/female.png" alt="avatar" style=" border-radius:50%; width:35px; border-style:solid; border-width:thin"> 
                            </div>
                            <div style="flex-basis:60%">
                              <p style="text-align:left; color: #000; font-size: 20px;">Rachekl Done</p> 
                            </div>
                          </div>
                        </td>
                        <td><p style="text-align:left; color: #000; font-size: 20px;">Panadol</p></td>
                        <td>12/3/2020</td>
                        <td><a href="#"><img style="width:50px" src="./img/pdf.png"></a></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="container1">
                            <div style="flex-basis:40%">
                              <img src="./img/male.png" alt="avatar" style=" border-radius:50%; width:35px; border-style:solid; border-width:thin"> 
                            </div>
                            <div style="flex-basis:60%">
                              <p style="text-align:left; color: #000; font-size: 20px;">Jeff Boses</p> 
                            </div>
                          </div>  
                        </td>
                        <td><p style="text-align:left; color: #000; font-size: 20px;">Aspirin</p></td>
                        <td>14/4/2020</td>
                        <td><a href="#"><img style="width:50px" src="./img/pdf.png"></a></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="container1">
                            <div style="flex-basis:40%">
                              <img src="./img/male.png" alt="avatar" style=" border-radius:50%; width:35px; border-style:solid; border-width:thin"> 
                            </div>
                            <div style="flex-basis:60%">
                              <p style="text-align:left; color: #000; font-size: 20px;">Bob Nan</p> 
                            </div>
                          </div>
                        </td>
                        <td><p style="text-align:left; color: #000; font-size: 20px;">Buscopan</p></td>
                        <td>4/5/2020</td>
                        <td><a href="#"><img style="width:50px" src="./img/pdf.png"></a></td>
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
   	  		<li><a href="PatHomePage">Home</a></li>
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
   