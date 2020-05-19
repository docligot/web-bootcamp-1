<?php

function showMap() {
?>
<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10 w3-padding">
		<div class="w3-xlarge">Map Visualization</div>
		<div class="w3-row w3-padding">
			<select id="variable1" class="w3-select w3-third" onchange="goToPoint(this.value);">
				<option value=''>Select Location:</option>		
				<span id='mapOptions'>
					<option value='headquarters'>Headquarters</option>
					<option value='mcdonalds'>McDonalds</option>
					<option value='batangas'>Batangas</option>
					<option value='farm'>Farm Here</option>
					<option value='school'>Go to School</option>
				</span>
			</select>
		<select id="map-style" class="w3-select w3-third" onchange="setStyle();">
			<option value="mapbox://styles/mapbox/streets-v9">Streets</option>
			<option value="mapbox://styles/mapbox/outdoors-v9">Outdoors</option>
			<option value="mapbox://styles/mapbox/dark-v9">Dark</option>
			<option value="mapbox://styles/mapbox/satellite-v9">Satellite</option>
			<option value="mapbox://styles/mapbox/satellite-streets-v10">Satellite With Streets</option>
		</select>
		</div>
		<br/>
		<div class="w3-border">
			<div id="map-container" class="w3-padding"></div>
			<div class="w3-small w3-border-top w3-padding">&nbsp;</div>
		</div>
		
		<div id="mapTable" class="w3-padding"></div>
	</div>
</div>
<script src='maps/mapbox-gl.js'></script>
<link href='maps/mapbox-gl.css' rel='stylesheet' />
<script src="maps/renderMap.js"></script>



<?php
}