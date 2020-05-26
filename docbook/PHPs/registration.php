
<?php
$a=$_POST['FName'];
$b=$_POST['LName'];
$c=$_POST['Age'];
$d=$_POST['Email'];
$e=$_POST['PNumber'];
$f=$_POST['Password'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname='db1';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfuly";
$sql = "INSERT INTO user (ufname,ulname,uAge,uEmail,uPNumber,uPassword) VALUES ('$a','$b','$c','$d','$e','$f')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
}else{
  echo "Error: " . $sql . "<br>" . $conn->error; 
}  

$conn->close();
?>	   