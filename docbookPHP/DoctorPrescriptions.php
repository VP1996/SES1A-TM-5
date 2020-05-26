<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <header>
        <title> Prescriptions </title>
        <link rel="stylesheet" type="text/css" href= "./css/style1.css">
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
            
          <a href="DocHomePage.php">Home</a> 
          <a href="DoctorProfile.php">Profile</a> 
          <a href="DoctorAppointments.php">Bookings</a> 
          <a href="DoctorPrescriptions.php">Prescriptions</a> 
          <a href="chatpage.php">Chat</a> 
          <a href="#"> <i class="fa fa-bell" aria-hidden="true"></i> Notification</a>
            
            
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
                      <td><?php printf("%s %s ", $ForBooking1["PatientFname"] , $ForBooking1["PatientLname"]);?> </td>
                      <td>Panadol</td>
                      <td><a href="#"><img style="width:50px" src="./img/pdf.png"></a></td>
                    </tr>
                    <tr>
                      <td><?php printf("%s %s ", $ForBooking2["PatientFname"] , $ForBooking2["PatientLname"]);?> </td>
                      <td>Aspirin</td>
                      <td><a href="#"><img style="width:50px" src="./img/pdf.png"></a></td>
                    </tr>
                    <tr>
                      <td><?php printf("%s %s ", $ForBooking3["PatientFname"] , $ForBooking3["PatientLname"]);?> </td>
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
                        <td><a href="contactUS.php">Email</a></td>
                      </tr>
                      <tr>
                        <td><a href="contactUS.php">Phone</a></td>
                      </tr>
                    </table>
              </div>
          
      
          
      
          </body>
          
      </html>