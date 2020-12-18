<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Geomap Viz</title>
	<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-safety.css">
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
			 height: 96vh;
		}
  .header-right{
    float:right;
    text-align: center;
    padding: 14px 16px;
    height: 30px;
    margin: 50px;
  }

	</style>
</head>
<body>
  <header class="w3-bar w3-top w3-safety-green w3-xxlarge w3-roboto-head w3-card" style="z-index: 2;">
	 <div title = "Main Menu" class="menu-icon w3-hover-none w3-button w3-bar-item" onclick="toggle('small_menu');"><i class="fa fa-bars"></i></div> 
		<div class="w3-bar-item w3-padding">
		Geomap Viz
		</div>
		<div id = "right-buttons">
		<div title = "About" class ="w3-bar-item w3-button w3-right w3-hover-none" onclick="toggle('id01')"> <i class="fa fa-info-circle"></i>&nbsp;</div>
		<div title ="How it Works" class ="w3-bar-item w3-button w3-right w3-hover-none" onclick="toggle('id02')"> <i class="fa fa-question-circle"></i></div>
		</div>
	</header>
	<div class="w3-row">
     <div id="small_menu" class="" style="display: none;">
					<?php include ('nav.php'); ?>
			</div>
			

	</div>
  <div id="mapContainer"></div>
	<!-- ABOUT -->
	<section id="id01" class="w3-modal w3-card" style="display: none;">
        <div class="w3-modal-content w3-animate-zoom">
            <div>
                <div class= "w3-safety-green w3-bar w3-xlarge">
                    <div class="w3-padding w3-roboto-head w3-bar-item"><i class="fa fa-info-circle"></i>&nbsp; About </div>
                    <div onclick="toggle('id01');" class="w3-bar-item w3-roboto-head w3-button w3-right w3-hover-none">Close &times;</div>
                </div>
                <div class="w3-padding w3-light-grey">
                    <div class="w3-row w3-roboto-body">
										<h3 class ="w3-center "><strong>Geomap Viz</strong></h3>
										<p>A web application that visualizes various satellite layers and health-related and socio-economic datasets.</p>
                    </div>
                </div>
        </div>
		</section>
<!-- How it Works -->
<section id="id02" class="w3-modal w3-card" style="display: block;">
        <div class="w3-modal-content w3-animate-zoom">
            <div>
                <div class= "w3-safety-green w3-bar w3-xlarge">
                    <div class="w3-padding w3-roboto-head w3-bar-item"><i class="fa fa-question-circle"></i></i>&nbsp;How it Works</div>
                    <div onclick="toggle('id02');" class="w3-bar-item w3-roboto-head w3-button w3-right w3-hover-none">Close &times;</div>
                </div>
                <div class="w3-padding w3-light-grey">
                    <div class="w3-row w3-roboto-body">
										<h3 class ="w3-center"><strong>Welcome!</strong></h3>
										<p>To get started on mapping, use the navigation sidebar to control and adjust the settings, layers, and datasets you want to visualize.  </p>
								</div>
        </div>
		</section>		
<script>

// Navigation Bar
function toggle(element) {
    var object = document.getElementById(element);
    	if (object.style.display == 'none') {
        	object.style.display = 'block';
					} 
			else {
        object.style.display = 'none';
    			}	
				}
				
  // Nav Dropdown
  function dropDown(options) {
  var x = document.getElementById(options);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-blue-gray";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-blue-gray", "");
  }
}


// Zoom level
function setZoom(value) {
    var object = JSON.parse(value);
    map.setZoom(object.level);
    // document.getElementById('zoomInfo').innerHTML = object.magnification;
}


					 
// Basemap Style
function setStyle() {
		var mapStyle = document.getElementById('map-style').value;
			map.setStyle(mapStyle);
					}

// Add layers
function setLayer(layername, sourcename, value) {
    if (map.getSource(sourcename)) {
        map.removeLayer(layername);
        map.removeSource(sourcename);
    }
    // if (value == "" || value == 0) {
    //     document.getElementById(layername + 'Info').innerHTML = "";
    //     return;
    // }
    var object = JSON.parse(value);
    // if (object.layer) {
    //     document.getElementById(layername + 'Info').innerHTML = object.name;
    // } else {
    //     document.getElementById(layername + 'Info').innerHTML = "";
    // }
    if (object.layer) {
        if (object.api == 'http://services.sentinel-hub.com/ogc/wms/16922740-07a2-47f5-936f-70625b01750e' || object.api == 'https://creodias.sentinel-hub.com/ogc/wms/16922740-07a2-47f5-936f-70625b01750e') {
            var time = '&time=2020-06-29/2020-09-29';
        } else {
            var time = '';
        }
        map.addSource(sourcename, {
            'type': 'raster',
            'tiles': [object.api + '?bbox={bbox-epsg-3857}&format=image/png&service=WMS&version=1.1.1&request=GetMap&srs=EPSG:3857&transparent=true&width=256&height=256&layers=' + object.layer + time],
            'tileSize': 256
        });
        map.addLayer({
            'id': layername,
            'type': 'raster',
            'source': sourcename,
            'paint': {}
        });
        map.setPaintProperty(
            layername,
            'raster-opacity',
            .5
        );
    }
}
						mapboxgl.accessToken = 'pk.eyJ1IjoicmxtNDY5MiIsImEiOiJja2lzaXFjanUyMjV1MzNwM2JuNnkxaDRwIn0.9bV621yVDJ_plx__CUlJFw';

						var mapStyle = document.getElementById('map-style').value;

						var map = new mapboxgl.Map({
							container: 'mapContainer', // HTML container id
							style: mapStyle,

							center: [121.056269,	14.569240],
						// starting position as [lng, lat]
							zoom: 4
						});
						
						map.addControl(new mapboxgl.NavigationControl(), 'bottom-right');

						var popup = [];
						var marker = [];
						var messages = [];
						var locations = [];
						var colors = [];

						messages.push(['Manila']);
						messages.push(['San Fernando La Union']);
						messages.push(['Tuguegarao']);
						messages.push(['San Fernando Pampanga']);
						messages.push(['Calamba']);
						messages.push(['Legazpi']);
						messages.push(['Iloilo City']);
						messages.push(['Cebu City']);
						messages.push(['Tacloban City']);
						messages.push(['Pagadian']);
						messages.push(['Cagayan de Oro']);
						messages.push(['Davao City']);
						messages.push(['Koronadal']);
						messages.push(['Cotabato City']);
						messages.push(['Baguio']);
						messages.push(['Butuan']);
						messages.push(['Calapan']);

						locations.push([120.9822, 14.6042]);
						locations.push([120.319444, 16.618611]);
						locations.push([121.722849, 17.615772]);
						locations.push([120.684446, 15.034251]);
						locations.push([121.126469, 14.191406]);
						locations.push([123.7353, 13.1387]);
						locations.push([122.564444, 10.696944]);
						locations.push([123.891667, 10.311111]);
						locations.push([125.004722, 11.243333]);
						locations.push([123.437, 7.8257]);
						locations.push([124.643056, 8.481111]);
						locations.push([125.612778, 7.073056]);
						locations.push([124.987427, 6.24501]);
						locations.push([124.246389, 7.223611]);
						locations.push([120.590998, 16.417155]);
						locations.push([125.543611, 8.949167]);
						locations.push([121.179722, 13.410833]);

						for (i = 0; i < locations.length; i++) {
								popup[i] = new mapboxgl.Popup()
										.setHTML(messages[i]);

								marker[i] = new mapboxgl.Marker(colors[i])
										.setLngLat(locations[i])
										.setPopup(popup[i])
										.addTo(map);
						}
						
						function setMap(area) {
								if (area) {
										var target = locations[area];
										map.flyTo({
												center: target,
												essential: true
										
										});
								}
						}
						
						

					</script>
	<footer class="w3-bottom w3-card w3-black w3-padding" style="z-index: 2;">&copy; 2020 Cirrolytix Research Services
 </footer>
</body>
</html>
