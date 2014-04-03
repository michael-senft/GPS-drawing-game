

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Redirect</title>
</head>

<body>
<?php
//session_start();
mysql_connect("localhost", "valanmax_be", "Azerty123"); // Server connection
mysql_select_db("valanmax_be"); // Database selection
$page = $_POST['registerform']; // Setting the page value
$username = $_POST['usrnme']; // Setting the user value
$password = $_POST['pwd']; // Setting the pass value
$mail = $_POST['email'];
if($page == 1)
{
    //This means that the page is the register form so the register form code goes here
    $query = mysql_query("select * FROM Account WHERE Name = '$username'"); // Queries the Database to check if the user already exists
    if(mysql_num_rows($query) !== 0) // Checks if there is any rows with that user
    {
		
        echo "THIS USER IS ALREADY TAKEN!"; // Stops there 
		
    }
    else
    {
        mysql_query("INSERT INTO Account (Name, Password , Email) VALUES('$username', '$password', '$mail')"); // Inserts into the database.
        echo "REGISTERED! <BR> <a href='login.php'>Go to the login page</a>"; //Link and text to go to the login
    }    
}

if($page == 0)
{
	
	/*
    //This means that the page is the login form so the register form code goes here
    $query = mysql_query("SELECT Name FROM Account WHERE Name = '$user'"); // Queries the Database to check if the user doesn't exist
    if(mysql_num_rows($query) == 0) // Checks if there is any rows with that user
    {
        echo "User doesn't exist"; // Stops there 
    }
    $query = mysql_query("SELECT Name FROM Account WHERE Name = '$user' AND Password = '$pass'");
    if(mysql_num_rows($query) !== 0) // Checks if there is any rows with that user and pass
    {
		session_start();
        echo "<BR> <a href='modeSelect.php'>Lets play!</a>"; //Link and text to go to the login
        $_SESSION['LOGGEDIN'] = $user;
		//
		//$_SESSION['LOGGEDIN'] = 1;
		//$_SESSION["inlog"] = $user;
		header("location:modeSelect.php");
    }
	*/
    
}
?>
<div id ="userex" hidden="true">

</div>
<div id="usercreate" hidden="true">

</div>
<div id="nolog" hidden="true">

</div>
<div id="login" hidden="true">

</div>

</body>
</html>