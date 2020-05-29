<?php 
	include "server.php";
	
	
	if(isset($_SESSION['EmailAddress']))
	{
		
		//include "server.php"; 
		
		$sql11="SELECT * FROM `chat`";

		$query = mysqli_query($db,$sql11);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Chat System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="chatstyle/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <link rel="stylesheet" type="text/css" href= "./css/docleftbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <script src="chatstyle/js/jquery.min.js"></script>
	  <script src="chatstyle/js/bootstrap.min.js"></script>
	
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
      margin-top:4%;
      width: 40%;
     background-color: #DCDCDC;
      padding-right:10%;
      padding-left:10%;
    }
    .btn-primary {
      background-color: #778899;
    }
    .display-chat{
      height:500px;
      background-color:#F8F8FF;
      margin-bottom:4%;
      overflow:auto;
      padding:15px;
    }
    .message{
      background-color: #007bff;
      color: white;
      border-radius: 5px;
      padding: 5px;
      margin-bottom: 3%;
    }
  
    
      }
      .navbar-inverse {
          background-color: #3b173da8;
          border-color: #3b173da8; 
      }
      .navbar-inverse .navbar-brand {
          color: white;
      }
      a:hover{
          color: #50546d;
      }
      .navbar-inverse .navbar-nav>li>a {
          color: white;
      }
	</style>
	
    
</head>
<body>


    <div id="page-container">
        <div id="content-wrap">

    <div class="headerMenu">
        <div class="container2">
            <div class="container2-box" style="flex-basis: 50%;">
                <div id="wrapper">
                    <div class="logo">
                        <a href="DocHomePage.php">
                        <img src="./img/docbook-logo.png"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container2-box" style="flex-basis: 50%;">
                <div style="text-align: right; padding-right: 10px;">
                    <br>
                    <br>
                    <br>
                    <a href="index.php "><button class="loginbutton">Sign Out</button></a> <!--logout.php--> 
                </div>  
            </div>
        </div>
    </div>

        <div class="navbar" >
            
            <a href="DocHomePage.php">Home</a> 
            <a href="DoctorProfile.php">Profile</a> 
            <a href="DoctorAppointments.php">Bookings</a> 
            <a href="DoctorPrescriptions.php">Prescriptions</a> 
            <a href="chatpage.php">Chat</a> 
          
        </div>

<div class="container">
  <center><h2>Welcome to the Chat <span style="color:#000000; font-size:32px"><?php echo $_SESSION['Username']; ?> !</span></h2>
	<label>Chat here!</label>
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
				<span><?php echo $row['ChatEmailAddress']; ?> :</span>
				<?php echo $row['ChatMessage']; ?>
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
</div>
</div>

<div class="w3hubs-footer">
   	  
   	  <div class="w3hubs-icon">
   	  	<ul>
   	  		<li><a href="#" target="black"><i class="fa fa-facebook"></i></a></li>
   	  		<li><a href="#" target="black"><i class="fa fa-twitter"></i></a></li>
   	  		<li><a href="#" target="black"><i class="fa fa-youtube-play"></i></a></li>
   	  	</ul>
   	  </div>
   	  <div class="w3hubs-nav">
   	  	<ul>
   	  		<li><a href="#">Home</a></li>
   	  		<li><a href="about.php">About</a></li>
   	  		<li class="p1"><a href="contactUS.php">Contact</a></li>
   	  		

   	  	</ul>
   	  </div>
   	  <div class="w3hubs-nav1">
   	  	<ul>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">T&C's</a></li>         
   	  		<li><a href="https://github.com/VP1996/SES1A-TM-5">Our GitHub</a></li>
   	  		<li><a href="https://trello.com/b/IACoN3uK/docbook-development">Our Trello</a></li>
   	  		
   	  		
   	  		
   	  	</ul>
   	  </div>

   	  <div class="w3hubs-nav2">
   	  	<ul>
   	  		
   	  		<li><a href="#" title="To Top"><i class="fa fa-chevron-down"></i></a></li>
   	  		
   	  	</ul>
   	  </div>
   </div>

   <div class="footer-end">
   	  <p>Copyright &copy; 2020 DocBook </p>
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