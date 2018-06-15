<HTML>
<HEAD><TITLE>Insert Renter</TITLE></HEAD>
<BODY>

<?php
$ID = $_POST["ID"];
$icName = $_POST["icName"];
$icNumber = $_POST["icNumber"];
$email = $_POST["email"];
$mobileNumber = $_POST["mobileNumber"];
$homeAddress = $_POST["homeAddress"];



$icName = strtoupper($icName); // convert matric to uppercase

require_once ("dbconn.php");

$sql = "insert into Renter ( id,ic_name, ic_number, email, mobile_number, home_address) " .
"values('$ID','$icName','$icNumber','$email','$mobileNumber','$homeAddress')" ;

$query = mysql_query( $sql );

if (!$query) die("SQL query error encountered: ".mysql_error() );

mysql_close($conn);
?>
<B> Insertion was successful</B>
<BR><BR>
<a href="view_renter.php">Click here to list the table</a>
<BR><BR>
<a href="renter_form.php">Click here to insert more user</a>

</BODY>
</HTML>