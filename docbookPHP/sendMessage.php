<?php

include "server.php";
//session_start();
if($_POST)
{
	$name=$_SESSION['EmailAddress'];
    $msg=$_POST['msg'];
    
	$sql55="INSERT INTO `chat`(`ChatEmailAddress`, `ChatMessage`) VALUES ('".$name."', '".$msg."')";

	$query = mysqli_query($db,$sql55);
	if($query)
	{
		header('Location: chatpage.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>