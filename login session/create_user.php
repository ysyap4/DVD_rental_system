<?php

	  include('dbconn.php');


$sql = "CREATE TABLE user
        (
		userid int(6) not null auto_increment,
 		username varchar(100),
 		password varchar(12),
		level int(3),

		 primary key (userid)
        )";

if (mysql_query($sql,$conn))
{
  echo "<br />Table user created";
}
else
{
  die('<br />Error creating table: ' . mysql_error());
}

mysql_close($conn);
?>