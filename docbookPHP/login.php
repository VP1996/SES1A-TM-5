<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>DocBook</title>
   
    
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <script src="./js/Slideshow.js" type="text/javascript"></script>
    <body></body>
    
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
    
      <!--<div class="box1" style="flex: 1; background-color: rgba(255, 255, 255, 0.808); text-align: middle; margin: 13px">**/
    <br> -->
    <div class="form">

    <h1 style="font-size:28px" >Login</h1>
    <br>
    <div class = "loginpage"></div>

        <form method="post" action="login.php">
  	       
            <br>
            <br>         
       <div><input type ="Email" name="EmailAddress" class="input-field" Placeholder="    Email Address" required></div>
       <br>
       <div><input type ="Password" name="Password" class="input-field" Placeholder="    Password" required><div>
    
    
    <p1 style="font-size: 14px;font-family: sans-serif;"> Not a member yet?  Click <a href="register.php"><b>HERE</b></a> to register!</p1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <input  type="submit" class= "submit-btn" name="Log_sub" value="Login"placeholder="Login"input>
    <br>
   
    
        </form>
    </div>
</div>

</div>