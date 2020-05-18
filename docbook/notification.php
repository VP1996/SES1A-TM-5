<?php
    include("functions.php");


          <?php 
          
          if(isset($_POST['submit'])){
              $message = $_POST['message'];
              $query ="INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES (NULL, '', 'comment', '$message', 'unread', CURRENT_TIMESTAMP)";
              if(performQuery($query)){
                  header("location:index.php");
              }
          }
                
          ?>
        <form method="post" class="form-inline my-2 my-lg-0">
          <input name="message"class="form-control mr-sm-2" type="text" placeholder="Message" required>
          <button name="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
        </form> | 
          <?php
          
          if(isset($_POST['like'])){
              $name = $_POST['name'];
              $query ="INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES (NULL, '$name', 'like', '', 'unread', CURRENT_TIMESTAMP)";
              if(performQuery($query)){
                  header("location:index.php");
              }
          }
          
          ?>
        

          