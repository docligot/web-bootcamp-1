<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css"rel="stylesheet"/> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Roboto&display=swap" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel='stylesheet' href='styles.css'/>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css"/>
   <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
  
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-compare/v0.4.0/mapbox-gl-compare.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-compare/v0.4.0/mapbox-gl-compare.css" type="text/css"/>

  <title>GeoMapping Viz</title>
</head>
<body>
    

  <header id="header" class="w3-bar w3-top w3-card">
  <div title = "Main Menu" class="w3-hover-none w3-button w3-bar-item" onclick="toggle('small_menu');"><i class="fa fa-bars"></i></div> 
  <div class="w3-bar-item w3-padding">
  GeoMapping Viz
  </div>
  <div id = "right-buttons">
		<div title = "About" class ="w3-bar-item w3-button w3-right w3-hover-none" onclick="toggle('id01')"> <i class="fa fa-info-circle"></i>&nbsp;</div>
	</header>
  <div class="w3-row">
     <div id="small_menu" class="" style="display: none;">
					<?php include ('nav.php'); ?>
			</div> 
	</div>
  <div id="map"></div>
  <!-- ABOUT -->
	<section id="id01" class="w3-modal w3-card" style="display: none;">
        <div class="w3-modal-content w3-animate-zoom">
            <div>
                <div class= "w3-dark-grey w3-bar w3-xlarge">
                    <div class="w3-padding w3-roboto-head w3-bar-item"><i class="fa fa-info-circle"></i>&nbsp; About </div>
                    <div onclick="toggle('id01');" class="w3-bar-item w3-roboto-head w3-button w3-right w3-hover-none">Close &times;</div>
                </div>
                <div class="w3-padding w3-light-grey">
                    <div class="w3-row w3-roboto-body">
										<h3 class ="w3-center "><strong>GeoMapping Viz</strong></h3>
										<p>GeoMapping Viz is a dashboard for visualizing georeferenced data from various sources such as but not limited to earth observations.  </p>
                    </div>
                </div>
        </div>
		</section>
  <div class ="w3-row">
      <div class="w3-col l11">&nbsp;</div>
      <div class="w3-col l1">  
      <!-- Basemap Style Dropdown -->
       <div class="w3-dropdown-click" style="top:235px;left: 102px;">
        <button class="mapControls" onclick="mapControls('basemap-dropdown')"><i class='fas fa-layer-group'></i></button>
        <div id="basemap-dropdown" class="body w3-dropdown-content w3-bar-block w3-border w3-round-large" style="right:0">
          <div id="streets" class="w3-bar-item w3-button w3-round-large">Streets</div>
          <div id="outdoors" class="w3-bar-item w3-button w3-round-large">Outdoors</div>
          <div id="light" class="w3-bar-item w3-button w3-round-large">Light</div>
          <div id="dark" class="w3-bar-item w3-button w3-round-large">Dark</div>
          <div id="satellite" class="w3-bar-item w3-button w3-round-large">Satellite</div>
          <div id="satellite-streets" class="w3-bar-item w3-button w3-round-large">Satellite with Streets</div>
      </div>
    </div>

      <!-- Zoom level Dropdown -->
      <div class="w3-dropdown-click" style="top:280px;left: 68px;">
        <button class="mapControls" onclick="mapControls('zoom')"><span class="glyphicon glyphicon-zoom-in"></span></button>
        <div id="zoom" class="body w3-dropdown-content w3-bar-block w3-border w3-round-large" style="right:0">
          <div id="continental" class="w3-bar-item w3-button w3-round-large">Continental View</div>
          <div id="neighbors" class="w3-bar-item w3-button w3-round-large">Neighbors View</div>
          <div id="regional" class="w3-bar-item w3-button w3-round-large">Regional View</div>
          <div id="regional-near" class="w3-bar-item w3-button w3-round-large">Regional/Near City View</div>
          <div id="near-city" class="w3-bar-item w3-button w3-round-large">Near City View</div>
          <div id="city" class="w3-bar-item w3-button w3-round-large">City View</div>
          <div id="street" class="w3-bar-item w3-button w3-round-large">Street View</div>
        </div>
</div>




      </div>
 <footer id="footer" class="w3-bottom w3-bar w3-padding" style="z-index: 2;">&copy; 2020 Cirrolytix Research Services

</div>
  <script src="map.js"></script>
  <script src="choropleth.js"></script>
  <script src="heatmap.js"></script>
</body>
</html>