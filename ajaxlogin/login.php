<?php
session_start()
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Ajax Login Validation Tutorial | 91 Web Lessons</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
function validLogin(){
      var uname=$('#uname').val();
      var password=$('#password').val();

      var dataString = 'usrname='+ uname + '&pwd='+ password;
      $("#flash").show();
      $("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({		
      type: "POST",
      url: "http://valanmax.be/DrawingGame/log.php",
	  dataType: "json",
      data: "usrname="+ uname + "&pwd="+ password,
      cache: false,
      success: function(data){
               $("#flash").hide();
               if (data.success == true){
            		$('#section1').html(data.Naam + data.Id);
					sessionStorage.setItem("ID", data.Id);
					sessionStorage.setItem("naam", data.Naam);
					 window.location = "testgeomap.html"

               }
			   else{
                     $("#errorMessage").html(result);
               }
      }
      });
}


</script>
</head>
<body>
	<div id="section1"></div>
    <div id="wrapper">
      <table align="center" class="login_box">
        <tr><td colspan="2" id="errorMessage"></td></tr>
              <tr>
                 <td>UserName</td>
                 <td><input type="text" name="uname" id="uname"></td>
              </tr>
              <tr>
                 <td>Password</td>
                 <td><input type="password" name="password" id="password"></td>
              </tr>
              <tr id="button_box">
                 
                 <td><input type="button" name="submit" value="Submit" class="button" onclick="validLogin()"></td>
              </tr>
              <tr><td colspan="2" id="flash"></td></tr>
      </table>
</div>

</div>
</body>
</html>
