<?php
header("Access-Control-Allow-Origin: *");
$PathName= $_POST['Path'] ;
$lng= array();
$lat = array();
$con = mysql_connect("localhost","valanmax_be","Azerty123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("valanmax_be", $con);
  $result = mysql_query("SELECT lng FROM Coordinaten WHERE Naam = '$PathName' ORDER BY ID");
  while($row = mysql_fetch_array($result))
  {
	array_push($lng,$row['lng']);
  }
  $result = mysql_query("SELECT lat FROM Coordinaten WHERE Naam = '$PathName' ORDER BY ID");
  while($row = mysql_fetch_array($result))
  {
	array_push($lat,$row['lat']);
  }
  
  $data = array('success'=> true,'lng'=>$lng,'lat'=>$lat); 
  echo json_encode($data);

?>