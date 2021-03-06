

<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>map</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css" />
<script type="text/javascript" src="jquery-1.4.4.min.js"></script>  
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="gmap3.js"></script>
<script type="text/javascript" charset="utf-8" src="cordova-2.0.0.js"></script>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style type="text/css">
		
		#map_canvas {
            height: 100%;
            margin: 0px;
            padding: 0px;
			width:100%;
        }
		
    </style>
    
            
  
</head>
<body>

<div id="java">

</div>

    <div data-role="page" id="pageMap">
        	<div data-role="panel" id="myPanel" class="ui-response" data-content-theme="b">
            <a href="loguit.php">Log uit</a> 
            </div>
			<!-- Header -->
			<div data-role="header" data-position="fixed">
            	<a href="#page1" data-role="button" data-transition="pop" data-icon="arrow-l">Back</a>
				<h1>map</h1>

			</div>
			<!-- /header -->
			<!-- Content -->   
            
			<div data-role="content" id="content">
            	<a href="#myPanel" data-role="button" data-display="overlay" data-dismissible="true">Menu</a>
				   <div id="map_canvas">
                   
                   <script type="text/javascript" charset="utf-8">

    // Wait for Cordova to load
    //
    document.addEventListener("deviceready", onDeviceReady, false);

    // Cordova is ready
    //
    function onDeviceReady() {
		var options = { timeout: 10000 };
        watchID = navigator.geolocation.watchPosition(onSuccess, onError, options);
    }

    // onSuccess Geolocation
    //
					function onSuccess(position) {
        			var lat = position.coords.latitude;
          			var lng = position.coords.longitude;
					var hoogte = $(document).height();
					var breedte = $(document).width();
					setTimeout(function(){
					var latlng = new google.maps.LatLng(lat, lng);
					$("#map_canvas").width("350px").height("600px").gmap3({
    				map:{
      						options:{
       						zoom:12,
							center:latlng,
        					navigationControl: true,
        					scrollwheel: true,
        					streetViewControl: true
      						}
    					},
						polyline:{
    								options:{
      											strokeColor: "#FF0000",
      											strokeOpacity: 1.0,
      											strokeWeight: 2,
     											path:[
        										[51.253326, 4.278819],
												[51.185159, 4.254443],
												[51.183868, 4.322078],
												[51.235273, 4.372203],
												[51.252897, 4.336154],
												[51.253326, 4.278819]
      											]
    										}
						},
						marker:{
    		  					latLng:[lat, lng]
    					}
  					});
  					  
          			
    }
       

    // onError Callback receives a PositionError object
    //
    function onError(error) {
        alert('code: '    + error.code    + '\n' +
                'message: ' + error.message + '\n');
    }

    </script>
					</div>				
			</div>
            </div>
                     
        
        
          
</body>
</html>