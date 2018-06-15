<HTML>
<HEAD><TITLE>Insert Renter</TITLE></HEAD>
<BODY>

<?php
//$ID = $_POST["ID"];
$icName = $_POST["icName"];
$icNumber = $_POST["icNumber"];
$email = $_POST["email"];
$mobileNumber = $_POST["mobileNumber"];
$homeAddress = $_POST["homeAddress"];


$username = $_POST["username"];
$password = $_POST["password"];



$icName = strtoupper($icName); // convert matric to uppercase

require_once ("dbconn.php");

$sql = "insert into Renter ( ic_name, ic_number, email, mobile_number, home_address) " .
"values('$icName','$icNumber','$email','$mobileNumber','$homeAddress')";
$sql2 = "insert into user (username, password, level) values ('$username','$password',2);";


$query = mysql_query( $sql );
$query2 = mysql_query( $sql2 );

if (!$query) die("SQL renter query error encountered: ".mysql_error() );
if (!$query2) die("SQL user query error encountered: ".mysql_error() );
mysql_close($conn);
?>
<B> Registration was successful</B>
<BR><BR>
<a href="login.php">Click here to login</a>


</BODY>
</HTML>