<HTML>
	<HEAD><TITLE>Delete Renter</TITLE></HEAD>
	<BODY background="1.jpg">

	  <?php





	     require_once ("dbconn.php");


	     $sql = "delete from Renter where id =".$_GET['id'];

	     $query = mysql_query( $sql );

	     if (!$query) die("SQL query error encountered: ".mysql_error() );

	     mysql_close($conn);
	   ?>
	   <B> Delete was successful</B>
	   <BR><BR>
	   <a href="view_renter.php">Click here to list the table</a>

	</BODY>
	</HTML>