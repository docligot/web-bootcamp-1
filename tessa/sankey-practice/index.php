<html>
  <head>
    <link rel="stylesheet" href="w3.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['sankey']});
      google.charts.setOnLoadCallback();

      function openPythonFile() {
        var var1 = document.getElementById('var1').value;
        var var2 = document.getElementById('var2').value;
        var var3 = document.getElementById('var3').value;
      	var xmlhttp = new XMLHttpRequest();
      	xmlhttp.onreadystatechange = function() {
      		if (this.readyState == 4 && this.status == 200) {
      			var dataArray = JSON.parse(this.responseText);
            var agegrp = [];
            agegrp.push(['From', 'To', 'Weight']);
            for (var j=0; j < dataArray['scol1'].length; j++) {
              agegrp.push([dataArray['scol1'][j], dataArray['scol2'][j], dataArray['scol3'][j]]);
            }

            var data = google.visualization.arrayToDataTable(agegrp);
            // Sets chart options.
            var options = {
              width: 1000,
            };

            // Instantiates and draws our chart, passing in some options.
            var chart = new google.visualization.Sankey(document.getElementById('sankey_basic'));
            chart.draw(data, options);
      		}
      	};
      	xmlhttp.open("GET", "process_data2.py?var1=" + var1 + "&var2=" + var2 + "&var3=" + var3, true);
      	xmlhttp.send();
      };



    </script>
  </head>
  <body>

<div>
	<select id="var1">
		<option value="">Select Variable 1</option>
		<option value="AgeGroup">Age Group</option>
		<option value="Sex">Sex</option>
		<option value="RemovalType">Removal Type</option>
    <option value="Admitted">Admitted</option>
    <option value="RegionRes">Region</option>
    <option value="ProvRes">Province</option>
    <option value="CityMunRes">Municipality</option>
    <option value="HealthStatus">Health Status</option>
    <option value="Quarantined">Quarantine Status</option>
	</select>

	<select id="var2">
    <option value="">Select Variable 2</option>
		<option value="AgeGroup">Age Group</option>
		<option value="Sex">Sex</option>
		<option value="RemovalType">Removal Type</option>
    <option value="Admitted">Admitted</option>
    <option value="RegionRes">Region</option>
    <option value="ProvRes">Province</option>
    <option value="CityMunRes">Municipality</option>
    <option value="HealthStatus">Health Status</option>
    <option value="Quarantined">Quarantine Status</option>
	</select>

  <select id="var3">
    <option value="">Select Variable 3</option>
		<option value="AgeGroup">Age Group</option>
		<option value="Sex">Sex</option>
		<option value="RemovalType">Removal Type</option>
    <option value="Admitted">Admitted</option>
    <option value="RegionRes">Region</option>
    <option value="ProvRes">Province</option>
    <option value="CityMunRes">Municipality</option>
    <option value="HealthStatus">Health Status</option>
    <option value="Quarantined">Quarantine Status</option>
	</select>


</div>

<br/>


    <button class="w3-button w3-blue" onclick="openPythonFile();">Generate Sankey</button>

    <br/>
    <div id="sankey_basic" style="width: 900px; height: 300px;"></div>

  </body>
</html>
