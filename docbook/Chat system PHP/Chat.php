<?php

session_start();
include 'db.php';
?>
<!DOCTYPE html>



<html>

	<head>
<title>Chat Box</title> 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="containerchat">
  
    <div class="msg-header" style="height:1000px">
      <div class="msg-header-img" > 	
       
    <div class="active">
    


</div>
<div class="header-icons">
<center> <i class="fa fa-phone"></i>
    <i class="fa fa-video-camera"></i>
    <i class="fa fa-info-circle"></i>
<center>


</div>  

 
<!-- This is where the chats ans chat page goes please combine it -->


</div>

<div class ="chat-pg">
    <div class="chats">
        <div class="msg-pg">
        <div class="received-msgs">
        <div class="received-msgs-img">
   
</div>
<br> <br>
<br> <br>
<br> <br>
            <div class="received-msg">
                <div class="received-msg-inbox">
                    

        <div class="send-chats">
            <div class="outgoing-msg">
                <div class="outgoing-msgs-img">
                <img src="">
                </div>

            <div class="outgoing-msg"">
                <div class="outgoing-msg-inbox">
                
           <div>     
           <div class="outgoing-msgs-img">
            </div>

         </div>
		 </div>
		 </div>
		 </div>
		 </div>
		 
</body>
				
				
<div class="main">


	<div class="output" >
		<?php $sql = "SELECT * FROM messages ORDER BY date ASC";
		$result = $conn->query($sql);
		
	if ( $result->num_rows > 0 ) {
		while($row = $result->fetch_assoc()) {
			echo "". $row["name"].  " " .$row["message"]. " :". $row["date"]. "<br>";
			echo "<br>";
			
		}
		
		$conn->close();
	}
	?>
	
		</div>

<form method="post" action="send.php">

	<textarea name="msg" style="width:100%" placeholder="Type here to send messages." class="send"></textarea> <br>
	
	<input class="sendBtn" type="submit" value="Send" onclick="disableSend()" >
<br>
<br>
<br>
<br>

<script type="text/javascript">
    function disableSend(){
        if(this.value.length > 0) { 
            document.getElementById('sendBtn').disabled = false; 
        } else { 
            document.getElementById('sendBtn').disabled = true;
        }
    }
   
</script>

</form>



</div> 












</html>