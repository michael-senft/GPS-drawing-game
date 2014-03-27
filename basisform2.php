<?php
$file = simplexml_load_file('Registratieform.xml');

	if (isset($_POST["Firstname"]) && ($_POST["Lastname"]) && (isset($_POST["Username"]) && (isset($_POST["Pwd"]) && (isset($_POST[   
	"Verpwd"])) && (isset($_POST["Mail"])) && (isset($_POST["Veremail"])))
	
	        {
			$Name = $_POST["Firstname"];
			$Lname = $_POST["Lastname"];
			$User = $_POST["Username"];
			$Pwd = $_POST["Pwd"];
			$Pwd = $_POST["Verpwd"];
			$Mail = $_POST["Mail"];
			$Veremail = $_POST["VereMail"];
			
			foreach($file->User as $item)
			{
				if($User == $item->User  && $pwd == $item->Password)
				{
				    if ($user == $item->User  && $Verpwd == $item->Password)
				    {
					//session_start();
					//$_SESSION["inlog"] = $User;
					print "password did match!";
				    }				     
				}
				 else
				     {
					  print "Password did not match!";
				     }
					 
			 if($User == $item->User  && $Mail == $item->Mail)
				{
           		    if ($user == $item->User  && $Veremail == $item->Mail)
				    {
					//session_start();
					//$_SESSION["inlog"] = $User;
					print "E-mail address did match!";
				    }				     
				}
				 else
				     {
					  print "E-mail address did not match!";
				     }

			}
		}
?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=drawing"></script>
    <script>
       	
		$(document).on('pageshow', '#page2',function(e,data){ 
		 var element = document.getElementById('map-canvas');
		 element.innerHTML = "Loading Map please wait...";
		 
		});
		document.addEventListener("deviceready", onDeviceReady, false);
			
    		var watchID = null;

    // PhoneGap is ready
    //
			function onDeviceReady() {
				//alert()
				// Update every 3 seconds
				var options = { frequency: 1 };
				watchID = navigator.geolocation.watchPosition(onSuccess, onError, options);
			}

    // onSuccess Geolocation
    //
			function onSuccess(position) {
				
				   var minZoomLevel = 10;
				   var map = new google.maps.Map(document.getElementById('map-canvas'), {
					  zoom: minZoomLevel,
					  center: new google.maps.LatLng(position.coords.latitude,position.coords.longitude),
					  mapTypeId: google.maps.MapTypeId.ROADMAP,
					  draggable : false
					  });
					  var myLatlng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
					  var marker = new google.maps.Marker({
      				  position: myLatlng,
      				  map: map
					   
				   });
				  
				   google.maps.event.trigger(map, 'resize');
				   
			}

    // onError Callback receives a PositionError object
    //
			function onError(error) {
				alert('code: '    + error.code    + '\n' +
					  'message: ' + error.message + '\n');
			}  
				  
						
				
				

   </script>
    <script>
	$(document).on("swiperight", function(events, ui) {
		$("#myPanel").panel("open", {display: 'overlay', position: 'left'} );
	});
	</script>
<body>

		    <!-- Start of first page I -->
		    <div data-role="page" id="page1">
			<!-- Header -->
			<div data-role="header" data-position="fixed">
				<h1>GPS DRAWING GAME</h1>

			</div>
			<!-- /header -->
			<!-- Content    -->
			<div data-role="content" id="logincontent">
            
				<div id="logindiv" style="height:100%">
                <label for="basic">Username:</label>
				<input type="text" name="username" id="username" data-mini="true" />
                <label for="basic">Password:</label>
				<input type="text" name="password" id="password" data-mini="true" />
                <a href="#page2" data-role="button" data-transition="flip" id="logbtn">Log in</a>
                <a href="#page4" data-role="button" data-transition="flip" id "RegisterButton">Register</a>
                </div>
            </div>
          </div>
                
		  <!-- start of second page -->
          <div data-role="page" id="page2">	
          <!-- header of second page -->	
          <div date-role="header" data-position="fixed">
          <h1> Mode Selection</h1>
          
			</div>
          
            <!-- /header -->
			<!-- Content    -->
            <div data-role="content" id="ModeSelection">
            
            <div id="Modediv" style="height:100%">
         <a href="#page3" data-role="button" data-transition="flip" id="KidsButton">Kids Mode</a>
         <a href="#page3" data-role="button" data-transition="flip" id="ChalButton">Challenger Mode</a>
         <a href="#page3" data-role="button" data-transition="flip" id="FreeButton">Free Mode</a>
            </div>
             
            
             </div>
			<!-- /content -->
			
			<!-- footer -->
			<!--div data-role="footer">
				<h4>2014 michael Senft</h4>
			</div-->
			<!-- /footer -->
		</div>
		<!-- /page -->
        
        <div data-role="page" id="page3">
        	<div data-role="panel" id="myPanel" class="ui-response" data-content-theme="b">
            <p>hier kan vanalles van menu in komen, opties? </p> 
            </div>
			<!-- Header -->
			<div data-role="header" data-position="fixed">
            	<a href="#page2" data-role="button" data-transition="pop">Back</a>
				<h1>map</h1>

			</div>
			<!-- /header -->
			<!-- Content    -->
			<div data-role="content" id="content">
				<div id="map-canvas" style="height:100%"></div>
				
			</div>
			<!-- /content -->
			
			<!-- footer -->
			<!--div data-role="footer">
				<h4>2014 michael Senft</h4>
			</div-->
			<!-- /footer -->
		</div>
			<!-- /header -->
			<!-- Content    -->
			<div data-role="content" id="">           
				<div id="logindiv" style="height:100%">
                </div>
                </div>
                </div>
            
    
</body>
</html>
