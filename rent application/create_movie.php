

<?php

include ("dbconn.php");


$sql = "create table Movie(
movie_code varchar(100) not null,
movie_name varchar(100),
movie_image varchar(100),
movie_rating varchar(100),
movie_genre varchar(100),
movie_total varchar(100),




primary key (movie_code)

)";

if (mysql_query($sql,$conn))
{
  echo "<br />Table Movie created and database are inserted";
}
else
{
  die('<br />Error creating table: ' . mysql_error());
}

$sql2 = "INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1001' ,'Avengers: Age of Ultron','1001.jpg', '8.0/10', 'Action, Adventure, Sci-Fi', '10');";
			
$sql3="INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1002' ,'Cinderella','1002.jpg', '7.4/10', 'Drama, Family, Fantasy', '10');";
			
$sql4="INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1003' ,'Kingsman: The Secret Service','1003.jpg', '7.9/10', 'Action, Adventure, Comedy', '10');";
			
$sql5 = "INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1004' ,'The Divergent Series: Insurgent','1004.jpg', '6.9/10', ' Adventure, Sci-Fi, Thriller', '10');";
			
$sql6="INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1005' ,'Jurassic World','1005.jpg', '8.2/10', 'Action, Adventure, Sci-Fi', '10');";
			
$sql7="INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1006' ,'San Andreas','1006.jpg', '6.6/10', 'Action, Drama, Thriller', '10');";		

$sql8="INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1007' ,'Poltergeist','1007.jpg', '5.2/10', 'Horror, Thriller', '10');";
			
$sql9 = "INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1008' ,'Fantastic Four','1008.jpg', '7.2/10', 'Action, Adventure, Sci-Fi', '10');";
			
$sql10="INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1009' ,'Insidious: Chapter 3','1009.jpg', '7.0/10', 'Horror', '10');";
			
$sql11="INSERT INTO Movie(movie_code, movie_name, movie_image, movie_rating, movie_genre, movie_total)
			VALUES('1010' ,'The Hunger Games: Mockingjay - Part 2','1010.jpg', '8.5/10', 'Adventure, Sci-Fi', '10');";			
			

mysql_query($sql2,$conn);
mysql_query($sql3,$conn);
mysql_query($sql4,$conn);
mysql_query($sql5,$conn);
mysql_query($sql6,$conn);
mysql_query($sql7,$conn);
mysql_query($sql8,$conn);
mysql_query($sql9,$conn);
mysql_query($sql10,$conn);
mysql_query($sql11,$conn);

mysql_close($conn);
?>