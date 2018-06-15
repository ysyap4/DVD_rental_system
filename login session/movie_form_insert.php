<?php
// Start up your PHP Session
session_start();

// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") {
header("Location: login.php");

 }
?>


<HTML>
<HEAD><TITLE>Rent Movie Form</TITLE>
<link href="style.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY background="1.jpg">

<p align="center"><h3>Please tick on the movie you wish to rent:</h3></p>
<!-- STEP 4: EDIT HTML CODE BELOW TO ADD IMAGE LINK TO add-employee.php -->
<div id="addDiv"></div>
<table class="flat-table" align="center">
<thead>

<?php
include "dbconn.php";


$url="../login session/img/";
?>
<FORM name="form1" method="POST" action="confirm_order.php">

<tr align="center">
<th> Poster </th>
<?php
$sql= "SELECT movie_image FROM Movie";
$query=mysql_query($sql);
while($record = mysql_fetch_array($query)){
	?>
	<td><img src="<?php echo "$url".$record['movie_image']?>" width="300px" height="450px"></td>


<?php } ?>
</tr>
<tr align="center">
<th> Movie Name </th>

<?php
$sql= "SELECT movie_name FROM Movie";
$query=mysql_query($sql);
while($record = mysql_fetch_array($query)){
	
	echo "<td>".$record['movie_name']." </td>";
	} ?>
</tr>

<tr align="center">
<th> Genre </th>
<?php
$sql= "SELECT movie_genre FROM Movie";
$query=mysql_query($sql);
while($record = mysql_fetch_array($query)){
	
	echo "<td>".$record['movie_genre']." </td>";
	} ?>
</tr>

<tr align="center">
<th> Rating </th>
<?php
$sql= "SELECT movie_rating FROM Movie";
$query=mysql_query($sql);
while($record = mysql_fetch_array($query)){
	
	echo "<td>".$record['movie_rating']." </td>";
	} ?>
</tr>

<tr align="center">
<th> Rental Rate(RM) </th>
<?php
$sql= "SELECT movie_total FROM Movie";
$query=mysql_query($sql);
while($record = mysql_fetch_array($query)){
	
	echo "<td>".$record['movie_total']." </td>";
	} ?>
</tr>

<tr align="center">
<th> Selection </th>

<?php
$sql= "SELECT movie_code FROM Movie";
$query=mysql_query($sql);
while($record = mysql_fetch_array($query)){
	 $code= $record['movie_code'];?>
	<td> <INPUT TYPE="CHECKBOX" NAME="check[]" value="<?php echo $code?>"  > </td>
	<?php } ?>


</tr>


</thead>
</table>

<br>
&nbsp;&nbsp;&nbsp;
<INPUT type="submit" name="button1" value="Submit">

</FORM>

</BODY>
</HTML>


