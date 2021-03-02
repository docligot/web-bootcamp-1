<nav class="w3-col l2 w3-ios-light-grey w3-sidebar w3-bar-block w3-large w3-roboto-body w3-animate-left" style="z-index: 1; top: 69px;">
		<div id = 'map-style-dropdown' class="w3-bar-item w3-round">
		<label for="map style"> <strong> Select Map Style: </strong> </label>
		<select id="map-style" class="w3-bar-item w3-button w3-select w3-round w3-hover-blue-grey" onchange="setStyle();">
			<option value="mapbox://styles/mapbox/streets-v11">Streets</option>
			<option value="mapbox://styles/mapbox/outdoors-v11">Outdoors</option>
			<option value="mapbox://styles/mapbox/dark-v9">Dark</option>
			<option value="mapbox://styles/mapbox/satellite-v9">Satellite</option>
			<option value="mapbox://styles/mapbox/satellite-streets-v10">Satellite With Streets</option>
		</select>
		</div>
		<div id ='select-locations' class="w3-bar-item w3-round">
		<label for="map style"> <strong> Select Locations: </strong> </label>	
		<div class="w3-padding w3-bar-item w3-button w3-select w3-round w3-hover-blue-grey" onclick="goToPoint1();">Headquarters</div>
		<div class="w3-padding w3-bar-item w3-button w3-select w3-round w3-hover-blue-grey" onclick="goToPoint2();">McDonalds</div>
		<div class="w3-padding w3-bar-item w3-button w3-select w3-round w3-hover-blue-grey" onclick="goToPoint3();">Batangas</div>
		<div class="w3-padding w3-bar-item w3-button w3-select w3-round w3-hover-blue-grey" onclick="goToFarm();">Farm Here</div>
		<div class="w3-padding w3-bar-item w3-button w3-select w3-round w3-hover-blue-grey" onclick="goToSchool();">Go to School</div>
</div>
		<div class="w3-bar-item w3-button w3-select w3-round w3-hover-blue-grey" onclick="toggle('small_menu'); toggle('id01');"><strong>About</strong></div>
</nav>