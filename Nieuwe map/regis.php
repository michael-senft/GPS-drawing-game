<?php
header("Access-Control-Allow-Origin: *");
mysql_connect("localhost", "valanmax_be", "Azerty123"); 
mysql_select_db("valanmax_be");
$username = $_POST['usrnme']; 
$password = $_POST['pwd'];
$mail = $_POST['email'];

   
    $query = mysql_query("select * FROM Account WHERE Name = '$username'");
    if(mysql_num_rows($query) !== 0) 
    {
		
        echo "THIS USER IS ALREADY TAKEN!"; // Stops there 
		$data = array('error'=> true,'message'=>"THIS USER IS ALREADY TAKEN!");
		echo json_encode($data);
		exit();
		
    }
    else
    {
        mysql_query("INSERT INTO Account (Name, Password , Email) VALUES('$username', '$password', '$mail')"); 
		$data = array('success'=> true);
		echo json_encode($data);
		exit();
    }   

?>
