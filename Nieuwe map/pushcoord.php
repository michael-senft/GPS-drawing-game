<?php
mysql_connect("localhost", "valanmax_be", "Azerty123"); // Server connection
mysql_select_db("valanmax_be"); // Database selection
$lat = $_POST['lat']; 
$lng = $_POST['lng'];
$naam = $_POST['naam'];
$User = $_POST['user'];
$latlng = $_POST['latlng'];
$Volgorde = $_POST['volg'];

//$query = mysql_query("select * FROM Coordinaten WHERE Naam = '$naam'"); // Queries the Database to check if the user already exists
  //  if(mysql_num_rows($query) !== 0) // Checks if there is any rows with that user
    //{
		
      //  echo "error"; // Stops there 
		
    //}
    //else
    //{
        mysql_query("INSERT INTO Coordinaten (lat , lng , Naam , User, latlng, Volgorde) VALUES('$lat', '$lng', '$naam', '$User', '$latlng', '$Volgorde')"); // Inserts into the database.
		$data = array('success'=> true);
		echo json_encode($data);
    //}  
?>