<?php
session_start();

// initializing variables
$a="";
$b="";
$c="";
$d="";
$f="";
$f1="";
$g="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'docbookdatabase');

// REGISTER USER
if (isset($_POST['Reg_sub'])) {
  // receive all input values from the form
  $a = mysqli_real_escape_string($db, $_POST['FirstName']);
  $b = mysqli_real_escape_string($db, $_POST['LastName']);
  $c = mysqli_real_escape_string($db, $_POST['Age']);
  $d = mysqli_real_escape_string($db, $_POST['EmailAddress']);
  $f = mysqli_real_escape_string($db, $_POST['Password']);
  $f1 = mysqli_real_escape_string($db, $_POST['ConfirmPassword']);
  $g = mysqli_real_escape_string($db, $_POST['AreYouADoctor']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($a)) { array_push($errors, "Username is required"); }
  if (empty($d)) { array_push($errors, "Email is required"); }
  if (empty($f)) { array_push($errors, "Password is required"); }
  if ($f != $f1) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM doctor WHERE DFName='$a' OR DEmail='$d' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['FirstName'] == $a) {
      array_push($errors, "Username already exists");
    }

    if ($user['EmailAddress'] == $d) {
      array_push($errors, "Email already exists");
    }
	
  }

  
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database
    if ($g == "Yes" || $g == "yes" ||$g == "YES" ){
  	$query = "INSERT INTO doctor (DFName, DLName, DAge, DEmail, DPassword) 
	         VALUES('$a', '$b', '$c', '$d', '$f')";
  	mysqli_query($db, $query);
  	$_SESSION['FirstName'] = $a;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');}
	else {
		$query = "INSERT INTO patient (PFName, PLName, PAge, PEmail, PPassword) 
	         VALUES('$a', '$b', '$c', '$d', '$f')";
  	    mysqli_query($db, $query);
  	    $_SESSION['FirstName'] = $a;
  	    $_SESSION['success'] = "You are now logged in";
  	    header('location: login.php');
	}
  }
}

if (isset($_POST['Log_sub'])) {
  $d = mysqli_real_escape_string($db, $_POST['EmailAddress']);
  $f = mysqli_real_escape_string($db, $_POST['Password']);

  if (empty($d)) {
  	array_push($errors, "Username is required");
  }
  if (empty($f)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query1 = "SELECT * FROM doctor WHERE DEmail='$d' AND DPassword='$f'";
  	$results1 = mysqli_query($db, $query1);
	$query2 = "SELECT * FROM patient WHERE PEmail='$d' AND PPassword='$f'";
  	$results2 = mysqli_query($db, $query2);
  	
	if (mysqli_num_rows($results1) == 1 && mysqli_num_rows($results2) == FALSE ) {
  	  $_SESSION['EmailAddress'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: DocHomePage.php');
  	} elseif (mysqli_num_rows($results1) == FALSE && mysqli_num_rows($results2) == 1 ) {
  	  $_SESSION['EmailAddress'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: PatHomePage.php');
  	} elseif (mysqli_num_rows($results1) == 1 && mysqli_num_rows($results2) == 1 ) {
  	  array_push($errors, "System cann't have same doctor and user email and password, register again");
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
	
  }
}

?>
