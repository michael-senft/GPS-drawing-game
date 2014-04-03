<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>map</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
		
		#map-canvas {
            height: 100%;
            margin: 0px;
            padding: 0px;
			width:100%;
        }
        
		
    </style>
	
    
</head>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=drawing"></script>-->
    <script>
		
		 
            
           
           var minZoomLevel = 12;
 
           var map = new google.maps.Map(document.getElementById('map-canvas'), {
              zoom: minZoomLevel,
              center: new google.maps.LatLng(51.22474963, 4.41347301),
              mapTypeId: google.maps.MapTypeId.ROADMAP
           });
		   google.maps.event.trigger(map, 'resize');
         
				
    </script>
    <script>
	$(document).on("swiperight", function(events, ui) {
		$("#myPanel").panel("open", {display: 'overlay', position: 'left'} );
	});
	</script>

<body>
</div>
		<!-- /page -->
        
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
			<!-- Content    -->
			<div data-role="content" id="content">
            	<a href="#myPanel" data-role="button" data-display="overlay" data-dismissible="true">Menu</a>
				<div id="map-canvas"></div>
				
			</div>
</body>
</html>