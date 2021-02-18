// Toggle
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
    x.previousElementSibling.className += " w3-dark-grey";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-dark-grey", "");
  }
}

// Map Controls
function mapControls(options) {
  var x = document.getElementById(options);
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

//Switch Basemap Style
var light = document.getElementById("light");
var dark = document.getElementById("dark");
var outdoors = document.getElementById("outdoors");
var streets = document.getElementById("streets");
var satellite = document.getElementById("satellite");
var satstreets = document.getElementById("satellite-streets");

light.onclick = function(){
  map.setStyle('mapbox://styles/mapbox/light-v10');
}

dark.onclick = function(){
  map.setStyle('mapbox://styles/mapbox/dark-v9');
}
streets.onclick = function(){
  map.setStyle('mapbox://styles/mapbox/streets-v11');
}
outdoors.onclick = function(){
  map.setStyle('mapbox://styles/mapbox/outdoors-v11');
}

satellite.onclick = function(){
  map.setStyle('mapbox://styles/mapbox/satellite-v9');
}

satstreets.onclick = function(){
  map.setStyle('mapbox://styles/mapbox/satellite-streets-v10');
}

// Switch Zoom level

var continental= document.getElementById("continental");
var neighbors = document.getElementById("neighbors");
var regional = document.getElementById("regional");
var regionalnear = document.getElementById("regional-near");
var nearcity = document.getElementById("near-city");
var city = document.getElementById("city");
var street = document.getElementById("street");

continental.onclick = function(){
  map.setZoom('1');
}
neighbors.onclick = function(){
  map.setZoom('4');
}
regional.onclick = function(){
  map.setZoom('7');
}
regionalnear.onclick = function(){
  map.setZoom('8');
}
nearcity.onclick = function(){
  map.setZoom('10');
}
city.onclick = function(){
  map.setZoom('12');
}
street.onclick = function(){
  map.setZoom('16');
}

// Add layers
function setLayer(layername, sourcename, value) {
  if (map.getSource(sourcename)) {
      map.removeLayer(layername);
      map.removeSource(sourcename);
  }
   var object = JSON.parse(value);
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

// Fly to locations
function setMap(area) {
  if (area) {
      var target = locations[area];
      map.flyTo({
          center: target,
          essential: true
      
      });
  }
}
// Map
mapboxgl.accessToken = 'pk.eyJ1IjoiZG9jbGlnb3QiLCJhIjoiY2p3MHQ5MTViMGVvNzQzdGdicTlwM2o3NCJ9.j4qYChJYSxUy8hNnlXrD-g';
// var mapStyle = document.getElementById('map-style').value;
var map = new mapboxgl.Map({
container: 'map', // container id
style: 'mapbox://styles/mapbox/light-v10', // style URL
center: [121.056269,	14.569240], // starting position [lng, lat]
zoom: 4.5 // starting zoom
});

map.addControl(
  new MapboxGeocoder({
  accessToken: mapboxgl.accessToken,
  mapboxgl: mapboxgl
  }));

map.addControl(new mapboxgl.NavigationControl());

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