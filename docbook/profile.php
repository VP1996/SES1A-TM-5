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
<head>        
	<meta charset="UTF-8">
	        <title><?php echo $profile_data['username'] ?>'s Profile</title>
</head>
<body>
    <h1> <?php echo $profile_data['username'] ?>'s Profile   </h1>     
    <h3> <?php           
           $visitor = $_SESSION['username'];
           if ($user == $visitor)
{ ?>            <a href="edit-profile.php?user=<?php echo $profile_data['username'] ?>">Edit Profile</a>            <?php
}
        ?>        </h3>        
        <table>
                    <tr>                
                    	<td>First Name:</td><td><?php echo $profile_data['FName'] ?></td>   
                    </tr>
                    <tr>
                        <td>Last Name:</td><td><?php echo $profile_data['LName'] ?></td>
                    </tr>
                    <tr>                
                    	<td>Age:</td><td><?php echo $profile_data['age'] ?></td> 
                    </tr> 
                    <tr>
                        <td>Gender:</td><td><?php echo $profile_data['gender'] ?></td>
                    </tr>
                    <tr>
                        <td>Address:</td><td><?php echo $profile_data['address'] ?></td> 
                    </tr>
                    <tr>
                        <td>Phone:</td><td><?php echo $profile_data['phone'] ?></td>
                    </tr>
                    <tr>
                        <td>patient/doctor id:</td><td><?php echo $profile_data['id'] ?></td>
                    </tr>
                    <tr>
                        <td>Password:</td><td><?php echo $profile_data['password'] ?></td>
                    </tr>        
        </table> 
    </body>
</html> 
?>