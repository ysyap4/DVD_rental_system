<html>
<head>
<title>Document</title>
</head>
<body background="1.jpg" align="center">

<?php
// Start up your PHP Session
session_start();
if ($_SESSION["LEVEL"] == 1) { 
 
 echo '<p>Welcome, '.$_SESSION['USER']; 
 echo '<p>You are user level '.$_SESSION['LEVEL'];
 echo "<p> Only user level 1 can view this page</a></p>";
 echo "<br>";
 echo "<p><a href='/~abta/db_abta/rent application/Admin_Mainpage.html'>Click here</a> to access admin page</p>";
 }
  
// If the user is not logged in send him/her to the login form
else if ($_SESSION["LEVEL"] != 1) {
	
  echo "<p>Wrong User Level! You are not authorized to view this page</p>";
	 
  
 }
 ?>
 
 </body>
 </html>
 
 
 