<?php session_start();
if(isset( $_POST["usrname"] ) )
{
	$username = $_POST["usrname"] ;
	$password = $_POST["pwd"] ;
	require "Users.php";
	$u = new Users();
	if( $u->Authorize($username,$password) == 1)
	{

		$_SESSION['user']=$username;

		header("Location:modeSelect.php");
	}
	else
	{
		header("login.php");
	}

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LogOn</title>
</head>
<body>

</body>
</html>