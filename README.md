# Software Engineering Studio 1A Autumn 2020 
## Team 5
This repository contains files for the DocBook website. In order to use them, please see the setup procedure below. 
## Documentation
https://docs.google.com/document/d/1xLaQS_I2C-QSfMlhXqhTERPfPLtNylPGXF7r9qrNqn0/edit?usp=sharing
## Setup procedure
For future development, we want to acquire the IP address, this way the website would be able to access just by typing our URL in the search bar of the browser. However, at this stage, we are using the local server on the computer to access and use the website.

To set up the website, follow the steps described below:
1.   Visit the <https://www.apachefriends.org/index.html> website an download the latest edition of XAMPP on your computer. Make sure you downloaded the XAMPP according to your system (Windows, Mac or Linux).
2.   While it is downloading, download the entire repository in the zip file.
3.   Once you downloaded XAMPP, proceed to install it on the computer.Once you installed the XAMPP on your computer, go to the installation root folder that you specified during the installation. Inside find the folder named "htdocs". Inside this folder should be another folder named "test". Open the zip-file that you downloaded from the GitHub. Transfer the entire content of the "docbookPHP" folder inside the "test" folder. 
4.   Open application "XAMPP Control Panel". There Click the "Start" buttons to the right of the modules "Apache" and "MySQL". This way, you enable the server and database.Now, let's set up the database. 
5.   Open to the zip file that you downloaded for GitHub and extract the file inside the "For Xampp" folder. Go to your browser and type <http://localhost/> in your search bar. There click on the "phpMyAdmin" button at the top right. In the new window, click the button import. There, click choose file and select the extracted file.
6.   Now in the new browser window type <http://localhost/test> and you should see the home window of our website.
*If you have issued uploading the file, you can also click the button "SQL" and copy the content of the extracted file inside the SQL query*.
