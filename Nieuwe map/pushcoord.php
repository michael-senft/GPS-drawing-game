<?php
mysql_connect("localhost", "valanmax_be", "Azerty123"); // Server connection
mysql_select_db("valanmax_be"); // Database selection
$page = $_POST['registerform']; // Setting the page value
$lat = $_POST['lat']; 
$lng = $_POST['lng'];
$ID = $_POST['id'];
$naam = $_POST['naam'];

//$query = mysql_query("select * FROM Coordinaten WHERE Naam = '$naam'"); // Queries the Database to check if the user already exists
  //  if(mysql_num_rows($query) !== 0) // Checks if there is any rows with that user
    //{
		
      //  echo "error"; // Stops there 
		
    //}
    //else
    //{
        mysql_query("INSERT INTO Coordinaten (ID, lat , lng , Naam) VALUES('$ID', '$lat', '$lng', '$naam')"); // Inserts into the database.
		$data = array('success'=> true);
		echo json_encode($data);
    //}  
?>