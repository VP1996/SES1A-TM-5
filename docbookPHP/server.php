<?php
session_start();

// initializing variables
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
$f1="";
$g="";
$g1="";
$h="";
$h1="";
$z="";
$PatName = "";
$errors = array(); 

$DocName = "";
$PatName = "";


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

//Login
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
  	  $_SESSION['EmailAddress'] = $d;
	  
	  $query69 = "SELECT DFName FROM doctor WHERE DEmail='$d' AND DPassword='$f'";
  	  $results69 = mysqli_query($db, $query69);
	  $DocName = mysqli_fetch_assoc($results69);
	  
	  $_SESSION['Username'] = $DocName["DFName"];
	  
	  
  	  header('location: DocHomePage.php');
  	} elseif (mysqli_num_rows($results1) == FALSE && mysqli_num_rows($results2) == 1 ) {
  	  $_SESSION['EmailAddress'] = $d;
	  $query70 = "SELECT PFName FROM patient WHERE PEmail='$d' AND PPassword='$f'";
  	$results70 = mysqli_query($db, $query70);
	$PatName = mysqli_fetch_assoc($results70);
	$_SESSION['Username'] = $PatName["PFName"];

	  
  	  header('location: PatHomePage.php');
  	} elseif (mysqli_num_rows($results1) == 1 && mysqli_num_rows($results2) == 1 ) {
  	  array_push($errors, "System cann't have same doctor and user email and password, register again");
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
	
  }
}


// update doctor 
if (isset($_POST['Update_Dsub'])) {
  // receive all input values from the form
  $a = mysqli_real_escape_string($db, $_POST['FirstName']);
  $b = mysqli_real_escape_string($db, $_POST['LastName']);
  $c = mysqli_real_escape_string($db, $_POST['Age']);
  $d = mysqli_real_escape_string($db, $_POST['Gender']);
  $e = mysqli_real_escape_string($db, $_POST['Location']);
  $f = mysqli_real_escape_string($db, $_POST['NewEmail']);
  $g = mysqli_real_escape_string($db, $_POST['Phone']);
  $h = mysqli_real_escape_string($db, $_POST['password']);
  $h1 = mysqli_real_escape_string($db, $_POST['password2']);
  $z = mysqli_real_escape_string($db, $_POST['OldEmail']);

  if ($h != $h1) {
	array_push($errors, "The two passwords do not match");
  }

  if(count($errors) == 0){
  
  	$query = "UPDATE doctor SET DFName = '$a', DLName = '$b' ,DAge = '$c', DGender = '$d', DLocation = '$e', DPhone = '$g' , DEmail = '$f' , DPassword = '$h'   WHERE DEmail = '$z'";			 
  	mysqli_query($db, $query);
    header('location: DocHomePage.php'); 
	}
  
}

// update patient 
if (isset($_POST['Update_Psub'])) {
  // receive all input values from the form
  $a = mysqli_real_escape_string($db, $_POST['FirstName']);
  $b = mysqli_real_escape_string($db, $_POST['LastName']);
  $c = mysqli_real_escape_string($db, $_POST['Age']);
  $d = mysqli_real_escape_string($db, $_POST['Gender']);
  $e = mysqli_real_escape_string($db, $_POST['Location']);
  $f = mysqli_real_escape_string($db, $_POST['NewEmail']);
  $g = mysqli_real_escape_string($db, $_POST['Phone']);
  $h = mysqli_real_escape_string($db, $_POST['password']);
  $h1 = mysqli_real_escape_string($db, $_POST['password2']);
  $z = mysqli_real_escape_string($db, $_POST['OldEmail']);

  if ($h != $h1) {
	array_push($errors, "The two passwords do not match");
  }

  if(count($errors) == 0){
  
  	$query = "UPDATE patient SET PFName = '$a', PLName = '$b' ,PAge = '$c', PGender = '$d', PLocation = '$e', PPhone = '$g' , PEmail = '$f' , PPassword = '$h'   WHERE PEmail = '$z'";			 
  	mysqli_query($db, $query);
    header('location: PatHomePage.php'); 
	}
  
}

//For Avail doc page 
//names,location
	$query4 = "SELECT DFName , DLName, DLocation  FROM doctor WHERE DoctorID = 1";
	$results4 = mysqli_query($db, $query4);
	$AvailDocName1 = mysqli_fetch_assoc($results4);
//	printf("%s %s ", $AvailDocName1["DFName"], $AvailDocName1["DLName"]);
	$query5 = "SELECT DFName , DLName, DLocation  FROM doctor WHERE DoctorID = 2";
	$results5 = mysqli_query($db, $query5);
	$AvailDocName2 = mysqli_fetch_assoc($results5);
//	printf("%s %s ", $AvailDocName2["DFName"], $AvailDocName2["DLName"]);
	$query6 = "SELECT DFName , DLName, DLocation  FROM doctor WHERE DoctorID = 3";
	$results6 = mysqli_query($db, $query6);
	$AvailDocName3 = mysqli_fetch_assoc($results6);
//	printf("%s %s ", $AvailDocName3["DFName"], $AvailDocName3["DLName"]);
//  printf("%s ", $AvailDocName3["DLocation"]);

//For booking 
 	$query7 = "SELECT ATime , AConditions ,PatientFname , PatientLname  FROM appointment WHERE AppointmentID = 1";
	$results7 = mysqli_query($db, $query7);
	$ForBooking1= mysqli_fetch_assoc($results7);
//
 	$query8 = "SELECT ATime , AConditions ,PatientFname , PatientLname FROM appointment WHERE AppointmentID = 2";
	$results8 = mysqli_query($db, $query8);
	$ForBooking2= mysqli_fetch_assoc($results8);
//	
	$query9 = "SELECT ATime , AConditions ,PatientFname , PatientLname FROM appointment WHERE AppointmentID = 3";
	$results9 = mysqli_query($db, $query9);
	$ForBooking3= mysqli_fetch_assoc($results9);





//sub of appointments 
$appfname = "";
$applname = "";
$appcondit = "";
$appdate = "";


if (isset($_POST['App1_sub'])) {
  // receive all input values from the form
    $appfname = mysqli_real_escape_string($db, $_POST['firstname']);
	$applname = mysqli_real_escape_string($db, $_POST['lastname']);
	$appcondit = mysqli_real_escape_string($db, $_POST['conditionofillness']);
	$appdate = mysqli_real_escape_string($db, $_POST['AppDate']);
	
$query = "UPDATE appointment SET PatientFname = '$appfname', PatientLname = '$applname', ATime = '$appdate', AConditions = '$appcondit' WHERE AppointmentID = 1";
mysqli_query($db, $query);
header('location: FinishedBooking.php'); 

}

if (isset($_POST['App2_sub'])) {
  // receive all input values from the form
    $appfname = mysqli_real_escape_string($db, $_POST['firstname']);
	$applname = mysqli_real_escape_string($db, $_POST['lastname']);
	$appcondit = mysqli_real_escape_string($db, $_POST['conditionofillness']);
	$appdate = mysqli_real_escape_string($db, $_POST['AppDate']);
	
$query = "UPDATE appointment SET PatientFname = '$appfname', PatientLname = '$applname', ATime = '$appdate', AConditions = '$appcondit' WHERE AppointmentID = 2";
mysqli_query($db, $query);
header('location: FinishedBooking.php'); 

}

if (isset($_POST['App3_sub'])) {
  // receive all input values from the form
    $appfname = mysqli_real_escape_string($db, $_POST['firstname']);
	$applname = mysqli_real_escape_string($db, $_POST['lastname']);
	$appcondit = mysqli_real_escape_string($db, $_POST['conditionofillness']);
	$appdate = mysqli_real_escape_string($db, $_POST['AppDate']);
	
$query = "UPDATE appointment SET PatientFname = '$appfname', PatientLname = '$applname', ATime = '$appdate', AConditions = '$appcondit' WHERE AppointmentID = 3";
mysqli_query($db, $query);
header('location: FinishedBooking.php'); 

}






?>
