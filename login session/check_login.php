
<HEAD><TITLE>Check Login</TITLE></HEAD>
<body background="1.jpg">


<?php
include('dbconn.php');
?>
	<div align="center">
		<h2>This Page Will Check Login</h2>
	<p>
<?php


// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

$sql="SELECT * FROM user WHERE username='$myusername' and password='$mypassword'";

$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
$user_id=$rows['userid'];
$user_name=$rows['username'];
$user_pass=$rows['password'];
$user_level=$rows['level'];

// mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

session_start();

$_SESSION["Login"] = "YES";

// Add user information to the session (global session variables)
$_SESSION['ID'] = $user_id;
$_SESSION['USER'] = $user_name;
$_SESSION['PASS'] = $user_pass;
$_SESSION['LEVEL'] =$user_level;

echo "<h1>You are now logged correctly in</h1>";
echo "<p><a href='document.php'>Link to protected file</a></p>";


}
//if wrong username and password
else {

session_start();

$_SESSION["Login"] = "NO";

echo "<h1>You are NOT logged correctly in </h1>";
echo "<p><a href='document.php'>Link to protected file</a></p>";
}

?>



	</BODY>
	</HTML>


