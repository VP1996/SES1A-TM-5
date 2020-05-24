<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:black;
  }
  label{
color:black;
  }
  span{
	  color:#F0F8FF;
	  font-weight:bold;
  }
  .container {
    margin-top: 5%;
    width: 40%;
	 background-color: #DCDCDC;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #778899;
	}
	.display-chat{
		height:300px;
		background-color:#F8F8FF;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: 	#000000;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<div class="container">
  <center><h2>Welcome to the Chat <span style="color:#000000;"><?php echo $_SESSION['name']; ?> !</span></h2>
	<label>Join the chat</label>
  </center></br>
  <div class="display-chat">
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row['name']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No previous chat available.
			</p>
</div>
<?php
	} 
?>

  </div>
  <form class="form-horizontal" method="post" action="sendMessage.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="Type here to message"></textarea>
      </div>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary">Send</button>
      </div>

    </div>
  </form>
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>