	   

<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>DocBook</title>
   
    
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <script src="./js/Slideshow.js" type="text/javascript"></script>
    <body></body>
     
	   <form action = "register.php" method = "post"> 
	    
        <div class="headerMenu">
            <div class="container2">
                <div class="container2-box" style="flex-basis: 50%;">
                    <div id="wrapper">
                        <div class="logo">
                            <a href="index.php">
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
                        
                    </div>  
                </div>
            </div>
        </div>

        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contactUS.php">Contact</a>
        </div>
    </div>  

        <div class="form" style="height:560px">

            <h1 style="font-size:28px" >Register</h1>

        <form id="Register" class="input-group"> 
		<?php include('errors.php'); ?>
        <input type ="FName" name="FirstName" class="input-field" Placeholder="    First Name" required />
        <input type ="LName" name="LastName" class="input-field" Placeholder="    Last Name"required />
        <input type ="Age" name="Age" class="input-field" Placeholder="    Age" required />
        <input type ="Email" name="EmailAddress" class="input-field" Placeholder="    Email Address" required />
        <input type ="Password" name="Password" class="input-field" Placeholder="    Password" required />
        <input type ="Password" name="ConfirmPassword" class="input-field" Placeholder="    Confirm Password" required />
        Are you a doctor?
        <input type ="AreYouADoctor" name="AreYouADoctor" class="input-field" Placeholder="    Yes/No" required />
        <br>
        <input type="submit" class= "btn" name="Reg_sub" value="Register" placeholder="Register"/>
        <br>
		<p>
  		Already a member? <a href="login.php">Sign in</a>
  	    </p>
		<br>
		</form>
        </div>
    </div>
</div>

