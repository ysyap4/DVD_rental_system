<?php
// Start up your PHP Session
session_start();

// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") {
header("Location: login.php");

 }
 
 include "dbconn.php";
 
?>



<HTML>
<HEAD><TITLE>Rent Movie Transaction</TITLE></HEAD>
<BODY>
<FORM name="form1" method="POST" action="insert_order.php">

<table border="1">

<tr>
<th> Number </th>
<th>  Movie Name  </th>
<th>  Rental Rate(RM)   </th>
</tr>
<?php
$movielist=$_POST['check'];
$count =1;
$totsl =0;
 foreach($movielist as $code){
	 
	 $sql= "SELECT movie_name, movie_total FROM Movie WHERE movie_code= '$code'";
	 $query = mysql_query($sql);
	 $record = mysql_fetch_array($query);
	 echo "<tr>";
	 echo "<td> $count </td>";
	 echo "<td>".$record['movie_name']."</td>";
	 echo "<td>".$record['movie_total']."</td>";
	 echo "</tr>";
	 $total+=intval($record['movie_total']);
	 $count++;
	 echo "<input type='hidden' name=codelist[] value= '$code'>";
 }
 ?>
 
<tr>
<td colspan="2"> Total rental price </td>
<td>  <?php echo $total?>    </td>
</tr>



</table>
<br>
&nbsp;&nbsp;&nbsp;
<div align="center">
<INPUT type="submit" name="button1" value="Submit">
</div>

</FORM>
<?php mysql_close($conn);?>
</BODY>
</HTML>