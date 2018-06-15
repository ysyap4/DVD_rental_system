<HTML>
	<HEAD><TITLE>Update Renter</TITLE></HEAD>
	<BODY background="1.jpg">

	  <?php

		require_once ("dbconn.php");

		  $id = $_POST["id"];
		  $icName = $_POST["icName"];
		  $icNumber = $_POST["icNumber"];
		  $email = $_POST["email"];
		  $mobileNumber = $_POST["mobileNumber"];
		  $homeAddress = $_POST["homeAddress"];


	     $sql = "update Renter set ic_name = '".$_POST["icName"]."', ic_number = '".$_POST["icNumber"]."', email = '".$_POST["email"]."',
	     mobile_number = '".$_POST["mobileNumber"]."', home_address = '".$_POST["homeAddress"]."' where id = '".$_POST["id"]."'";

	     $query = mysql_query( $sql );

	     if (!$query) die("SQL query error encountered: ".mysql_error() );
	     mysql_close($conn);

		?>
	   <B> Update was successful</B>
	   <BR><BR>
	   <a href="view_renter.php">Click here to list the table</a>

	</BODY>
	</HTML>