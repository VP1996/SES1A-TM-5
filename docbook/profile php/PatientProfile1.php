<?php 

$mysqli = new mysqli('localhost', 'root', ''/*, 'name of db' */);

session_start();
if (isset($_GET['user']))
{
$user = $_GET['user'];
$get_user = $mysqli->query("SELECT * FROM users /*or whatever the db is called */ WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();         
}
       
} 
?>


<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>DocBook</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">   
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
                            <a href="HomePage.html">
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
                        <a href="#"><button class="loginbutton">Sign Out</button></a>
                    </div>  
                </div>
            </div>
        </div>

        <div class="navbar">
            <a href="HomePage.html">Home</a> 
               <a href="Doctors.html">Doctors</a> 
               <a href="Bookings.html">Bookings</a> 
               <a href="Prescriptions.html">Prescriptions</a> 
               <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
               <a href="#"> <i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
               <a style="float:right" href="Profilepage.html">Profile</a> 
         </div> 
   
   
         <div class="form" style="height:780px; width:600px; padding:42px">

            <img style="margin-left:33%; margin-bottom:20px;"   src="./img/download.png" aria-placeholder="Tim Henson">
            <h1 style="font-size:28px;margin-bottom:20px;" >Your Profile</h1>

            <h3> <?php           
           $visitor = $_SESSION['username'];
           if ($user == $visitor)
{ ?>            <a href="edit-profile.php?user=<?php echo $profile_data['username'] ?>">Edit Profile</a>            <?php
}
        ?>        </h3> 
          

            
            
            <table>
              <tr>                
                     <td>Age:</td><td><?php echo $profile_data['age'] ?></td> 
                    </tr> 
                 <tr>                
                     <td>Gender:</td><td><?php echo $profile_data['gender'] ?></td>   
                    </tr>
                    <tr>                
                     <td>Location:</td><td><?php echo $profile_data['location'] ?></td>   
                    </tr>
                    
                    <tr>
                        <td>Email:</td><td><?php echo $profile_data['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Patient ID:</td><td><?php echo $profile_data['id'] ?></td> 
                    </tr>
                    <tr>
                        <td>Phone Number:</td><td><?php echo $profile_data['phone'] ?></td> 
                    </tr>
                    <tr>
                        <td>Password:</td><td>*********</td> 
                    </tr>
                    <tr>
                        <td>Address:</td><td><?php echo $profile_data['address'] ?></td> 
                    </tr>  


            </table>
            <!--
            <div class="input-row">
         
            <div class="input-group">
            <label>Age:</label>
            <?php echo $profile_data['age'] ?>
            


        </div>
            <div class="input-group">
                <label>Gender:</label>
                <?php echo $profile_data['gender'] ?>
                </div>
                </div>
    
                <div class="input-row">
                <div class="input-group">
                <label>Location:</label>
                <?php echo $profile_data['location'] ?>
                </div>
    
    
                <div class="input-group">
                <label>Email:</label>
                <?php echo $profile_data['email'] ?>
                </div>
                </div>
    
    
                <div class="input-row">
                <div class="input-group">
                <label>Password:</label>
                <?php echo $profile_data['password'] ?>
                </div>
            
               <div class="input-group">
                <label>Patient ID:</label>
               <?php echo $profile_data['id'] ?>
               </div>  
               </div>
            
                <div class="input-row">
               <div class="input-group">
                <label>Phone Number</label>
               <?php echo $profile_data['phone'] ?>
               </div>
             </div>      
                
        <!-- <button type="submit" class="submit-btn">Update</button> -->
        </div>
    </div>
  -->
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
  
  
  
   