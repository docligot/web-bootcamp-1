<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mapbox Flyaround</title>
	<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
	<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-compare/v0.4.0/mapbox-gl-compare.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">
	<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-compare/v0.4.0/mapbox-gl-compare.css" type="text/css">
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
	#mapContainer, #afterMap {
			 width: 100%;
			 height: 95.5vh;
		}
    .map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
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
			<div id="comparisonContainer"></div>
			<div id="mapContainer" class="map"></div>
			<div id="afterMap" class="map"></div>

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

					function loadSatellite() {							
						// Satellite Layer 1
						map.addSource('source1', {
							'type': 'raster',
							'tiles': ['https://gibs.earthdata.nasa.gov/wms/epsg4326/best/wms.cgi?bbox={bbox-epsg-3857}&format=image/png&service=WMS&version=1.1.1&request=GetMap&srs=EPSG:3857&transparent=true&width=256&height=256&layers=VIIRS_Black_Marble'],
							'tileSize': 256
						});
						map.addLayer({
							'id': 'layer1',
							'type': 'raster',
							'source': 'source1',
							'paint': {}
						});
						map.setPaintProperty(
							'layer1',
							'raster-opacity',
							.5
						);
						
						afterMap.addSource('source1', {
							'type': 'raster',
							'tiles': ['https://gibs.earthdata.nasa.gov/wms/epsg4326/best/wms.cgi?bbox={bbox-epsg-3857}&format=image/png&service=WMS&version=1.1.1&request=GetMap&srs=EPSG:3857&transparent=true&width=256&height=256&layers=MODIS_Combined_L3_IGBP_Land_Cover_Type_Annual'],
							'tileSize': 256
						});
						afterMap.addLayer({
							'id': 'layer1',
							'type': 'raster',
							'source': 'source1',
							'paint': {}
						});
						afterMap.setPaintProperty(
							'layer1',
							'raster-opacity',
							.5
						);
					}
					new Promise(function(resolve, reject) {
						mapboxgl.accessToken = 'pk.eyJ1IjoiZG9jbGlnb3QiLCJhIjoiY2p3MHQ5MTViMGVvNzQzdGdicTlwM2o3NCJ9.j4qYChJYSxUy8hNnlXrD-g';

						var mapStyle = document.getElementById('map-style').value;

						map = new mapboxgl.Map({
							container: 'mapContainer', // HTML container id
							style: 'mapbox://styles/mapbox/dark-v9',
							center: [121.056269, 14.569240],
							// starting position as [lng, lat]
							zoom: 6
						});

						afterMap = new mapboxgl.Map({
							container: 'afterMap', // HTML container id
							style: 'mapbox://styles/mapbox/dark-v9',
							center: [121.056269, 14.569240],
							// starting position as [lng, lat]
							zoom: 6
						});

						comparisonContainer = "#comparisonContainer";
						
						compareMap = new mapboxgl.Compare(map, afterMap, comparisonContainer, {
							
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
						setTimeout(() => resolve(1), 3000);
					}).then(function(result) {
						loadSatellite();
					});
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
