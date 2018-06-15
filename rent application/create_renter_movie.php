

<?php

include ("dbconn.php");


$sql = "create table Renter_Movie(

 order_id int not null auto_increment,
 movie_code varchar(100) not null,
 id varchar(100) not null,

 primary key (order_id),
 unique (movie_code, id)


)";

if (mysql_query($sql,$conn))
{
  echo "<br />Table Renter_Movie created";
}
else
{
  die('<br />Error creating table: ' . mysql_error());
}

mysql_close($conn);
?>