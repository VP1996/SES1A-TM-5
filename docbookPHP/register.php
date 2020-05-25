<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>DocBook</title>
   
    
    <link rel="stylesheet" type="text/css" href= "./css/style.css" />
    <script src="./js/Slideshow.js" type="text/javascript"></script>
    <body></body>

    <div id="page-container">
        <div id="content-wrap">
    
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
                        <a href="login.php"><button class="loginbutton">Login</button></a>
                        <a href="register.php"><button class="loginbutton">Register</button></a>
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

        <form id="Register" class="login-input-group"> 
        <?php include('errors.php'); ?>
        <input type ="FName" name="FirstName" class="input-field" Placeholder="    First Name" required>
        <input type ="LName" name="LastName" class="input-field" Placeholder="    Last Name"required>
        <input type ="Age" name="Age" class="input-field" Placeholder="    Age" required>
        <input type ="Email" name="EmailAddress" class="input-field" Placeholder="    Email Address" required>
        <input type ="Password" name="Password" class="input-field" Placeholder="    Password" required>
        <input type ="ConfirmPassword" name="ConfirmPassword" class="input-field" Placeholder="    Confirm Password" required>
        Are you a doctor?
        <input type ="AreYouADoctor" name="AreYouADoctor" class="input-field" Placeholder="    Yes/No" required>
        <br>
        <input type="submit" class= "submit-btn" name="Rsubmit" value="Register" placeholder="Register">
        </form>
        </div>
    </div>

  

<div class="footer">
            

    <div>
        <p style="font-size: 16px; color: #000; font-family: sans-serif; padding-left: 100px;"> Copyright &copy; 2020 DocBook </p>
    </div>
    <br>
    <div style="padding-left: 100px;">
        <table id="contact">
            <tr>
              <th>Contact Us</th>
            </tr>
            <tr>
              <td><a href="#">Email</a></td>
            </tr>
            <tr>
              <td><a href="#">Phone</a></td>
            </tr>
          </table>
    </div>


</body>
    
</html>
  