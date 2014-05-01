<?php 
session_start();
header("Access-Control-Allow-Origin: *");

if(isset( $_POST["usrname"] ) )
{
	$username = $_POST["usrname"] ;
	$password = $_POST["pwd"] ;
	require "Users.php";
	$u = new Users();
	if( $u->Authorize($username,$password) == 1)
	{
		//$_SESSION['LOGIN_STATUS']=true;
		$_SESSION['user']=$username;
		$naam = $u->getUser($username,$password);
		$ID = $u->getUserID($username,$password); 
		$data = array('success'=> true,'Naam'=>$naam,'Id'=>$ID);
		echo json_encode($data);
		//header("Location:modeSelect.php");
		exit();
	}
	else
	{
		header("login.php");
		exit();
	}

}
if(isset($_POST["kid"]))
{
	header("Location:map.php");
	exit();
}
else
{
	header("Location:modeSelect.php");
	exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.4.4.min.js"></script>  
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="gmap3.js"></script>
<title>LogOn</title>
</head>
<body>
<div id="test1" class="gmap3">

</div>
</body>
</html>