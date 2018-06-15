<?php
// Start up your PHP Session
session_start();

// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") {
header("Location: login.php");

 }
?>
 <html>
<head>
<title>Document</title>
</head>
<body background="1.jpg">
<h1 align="center">All Logged In User Can View This Page</h1>	

 <div align="center">
 
 <?php
 echo '<p>Welcome, '.$_SESSION['USER'];
 echo '<p>You are user level '.$_SESSION['LEVEL'];
 echo "<p><a href='document_level.php'>Click here if you are user level 1</a></p>";
 echo "<br>";
 echo "<p><a href='movie_form_insert.php'>Click here</a> to rent the movie</p>";
 
 ?>
<button type='button' onclick="window.location.href='logout.php'">Logout</button>





</form>
</body>
</html>