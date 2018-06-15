<HTML>
<HEAD>
	<TITLE>Movie List</TITLE>
	<link href="style.css" rel="stylesheet" type="text/css" />
<HEAD>
	<BODY background="1.jpg">
	
	<p align="center"><h3>RENTING RECORDS</h3></p>
	<div id="addDiv"></div>
	<table class="flat-table" align="center">
	<thead>

	   <TR>  <TH>User ID</TH> <TH>Order ID</TH>  </TR>
	   
	</thead>
	  <?php
	     require_once ("dbconn.php");

		 $find=$_POST['movie_code'];
	     $query = mysql_query("SELECT * FROM Renter_Movie WHERE movie_code ='$find'");


	     if (!$query) die("SQL query error encountered :".mysql_error() );

while ($record = mysql_fetch_array($query))
{
	echo "<TR align=center>\n";
	echo "<TD align=left>". $record['id']. "</TD>".
	"<TD>".$record['order_id']. "</TD>\n";
	echo "</TR>\n";
}

	     mysql_close($conn);
	   ?>




	</TABLE>


	<div align="center">
	   <BR><BR>
		<a href="view_renter.php">Click here to view all renters</a>
	   <BR><BR>
	   <a href="search_form.php">Click here to view by searching</a>
	</div>
	</BODY>
	</HTML>
