<?php

session_start();
include 'db.php';
?>
<!DOCTYPE html>



<html>

		<head>
				<title>Chat</title>
		</head>

<h1> <?php ?>-Online</hl>
<div class="main">


	<div class="output">
		<?php $sql = "SELECT * FROM messages ORDER BY date ASC";
		$result = $conn->query($sql);
		
		
	if ( $result->num_rows > 0 ) {
		while($row = $result->fetch_assoc()) {
			echo "" .$row["message"]. " :". $row["date"]. "<br>";
			echo "<br>";
			
		}
		
		
		$conn->close();
		
	}
	?>
	
		</div>



<form method="post" action="send.php">

	<textarea name="msg" placeholder="Type here to send messages." class="send"></textarea> <br>
	
	<input type="submit" value="Send">



</form>















</html>