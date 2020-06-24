function setStyle() {
	var mapStyle = document.getElementById('map-style').value;
	map.setStyle(mapStyle);
}

mapboxgl.accessToken = 'pk.eyJ1IjoiZG9jbGlnb3QiLCJhIjoiY2p3MHQ5MTViMGVvNzQzdGdicTlwM2o3NCJ9.j4qYChJYSxUy8hNnlXrD-g';
var mapStyle = document.getElementById('map-style').value;

var map = new mapboxgl.Map({
	container: 'map-container', // HTML container id
	style: mapStyle,
	center: [121.056269, 14.569240], // starting position as [lng, lat]
	zoom: 15
});

map.addControl(new mapboxgl.NavigationControl()); // Add control 

// Data Arrays
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
messages.push('<h3>UA&P</h3><p>No classes!!!!</p>');

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
locations.push([121.060553,14.580456]);

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

// Create markers
for (i = 0; i < locations.length; i++) {
	popup[i] = new mapboxgl.Popup()
	.setHTML(messages[i]);
	marker[i] = new mapboxgl.Marker(colors[i])
	.setLngLat(locations[i])
	.setPopup(popup[i])
	.addTo(map);
}

// Flyby locations
function goToPoint(target) {
	switch (target) {
		case 'headquarters' :
			map.flyTo({center: [121.056269,	14.569240]});
			break;
		case 'mcdonalds' :
			map.flyTo({center: [121.060796,	14.573229]});
			break;
		case 'batangas' :
			map.flyTo({center: [121.1713267,14.03466928]});
			break;
		case 'farm' :
			map.flyTo({center: [122.970367,10.413438]});
			break;
		case 'school' :
			map.flyTo({center: [121.060553,14.580456]});
			break;
	}
}
