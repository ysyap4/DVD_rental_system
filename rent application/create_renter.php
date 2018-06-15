<?php

include ("dbconn.php");

$sql = "CREATE TABLE Renter
(
id int(6) not null auto_increment,
ic_name varchar(100) not null,
ic_number varchar(100) not null,
email varchar(100),
mobile_number varchar(100),
home_address varchar(100),


primary key (id),
unique (ic_name,ic_number)
)";

if (mysql_query($sql,$conn))
{
echo "<br />Table Renter created";
}
else
{
die('<br />Error creating table: ' . mysql_error());
}
mysql_close($conn);
?>