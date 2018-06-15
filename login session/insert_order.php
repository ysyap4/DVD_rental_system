<?php
// Start up your PHP Session
session_start();

// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") {
header("Location: login.php");

 }
 
 include "dbconn.php";
 
 
 


$codelist=$_POST['codelist'];
$ID=$_SESSION['ID'];

 foreach($codelist as $code){
	 echo "ID: $ID";
	 echo "code:  $code";
	 $sql = "insert into Renter_Movie (movie_code, id) values('$code','$ID')" ;
	  $result=mysql_query($sql);

 }

mysql_close($conn);
header("Location: document.php");
 
 
 
 
?>










