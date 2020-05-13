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

<html>
    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">



     
   <!-- <header style="top: 0;"> 
    <div style="top: 0; width: 30px;">
    <a href="HomePage.html"> 
        <img src="./img/docbook-logo.png" /> 
        </a> 
    </div>
    </header>
--->
<style>




  
.profile{
    background-color: white;
    display:flex;
    flex-basis: 60%;
    padding: 40px 60px;
    outline: blue;


}



/* Style the navigation bar */
.navbar {
  width: 100%;
  background-color: rgba(53, 52, 52, 0.719);
  overflow: auto;
  
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding-top: 12px;
  padding-bottom: 12px;
  padding-left: 20px;
  padding-right: 20px;
  color: white;
  text-decoration: none;
  font-size: 15px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: rgba(0, 0, 0, 0.658);
}

/* Current/active navbar link */
.navbar a:active {
  background-color: rgba(6, 149, 216, 0.5);
  box-shadow: 0 5px #666;
  transform: translate();
}

.profile{

  margin-left: 20%;
  margin-right: 20% ;



}

.box{
    width:60%;
    margin-left: 20%;
    margin-right: 20%;
    margin-top: 5%;
}

img {
  border-radius: 50%;
}



.input-row{
    display: flex;
    justify-content: space-between;
    margin-bottom: 50px;
    position: relative;
    
}


.input-row .input-group{


    flex-basis: 45%;

}

input{

    width: 100%;
    border:none;
    border-bottom: 2px solid  rgb(47, 197, 190);
    outline: none;
    padding-bottom: 6px;
}

body {
  background-image: url("./img/docbook-bg1.jpg");
 
  font-size: 14px;
    font-family: Arial;

}
.submit-btn{

width: 85%;
padding: 10px 30px;
cursor: pointer;
display: block;
margin: auto;
background: linear-gradient( to right, rgb(6, 161, 223), rgb(77, 136, 224));
border: 0;
outline: none;
border-radius: 30px;

}
  


</style>

<body>
 
    <div class="navbar">
         <a href="HomePage.html">Home</a> 
            <a href="Doctors.html">Doctors</a> 
            <a href="Bookings.html">Bookings</a> 
            <a href="Prescriptions.html">Prescriptions</a> 
            <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
            <a href="#"> <i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
            <a href="Profilepage.html">Profile</a> 
      </div> 

    <div class='box'>

     <div class="profile">
      <div class="image">

        <h3 style="margin-left:30%; font-size:xx-large;">Your Profile</h3>
        
        <h3> <?php           
           $visitor = $_SESSION['username'];
           if ($user == $visitor)
{ ?>            <a href="edit-profile.php?user=<?php echo $profile_data['username'] ?>">Edit Profile</a>            <?php
}
        ?>        </h3>  

        <img style="margin-left:25%; margin-bottom: 8%;"   src="./img/download.png" aria-placeholder="Tim Henson">
        
        <form>

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
            



    <button type="submit" class="submit-btn">Update</button>

        </form>




</div>
     </div>
    </div>




   
   



 
    
    
    
</body>



    </html>