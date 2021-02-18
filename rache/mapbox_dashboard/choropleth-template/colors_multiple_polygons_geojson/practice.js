		function load_json() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
					regions = JSON.parse(this.responseText);
					console.log(regions);
					for (var i in regions.features) {
						add_polygon(i);
					}
				}
			};
			xhttp.open("GET", "regions.json", true);
			xhttp.send();
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
			"#000000",
		];
		
		load_json();
		
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG9jbGlnb3QiLCJhIjoiY2p3MHQ5MTViMGVvNzQzdGdicTlwM2o3NCJ9.j4qYChJYSxUy8hNnlXrD-g';
        map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [121.056269, 14.569240],
        zoom: 5
        });
     
        function add_polygon(area) {
			var sourceName = 'polygon'+area;
			var layerName = regions.features[area].properties.REGION;
            map.addSource(sourceName, {
                'type': 'geojson',
                'data': {
					'type': 'Feature',
					'geometry': regions.features[area].geometry
				}
            });
            map.addLayer({
                'id': layerName,
                'type': 'fill',
                'source': sourceName,
                'layout': {},
                'paint': {
                    'fill-color': region_colors[area],
                    'fill-opacity': 0.8
                }
            });
        };