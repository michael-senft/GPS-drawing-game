<?php 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
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
       			   }
        
		
    </style>
</head>

<body>
<div data-role="page" id="page4">
			<!-- Header -->
			<div data-role="header" data-position="fixed">
				<h1>REGISTER PAGE</h1>
                <form action='finished.php' method='post' >
                <label for="basic">Username:</label>
				<input type="text" name='usrnme' id="usrnme"  />
                <label for="basic">Password:</label>
				<input type="password" name='password' id="password"/>
                <label for="basic">Repeat Password:</label>
				<input type="password" name='pwd' id="pwd"  />
                <label for="basic">Email adress:</label>
				<input type="text" name='email'id="email" />
                <input type='hidden' name='registerform' value='1'>
                <input type='submit' value='submit'>
                </form>
                <div class="ui-body ui-body-b">
		<!--<fieldset class="ui-grid-a">-->
        <!--<a href="login.php" data-role="button" data-transition="flip" id="submitbtn">Submit</a>-->
        <!--<button type="submit" data-theme="a" class="ui-btn-hidden" aria-disabled="false">Submit</button>-->
        <a href="login.php" data-role="button" data-transition="flip" id="cnlbtn">Cancel</a>
		<!--<button type="submit" data-theme="a" class="ui-btn-hidden" aria-disabled="false" href="login.php">Cancel</button>--></div></div>

	    <!--</fieldset>-->
</body>
</html>