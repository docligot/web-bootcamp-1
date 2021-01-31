		function load_json() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
                    cities = JSON.parse(this.responseText);
					console.log(cities);					
					var list = '';
					for (var i in cities.features) {
						list += cities.features[i].properties.ADM3_EN + '<br/>';
					}
					document.getElementById("list").innerHTML = list; 
				}
			};
			xhttp.open("GET", "ncr-merged.json", true);
			xhttp.send();
		}
		
		load_json();
		