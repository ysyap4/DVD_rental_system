	<HTML>
	<HEAD><TITLE>Updating Renter Data</TITLE>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<HEAD>
	<BODY background="1.jpg" align="center">

	<h1>Update Renter Data Form</h1>



	<?php
	     include ("dbconn.php");



	     // Retrieve data from database
	$sql="SELECT * FROM Renter WHERE id =".$_GET['id'];
	$result=mysql_query($sql);
	$rows=mysql_fetch_array($result);

?>




<table width="400" border="0" cellspacing="1" cellpadding="0" align="center">
<tr>
<form name="form1" method="post" action="update_renter.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">

<thead>
<tr>
<th>IC Name</th>
<th>IC Number</th>
<th>Email</th>
<th>Mobile Number</th>
<th>Home Address</th>
</tr>
</thead>
<tr>
<td><input name="icName" type="text" id="icName" value="<?php echo $rows['ic_name']; ?>"></td>
<td><input name="icNumber" type="text" id="icNumber" value="<?php echo $rows['ic_number']; ?>" size="15"></td>
<td><input name="email" type="text" id="email" value="<?php echo $rows['email']; ?>" size="15"></td>
<td><input name="mobileNumber" type="text" id="mobileNumber" value="<?php echo $rows['mobile_number']; ?>"></td>
<td><input name="homeAddress" type="text" id="homeAddress" value="<?php echo $rows['home_address']; ?>" size="15"></td>
<td><input name="id" type="hidden" id="homeAddress" value="<?php echo $rows['id']; ?>" size="15"></td>
</tr>
</tr>
</table>
<div align="center"><input type="submit" name="Submit" value="Submit"></div>
</td>
</form>
</tr>
</table>







	</BODY>
	</HTML>
