<?php
session_start();
session_destroy();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
    <style>
		#content {
                padding: 0;
                position : absolute; 
                top : 40px;  
                right : 0; 
                bottom : 40px;  
                left : 0;     
       			   }
        
		
    </style>
</head>

<body>
<div data-role="page" id="page1">
			<div data-role="header" data-position="fixed">
				<h1>GPS DRAWING GAME</h1>

			</div>
			<div data-role="content" id="logincontent">
            
				<div id="logindiv" style="height:100%">
                <form method="post" action="log.php">
                <label for="basic">Username:</label>
				<input type="text" name="usrname" id="username" data-mini="true" />
                <label for="basic">Password:</label>
				<input type="password" name="pwd" id="password" data-mini="true" />
                <input type='hidden' name='registerform' value='0'>
                <!--<a href="modeSelect.php" data-role="button" data-transition="flip" id="logbtn">Log in</a> -->
                <input type='submit' value='login'>            
                </form>
                <a href="rigister.php" data-role="button" data-transition="flip" id "RegisterButton">Register</a>
                </div>
            </div>
          </div>
</body>
</html>