<?php
  $mysqli = new mysqli('localhost', 'root', ''/*, 'name of db' */);
    if (isset($_POST['update_profile'])) {
    $user = $_GET['user'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $update_profile = $mysqli->query("UPDATE users SET FName = '$firstname', LName = '$lastname', gender = '$gender', age = $age, location = '$location', phone = '$phone', id = '$id', password = '$password'
                      WHERE username = '$user'");
        if ($update_profile) {
           header("Location: profile.php?user=$user");
        } else {
          echo $mysqli->error;
        }
    }
?>