<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Main</title>
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
       
	$(document).ready(function()
	{
	
       	 var map;
		 var element = document.getElementById('map-canvas');
		 element.innerHTML = "Loading Map please wait...";
		 
		
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
				
				$.ajax(
	 			{
	 			type:"GET",
	 			url:"getpoints.php",
	 			success:callback
	 			}
	 				  )
				
				   var minZoomLevel = 10;
				   var lat = position.coords.latitude;
				   var long = position.coords.longitude;
				   map = new google.maps.Map(document.getElementById('map-canvas'), {
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
				   Addcord(lat,long);
				   
				  google.maps.event.trigger(map, 'resize');
				   
			}
			function Addcord(lat,long)
			{
				   	
				$.ajax({
				type:"POST",
				url: "phpgraden.php",
				data: "later=" + lat + "\u0026longer="+ long,
				success: function(){
				
				}
				});
					
			}
			
			$(document).ready(function()
	 		{
	 	
	 			
	 			});
	 			
	 
	 		function callback(data,status)
	 		{
	 	
	 			var jsArr = JSON.parse(data);
	 			var path = new Array();
	 			
	 			
				DrawPoly(path);
	 		}
			
			
			function DrawPoly(path)
			{
				
				
				/*
					  var flightPath = new google.maps.Polyline({
						path: flightPlanCoordinates,
						geodesic: true,
						strokeColor: '#FF0000',
						strokeOpacity: 1.0,
						strokeWeight: 2
				  });
				
				  flightPath.setMap(map);
				 */
				for(var i=0;i<jsArr.length;i++)
	 			{
	 				path[i] = new google.maps.LatLng(jsArr[i].lengte, jsArr[i].breedte);
					var lijnen = [path[i]];
	  
    //finish loop

    				var polyline = new google.maps.Polyline({
      									path: lijnen,
										geodesic: true,
      									strokeColor: "#FF0000",
      									strokeOpacity: 1.0,
      									strokeWeight: 2
    									});
	 				polyline.setMap(map);
	 			}
				
    


		
   
			}

    // onError Callback receives a PositionError object
    //
			function onError(error) {
				alert('code: '    + error.code    + '\n' +
					  'message: ' + error.message + '\n');
			}  
			});	  
						
				
				

   </script>
    <script>
	$(document).on("swiperight", function(events, ui) {
		$("#myPanel").panel("open", {display: 'overlay', position: 'left'} );
	});
	</script>

<body>

        	<div data-role="panel" id="myPanel" class="ui-response" data-content-theme="b">
            <p>hier kan vanalles van menu in komen, opties? </p> 
            </div>
			<!-- Header -->
			<div data-role="header" data-position="fixed">
            	<a href="login.php" data-role="button" data-transition="pop">Back</a>
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
                
</body>
</html>