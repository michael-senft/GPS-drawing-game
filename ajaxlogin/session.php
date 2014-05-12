<title>Sessionstart</title>
<?php 
	$ID = $_POST["ID"] ;
  session_start();
  $_SESSION['name'] = $ID;
  if(isset($_SESSION['name'])){
      header('location:index.php');
  }
?>