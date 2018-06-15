<HTML>
<HEAD><TITLE>List of Renting</TITLE><HEAD>
<BODY>
<TABLE BORDER="1" width ="600">
   <TR><TH>Movie Name</TH><TH>IC Name</TH><TH>Rent Due</TH></TR>

  <?php

     include ("dbconn.php");

     $sql ="select movie_name, ic_name, rent_due " .
           "from Movie, Renter ,Renter_Movie";

     $query = mysql_query($sql);


     if (!$query) die("SQL query error encountered: ".mysql_error() );

     while ($record = mysql_fetch_array($query))
     {
       echo "<TR align=left>\n";
       echo "<TD>". $record["movie_name"]. "</TD>".
            "<TD>". $record["ic_name"]. "</TD>".
            "<TD>". $record["rent_due"]. "</TD>";
       echo "</TR>\n";
     }

     mysql_close($conn);
   ?>
</TABLE>
</BODY>
</HTML>
