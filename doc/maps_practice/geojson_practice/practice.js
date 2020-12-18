		function load_json() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
					geojson = JSON.parse(this.responseText);
					console.log(geojson);
				}
			};
			xhttp.open("GET", "regions.json", true);
			xhttp.send();
		}
		
		load_json();
		
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG9jbGlnb3QiLCJhIjoiY2p3MHQ5MTViMGVvNzQzdGdicTlwM2o3NCJ9.j4qYChJYSxUy8hNnlXrD-g';
        map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [121.056269, 14.569240],
        zoom: 5
        });
         
        function add_polygon(area) {
			console.log(area);
			console.log(Array(geojson.features[area].geometry.coordinates));
			if (map.getSource('polygon')) {
				map.removeLayer('layer');
				map.removeSource('polygon');
			}
            map.addSource('polygon', {
                'type': 'geojson',
                'data': {
                    'type': 'Feature',
                    'geometry': {
                        'type': 'Polygon',
                        'coordinates': [geojson.features[area].geometry.coordinates]
                    }
                }
            });
            map.addLayer({
                'id': 'layer',
                'type': 'fill',
                'source': 'polygon',
                'layout': {},
                'paint': {
                    'fill-color': '#088',
                    'fill-opacity': 0.8
                }
            });
        };