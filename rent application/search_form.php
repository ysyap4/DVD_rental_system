<HTML>
<HEAD>
	<TITLE>List of Renting</TITLE>
	<link href="style.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY background="1.jpg">

<FORM name="form1" method ="POST" action="view_search_movie.php" class="dark-matter">
<h1>MOVIE LIST
	<span>Choose movie to view renter details</span>
</h1>

<b> Movie &nbsp; <b>

<select name="movie_code">

  <option value="" selected> -- choose which movie you want to list --
  <?php 
  require_once ("dbconn.php");
  $query = mysql_query("SELECT * FROM Movie");
  
  while ($record = mysql_fetch_array($query))
{?>
	<option value="<?php echo $record['movie_code'];?> "><?php echo $record['movie_name'];?>
	<?php	
}
?>  
</select>
<INPUT type="submit" name="button1" value="Submit" class="button">
</FORM>
</BODY>
</HTML>