<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>modeSelect</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
		#content {
                padding: 0;
                position : absolute; 
                top : 40px;  
                right : 0; 
                bottom : 40px;  
                left : 0;
				text-align:center;    
       			   }
        
		
    </style>
</head>

<body>
<?php

session_start();

if(isset ($_SESSION['LOGGEDIN']))  //Checking if they have the session cookie
{
    echo "<script type=\"text/javascript\">
            $('#ModeSelection').show()
            </script>";
}
else
{
    echo "<title>Error!</title>";
    //Doesn't have session cookie
    echo "YOU ARE NOT LOGGED IN!";
}
?>


<div data-role="content" id="ModeSelection" hidden="true">
<script type="text/javascript">
            var user = "<?php echo $_SESSION["inlog"];?>";
			document.getElementById('test').innerHTML = "<h1> Welcome " + user + "</h1>";
			</script>
            <div id="test" style="height:100%">
            </div>
            <div id="Modediv" style="height:100%">
         <a href="Main.php" data-role="button" data-transition="flip" id="KidsButton">Kids Mode</a>
         <a href="Main.php" data-role="button" data-transition="flip" id="ChalButton">Challenger Mode</a>
         <a href="Main.php" data-role="button" data-transition="flip" id="FreeButton">Free Mode</a>
            </div>
             
            
             </div>
</body>
</html>