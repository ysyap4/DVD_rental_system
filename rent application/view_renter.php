<HTML>
<HEAD>
	<TITLE>Renter List</TITLE>
	<link href="style.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY background="1.jpg">

<p align="center"><h3>RENTER INFORMATIONS</h3></p>
<div id="addDiv"></div>
<table class="flat-table" align="center">
<thead>

<TR> <TH>ID</TH> <TH>IC Name</TH> <TH>IC Number</TH> <TH>Email</TH> <TH>Mobile Number</TH> <TH>Home Address</TH><TH>Update</TH><TH>Delete</TH> </TR>

</thead>
<?php

require_once ("dbconn.php"); //this is how you call the library file

$query = mysql_query("SELECT * FROM Renter"); //complete the statement

if (!$query) die("SQL query error encountered :".mysql_error() );


while ($record = mysql_fetch_array($query))
{
	echo "<TR align=center>\n";
	echo "<TD align=left>". $record["id"]. "</TD>".
	"<TD>".$record["ic_name"]. "</TD>".
	"<TD>".$record["ic_number"]. "</TD>".
	"<TD>".$record["email"]. "</TD>".
	"<TD>".$record["mobile_number"]. "</TD>".
	"<TD>".$record["home_address"]. "</TD>";
	echo "<td align=center>"."<a href=update_form.php?id=".$record["id"].">Update</a>"."</td>";
	echo "<td align=center>"."<a href=delete_renter.php?id=".$record["id"].">Delete</a>"."</td>";
	echo "</TR>\n";
}

mysql_close($conn);

?>
</table>

<div align="center">
<BR><BR>
<a href="renter_form.php">Click here to insert more</a>
<BR><BR>
<a href="search_form.php">Click here to view by searching</a>
</div>

</BODY>
</HTML>