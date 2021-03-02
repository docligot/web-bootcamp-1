<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mapbox Flyaround</title>
	<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
	<style> 
	.w3-roboto-head{
		font-family: 'Roboto Condensed', sans-serif;
		font-weight:700;
	}
	.w3-roboto-body{
		font-family: 'Roboto Condensed', sans-serif;
		font-weight:400;
		font-size:large;
	}
	#mapContainer {
			 width: 100%;
			 height: 95.5vh;
		}
	</style>
</head>
<body>
	<header class="w3-bar w3-top w3-highway-green w3-xxlarge w3-roboto-head w3-card" style="z-index: 2;"> <div class="menu-icon w3-button w3-bar-item" onclick="toggle('small_menu');">
		<i class="fa fa-bars"></i></div>
		<div class="w3-bar-item w3-padding">
		Mapbox Flyaround</div>
	</header>
	<div class="w3-row">
     <div id="small_menu" class="" style="display: none;">
					<?php include ('nav.php'); ?>
			</div>
			<div id="mapContainer"></div>

			<script>
				function toggle(element) {
    		var object = document.getElementById(element);
    		if (object.style.display == 'none') {
        	object.style.display = 'block';
					} 
				else {
        object.style.display = 'none';
    			}	
				}
					 				
						function setStyle() {
						
							var mapStyle = document.getElementById('map-style').value;
							
							map.setStyle(mapStyle);
						
						}

						mapboxgl.accessToken = 'pk.eyJ1IjoiZG9jbGlnb3QiLCJhIjoiY2p3MHQ5MTViMGVvNzQzdGdicTlwM2o3NCJ9.j4qYChJYSxUy8hNnlXrD-g';

						var mapStyle = document.getElementById('map-style').value;

						var map = new mapboxgl.Map({
							container: 'mapContainer', // HTML container id
							style: mapStyle,

							center: [121.056269,	14.569240],
						// starting position as [lng, lat]
							zoom: 15
						});
						
						map.addControl(new mapboxgl.NavigationControl(), 'bottom-right');

						var popup = [];
						var marker = [];
						var messages = [];
						var locations = [];
						var colors = [];

						messages.push('<h3>Secret base</h3><p>In Ortigas</p>');
						messages.push('<h3>Lunch here</h3><p>In Ortigas</p>');
						messages.push('<h3>Dengue here</h3><p>In Batangas</p>');
						messages.push('<h3>Dengue here</h3><p>In Batangas</p>');
						messages.push('<h3>Dengue here</h3><p>In Batangas</p>');
						messages.push('<h3>Dengue here</h3><p>In Batangas</p>');
						messages.push('<h3>Dengue here</h3><p>In Batangas</p>');
						messages.push('<h3>Dengue here</h3><p>In Batangas</p>');
						messages.push('<h3>Dengue here</h3><p>In Batangas</p>');
						messages.push('<h3>Secret Farm</h3><p>Sugar here!!!!</p>');
						messages.push('<h3>UPLB</h3><p>No classes!!!!</p>');

						locations.push([121.056269,	14.569240]);
						locations.push([121.060796,	14.573229]);
						locations.push([121.171044,14.03529979]);
						locations.push([121.1710917,14.03511939]);
						locations.push([121.1710009,14.03489276]);
						locations.push([121.1712786,14.03489486]);
						locations.push([121.1715089,14.03503217]);
						locations.push([121.1716492,14.03485247]);
						locations.push([121.1713267,14.03466928]);
						locations.push([122.970367,10.413438]);
						locations.push([121.243580,14.168302]);

						colors.push({ "color": "#0000ff"});
						colors.push({ "color": "#ffff00"});
						colors.push({ "color": "#ff0000"});
						colors.push({ "color": "#ff0000"});
						colors.push({ "color": "#ff0000"});
						colors.push({ "color": "#ff0000"});
						colors.push({ "color": "#ff0000"});
						colors.push({ "color": "#ff0000"});
						colors.push({ "color": "#ff0000"});
						colors.push({ "color": "#0033ff"});
						colors.push({ "color": "#ffd700"});


						for (i = 0; i < locations.length; i++) {
							popup[i] = new mapboxgl.Popup()
							.setHTML(messages[i]);

							marker[i] = new mapboxgl.Marker(colors[i])
							.setLngLat(locations[i])
							.setPopup(popup[i])
							.addTo(map);
						}
						
						function goToPoint1() {
							map.flyTo({center: [121.056269,	14.569240]});
						}

						function goToPoint2() {
							map.flyTo({center: [121.060796,	14.573229]});
						}

						function goToPoint3() {
							map.flyTo({center: [121.1713267,14.03466928]});
						}

						function goToFarm() {
							map.flyTo({center: [122.970367,10.413438]});
						}

						function goToSchool() {
							map.flyTo({center: [121.243580,14.168302]});
						}


					</script>
	</div>

	<!-- The Modal -->
	<section id="id01" class="w3-modal" style="display: block;">
        <div class="w3-modal-content">
            <div>
                <div class= "w3-highway-green w3-bar w3-xlarge">
                    <div class="w3-padding w3-roboto-head w3-bar-item">About <span class="w3-hide-small">Mapbox Flyaround</span></div>
                    <div onclick="toggle('id01');" class="w3-bar-item w3-roboto-head w3-button w3-right"><span class="w3-hide-small">Close </span>&times;</div>
                </div>
                <div class="w3-padding">
                    <div class="w3-row w3-roboto-body">
										<h3><strong>Mapbox Flyaround</strong></h3>
										<p>A web application created to demonstrate basic features of mapbox</p>
                    </div>
                </div>
        </div>
    </section>
	<footer class="w3-bottom w3-black w3-padding" style="z-index: 2;">&copy; 2020 Cirrolytix Research Services
 </footer>
</body>
</html>
