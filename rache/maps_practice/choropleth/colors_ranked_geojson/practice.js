		function load_json() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
					ncr = JSON.parse(this.responseText);
					console.log(ncr);

				}
			};
			xhttp.open("GET", "ncr.json", true);
			xhttp.send();
		}

		function load_risk() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
					risk = JSON.parse(this.responseText);
					console.log(risk);
				}
			};
			xhttp.open("GET", "extract_risk.php", true);
			xhttp.send();
		}
		
		function display_risk(value) {
			if (value) {
				for (var i in ncr.features) {
					add_polygon(i, value);
				}	
			}
		}
		
		region_colors = [
			"#66eeff",
			"#5bd6e5",
			"#51becc",
			"#47a6b2",
			"#3d8e99",
			"#33777f",
			"#285f66",
			"#1e474c",
			"#142f33",
			"#0a1719",
			"#000000"
		];
		
		load_json();
		load_risk();
		
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG9jbGlnb3QiLCJhIjoiY2p3MHQ5MTViMGVvNzQzdGdicTlwM2o3NCJ9.j4qYChJYSxUy8hNnlXrD-g';
        map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [121.056269, 14.569240],
        zoom: 8
        });
     
        function add_polygon(area, risk_value) {
			console.log(region_colors[risk[area][risk_value]]);
			var sourceName = 'polygon'+area;
			var layerName = ncr.features[area].properties.name;
			if (map.getSource(sourceName)) {
				map.removeLayer(layerName);
				map.removeSource(sourceName);
			}
            map.addSource(sourceName, {
                'type': 'geojson',
                'data': {
					'type': 'Feature',
					'geometry': ncr.features[area].geometry
				}
            });
            map.addLayer({
                'id': layerName,
                'type': 'fill',
                'source': sourceName,
                'layout': {},
                'paint': {
                    'fill-color': region_colors[risk[area][risk_value]],
                    'fill-opacity': 0.8
                }
            });
        };