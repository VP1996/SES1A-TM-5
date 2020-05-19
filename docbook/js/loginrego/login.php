<!DOCTYPE html>
 <html>  
   <head>
     <title> DocBook </title>
   </head>

   <body>
   		<div>
         <?php>
           
         if(isset($_POST['Rsubmit']))
           echo 'You have successfully Logged in.';
        



         
          
         ?>



   		</div>







        <div>
        	<form action = "Login.php" method = "post"> 
        		<div class = "container">
        		  <h1> DocBook Login</h1>

        		  	<label for= "EmailAddress"><b> Email Address </b></label>
        		  	<input type ="Email" name="EmailAddress" required>

        		  	<label for= "Password"><b> Password </b></label>
        		  	<input type ="Password" name="Password" required>

        		  	<input type="submit" name="Rsubmit" value="Register">






        	</form>
        
        </div>
   </body>







 </html>
   



  