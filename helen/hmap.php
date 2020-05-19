<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Map</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=yes" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet" />
<style>
	#map { position:absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<section><div>Analytics Dashboard</div></section>
<section><div id="map"></div></section>

</body>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiaGVsZW5tYXJ5IiwiYSI6ImNrOXh6bzZzbzA0eHkza213cWpodDVpdTQifQ.9yCtd_zv5_MrPQ_rikpz-Q';
var map = new mapboxgl.Map({
container: 'map', // container id
style: 'mapbox://styles/helenmary/ck9z9z44u2sau1ipkmfexgcxu', // stylesheet location
center: [124.54, 7.764], // starting position [lng, lat]
zoom: 6.58 // starting zoom
});
</script>
</html>