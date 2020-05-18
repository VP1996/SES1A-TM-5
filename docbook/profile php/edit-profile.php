<?php
$mysqli = new mysqli('localhost', 'root', ''/*, 'name of db' */);
   
   if (isset($_GET['user'])) {
      $user = $_GET['user'];
      $get_user = $mysqli->query("SELECT * FROM users /*or whatever the db is called */ WHERE username = '$user'");
      $user_data = $get_user->fetch_assoc();
    } 
    ?>

<!DOCTYPE html>
<html>
    <head>  
    <meta charset="UTF-8">
        <title> Edit <?php echo $user_data['username'] ?>'s Profile </title>
    </head> 
    <body>        Back to <a href="profile.php?user=<?php echo $user_data['username'] ?>"> <?php echo $user_data['username'] ?></a>'s Profile        
        <h3>Update Profile Information</h3> 
               <form method="post" action="update-profile-action.php?user=<?php echo $user_data['username'] ?>">                        <label>First Name:</label><br> 
                     <input type="text" name="FName" value="<?php echo $user_data['FName'] ?>" /><br>
                     <label>Last Name:</label><br> 
                     <input type="text" name="LName" value="<?php echo $user_data['LName'] ?>" /><br> 
                     <label>Age:</label><br>
                     <input type="text" name="age" value="<?php echo $user_data['age'] ?>" /><br> 
                     <label>Gender:</label><br> 
                     <input type="text" name="gender" value="<?php echo $user_data['gender'] ?>" /><br>
                     <label>Address:</label><br>          
                     <input type="text" name="location" value="<?php echo $user_data['location'] ?>" /><br>
                     <label>Phone:</label><br> 
                     <input type="text" name="phone" value="<?php echo $user_data['phone'] ?>" /><br>
                     <label>Patient/Doctor id:</label><br> 
                     <input type="text" name="id" value="<?php echo $user_data['id'] ?>" /><br>
                     <label>Password:</label><br> 
                     <input type="text" name="password" value="<?php echo $user_data['password'] ?>" /><br>
                     <br>  
                     <input type="submit" name="update_profile" value="Update Profile" />        
        </form>    
    </body>
</html>