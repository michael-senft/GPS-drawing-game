<?php
$con = mysql_connect("localhost","valanmax_be","Azerty123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("valanmax_be", $con);
  $result = mysql_query("SELECT * FROM Coordinaten WHERE Naam = 'Rechthoek'");
  while($row = mysql_fetch_array($result))
  {

  echo "Lat:".$row['lat'] ;
  echo "lng:".$row['lng'] ;
  echo"<br />";

  }

?>