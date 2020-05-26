<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>DocBook</title>
    
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <script src="./js/Slideshow.js" type="text/javascript"></script>
    <body>
    
    <form action = "PatientProfile.php" method = "post"> 
    <div id="page-container">
        <div id="content-wrap">

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
   
   
         <div class="form" style="height:1000px; width:600px; padding:42px">

            <img style="margin-left:33%; margin-bottom:20px;"   src="./img/download.png" aria-placeholder="Tim Henson">
            <h1 style="font-size:28px;margin-bottom:20px;" >Update Your Profile</h1>
           <?php include('errors.php'); ?>

            <div class="input-row">
				<div class="input-group">
				<label>First Name:</label>
				<input type ="text" name="FirstName" class="input-field" required />
				</div>
			    <div class="input-group">
                <label>Last Name:</label>
                <input type ="text" name="LastName" class="input-field" required />
                </div>
                </div>
            <div class="input-row">
                <div class="input-group">
                <label>Age:</label>
                <input type ="text" name="Age" class="input-field"  required />
                </div>
                <div class="input-group">
                <label>Gender:</label>
                <input type ="text" name="Gender" class="input-field" required />
                </div>
                </div>
            <div class="input-row">
                <div class="input-group">
                <label>Old Email:</label>
                <input type="text" name="OldEmail" class="input-field" required /><br>
                </div>
               <div class="input-group">
                <label>New Email:</label>
               <input type="text" name="NewEmail" class="input-field" required /><br>
               </div>  
               </div>
            <div class="input-row">
               <div class="input-group">
                <label>Location</label>
               <input type="text" name="Location" class="input-field" required /><br>
               </div>
			   <div class="input-group">
                <label>Phone</label>
               <input type="text" name="Phone" class="input-field" required /><br>
               </div>
             </div> 
			<div class="input-row">
               <div class="input-group">
                <label>Password</label>
               <input type="text" name="password" class="input-field" required /><br>
               </div>
			   <div class="input-group">
                <label>Repeat Password</label>
               <input type="text" name="password2" class="input-field" required /><br>
               </div>
             </div>      
 
        <input type="submit" class="btn"  name="Update_Psub"  value="Update" placeholder="Update" />
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
   