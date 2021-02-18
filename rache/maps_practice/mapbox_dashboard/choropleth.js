function load_json() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
      region = JSON.parse(this.responseText);
      console.log(region);

    }
  };
  xhttp.open("GET", "regional.json", true);
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
    for (var i in region.features) {
      add_polygon(i, value);
    }	
  }
}

// color palette for hazard
hazard_colors = [
  "#feedde",
  "#fdbe85",
  "#fd8d3c",
  "#e6550d",
  "#a63603"
];
// color palette for vulnerability
vulnerability_colors = [
  "#f1eef6",
  "#bdc9e1",
  "#74a9cf",
  "#2b8cbe",
  "#045a8d"
];
// color palette for lack of coping capacity
lack_res_colors = [
  "#ffffcc",
  "#c2e699",
  "#78c679",
  "#31a354",
  "#006837"
];

// color palette for covid risk
risk_colors = [
  "#fee5d9",
  "#fcae91",
  "#fb6a4a",
  "#de2d26",
  "#a50f15"
];

load_json();
load_risk();

  function add_polygon(area, risk_value) {
  //console.log(region_colors[risk[area][risk_value]]);
  
  var sourceName = 'polygon'+area;
  var layerName = region.features[area].properties.ADM1_EN;
  var layerNameBorders = region.features[area].properties.ADM1ALT1EN;
  var color =[];
  var risk_indicator="";

  if (risk_value==1){
      risk_indicator = "Hazard & Exposure"
      if (risk[area][risk_value]<=19){
              color = hazard_colors[0];
      } else if (risk[area][risk_value]>19 && risk[area][risk_value]<=34){
              color = hazard_colors[1];
      } else if (risk[area][risk_value]>34 && risk[area][risk_value]<=49){
              color = hazard_colors[2];
      } else if (risk[area][risk_value]>49 && risk[area][risk_value]<=64) {
              color = hazard_colors[3];
      } else {
              color = hazard_colors[4];
      };
    }
  else if (risk_value ==2){
    risk_indicator = "Vulnerability"
      if (risk[area][risk_value]<=19){
              color = vulnerability_colors[0];
      } else if (risk[area][risk_value]>19 && risk[area][risk_value]<=34){
              color = vulnerability_colors[1];
      } else if (risk[area][risk_value]>34 && risk[area][risk_value]<=49){
              color = vulnerability_colors[2];
      } else if (risk[area][risk_value]>49 && risk[area][risk_value]<=64) {
              color = vulnerability_colors[3];
      } else {
              color = vulnerability_colors[4];
      };
    }
  else if (risk_value ==3){
    risk_indicator = "Lack of Coping Capacity"
      if (risk[area][risk_value]<=19){
        color = lack_res_colors[0];
      } else if (risk[area][risk_value]>19 && risk[area][risk_value]<=34){
              color = lack_res_colors[1];
      } else if (risk[area][risk_value]>34 && risk[area][risk_value]<=49){
              color = lack_res_colors[2];
      } else if (risk[area][risk_value]>49 && risk[area][risk_value]<=64) {
              color = lack_res_colors[3];
      } else {
              color = lack_res_colors[4];
      };
  }
  else if (risk_value ==4){
        risk_indicator = "COVID-19 Risk Index"
        if (risk[area][risk_value]<=19){
          color = risk_colors[0];
        } else if (risk[area][risk_value]>19 && risk[area][risk_value]<=34){
                color = risk_colors[1];
        } else if (risk[area][risk_value]>34 && risk[area][risk_value]<=49){
                color = risk_colors[2];
        } else if (risk[area][risk_value]>49 && risk[area][risk_value]<=64) {
                color = risk_colors[3];
        } else {
                color = risk_colors[4];
        };
    }
  
  if (map.getSource(sourceName)) {
    map.removeLayer(layerName);
    map.removeLayer(layerNameBorders);
    map.removeSource(sourceName);
  }
        map.addSource(sourceName, {
            'type': 'geojson',
            'data': {
      'type': 'Feature',
      'geometry': region.features[area].geometry
    }
    // 'generateId': true 
        });
        map.addLayer({
            'id': layerName,
            'type': 'fill',
            'source': sourceName,
            'layout': {},
            'paint': {
                'fill-color': color,
                'fill-opacity': 0.9
            }
        });
        map.addLayer({
          'id': layerNameBorders,
          'type': 'line',
          'source': sourceName,
          'layout': {},
          'paint': {
              'line-color': '#666666',
              'line-width': 0.8
          }
      });
      
      // Create a popup, but don't add it to the map yet.
      var popup = new mapboxgl.Popup({
        closeButton: false,
        closeOnClick: false
        });

    map.on('mouseenter', layerName, function (region) {
        // Change the cursor style as a UI indicator.
        map.getCanvas().style.cursor = 'pointer';
         
        var coordinates = region.features[0].geometry.coordinates.slice();
        while (Math.abs(region.lngLat.lng - coordinates[0]) > 180) {
        coordinates[0] += region.lngLat.lng > coordinates[0] ? 360 : -360;
        }
         
        popup.setLngLat(region.lngLat).setHTML('<h6>' + risk_indicator  + '</h6>' + '<h4>'+'<strong>'+ risk[area][risk_value] + '</strong>'+'</h4>' +
          '<h6>'+ layerName +'</h6>').addTo(map);
        });
        
        map.on('mouseleave', layerName, function () {
        map.getCanvas().style.cursor = '';
        popup.remove();
        });

    };

    