<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>DocBook</title>
    
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
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
    

    

    </body>
    
</html>
  
  
  
   