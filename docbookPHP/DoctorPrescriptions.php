<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <header>
        <title> Prescriptions </title>
        <link rel="stylesheet" type="text/css" href= "./css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet"> 
    </header>
    <div id="page-container">
      <div id="content-wrap">
    <body>
        <div class="headerMenu">
            <div id="wrapper">
                <div class="logo">
                    <a href="DocHomePage.php">
                    <img src="./img/docbook-logo.png"/>
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar" >
            
          <a href="doctorhomepage.html">Home</a> 
          <a href="Chat.html">Chat</a> 
          <a href="DoctorAppointments.html">Bookings</a> 
          <a href="DoctorPrescriptions.html">Prescriptions</a> 
          <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
          <a href="#"> <i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
          <a style="float:right" href="DoctorProfile.html">Profile</a> 
            
            
        </div>

        <div>
            <br>
           
        </div>
        <br>
        <div>
            <br>
            <br>
            
        </div>
        <div class="container1">
            <div class="box1" style="flex: 3; background-color: rgba(108, 119, 128, 0.822); padding: 20px; border-radius: 8px;" >
                <h1 >Prescriptions</h1>
                <br>
                <table id="general">
                    <tr>
                      <th>Patient</th>
                      <th>Prescription</th>
                      <th>PDF</th>
                    </tr>
                    <tr>
                      <td>Anna Wang</td>
                      <td>Panadol</td>
                      <td><a href="#"><img style="width:50px" src="./img/pdf.png"></a></td>
                    </tr>
                    <tr>
                      <td>Dominic Walter</td>
                      <td>Aspirin</td>
                      <td><a href="#"><img style="width:50px" src="./img/pdf.png"></a></td>
                    </tr>
                    <tr>
                      <td>Nancy Cooper</td>
                      <td>Buscopan</td>
                      <td><a href="#"><img style="width:50px" src="./img/pdf.png"></a></td>
                    </tr>
                  </table>
            </div>
            <div class="box2">

            </div>
            <div class="box3">

            </div>
            </div>
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