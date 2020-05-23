<!-- Use the external css btw-->
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
    <div class="msg-header">
       <div class="msg-header-img">
        <img src="./img/male.png">

    <div class="active">
    <h4>Matthew Lewis</h4>
    <h6>2 hours ago...</h3>


</div>
<div class="header-icons">
<i class="fa fa-phone"></i>
    <i class="fa fa-video-camera"></i>
    <i class="fa fa-info-circle"></i>



</div>  

 
<!-- This is where the chats ans chat page goes please combine it -->


</div>









<div class ="chat-pg">
    <div class="chats">
        <div class="msg-pg">
           
        <div class="received-msgs">
        <div class="received-msgs-img">
        <img src="">
        
</div>
            <div class="received-msg">
                <div class="received-msg-inbox">
                    <p>Hey !! message from </p>
                    <span class="time">11:01 PM | October </span

        <div class="send-chats">
            <div class="outgoing-msg">
                <div class="outgoing-msgs-img">
                <img src="">
                </div>

            <div class="outgoing-msg"">
                <div class="outgoing-msg-inbox">
                <p>Hey !! message from </p>
                <span class="time">11:01 PM | October </span>

           <div>     
           <div class="outgoing-msgs-img">
                <img src=""
            </div>

            




</body>

</html> 


<!--

.outgoing-chats-msg p
{
    background: #007bff none repeat scroll 0 0;
    color: #fff;
    border-radius: 10px
    font-size: 14px;
    margin: 0;
    color: #fff;
    padding: 5px 10px 5px 12px;
    width: 100px;
}
.outgoing-chats-msg
{
    float: left;
    width: 46%;
    margin-left: 45%;
}
.outgoing-chats-img
{
    display: inline-block;
    width: 20px;
    float: right;
}
.msg-bottom
{
    position: relative;
    height: 10%;
    background-color: #007bff;
}
.input-group
{
    float: right;
    margin-top: 13px;
    margin-right: 20px;
    outline: none !important;
    border-radius: 20px;
    width: 61% !important;
    background-color: #fff;
}
.form-control
{
    border: none !important;
    border-radius: 20px !important;
}
.input-group-text
{
    background: transparent !important;
    border: none !important;
}
.input-group .fa
{
    color: #007bff;
    fleat: right;
}
.bottom-icons
{
    float: left;
    margin-top: 17px;
    width: 30% !important;
    margin-left: 22px;
}
.bottom-icons .fa
{
    color: #fff;
    padding: 5px;
}
.form-control:focus
{
    border-color: none !important;
    box-shadow: none !important;
    border-radius: 20px;
}


-->



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
	
	<input class="sendBtn" type="submit" value="Send" onclick="disableSend()" >

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









