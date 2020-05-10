<?php

session_start();

include 'db.php';
$message=$_POST['msg'];

$sql="insert into messages(message) values('$message')";
$result=$conn->query($sql);


header("Location:Chat.php");















?>