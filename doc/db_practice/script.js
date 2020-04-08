function getData() {
	var series1 = document.getElementById('series1').value;
	var series2 = document.getElementById('series2').value;
	if (series1 && series2) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var dataArray = JSON.parse(this.responseText);
				console.log(dataArray);
				var labels = [];
				var dataString1 = [];
				var dataString2 = [];
				for (var i in dataArray) {
					labels.push(dataArray[i].period);
					dataString1.push(dataArray[i][series1]);
					dataString2.push(dataArray[i][series2]);
				}
				createTable(series1, series2, labels, dataString1, dataString2);
				drawChart(labels, dataString1, dataString2, 'line')
			} else {
				document.getElementById('output').innerHTML = "Loading...";
			}
		};
		xmlhttp.open("GET", "call_chart.php?series1=" + series1 + "&series2=" + series2, true);
		xmlhttp.send();	
	}
}

function createTable(series1, series2, labels, dataString1, dataString2) {
	var output = '<table class="w3-table w3-striped">';
	output += '<tr><th>period</th><th>' + series1 + '</th><th>' + series2 + '</th></tr>';
	for (var i in labels) {
		output += '<tr><td>' + labels[i] + '</td><td>' + dataString1[i] + '</td><td>' + dataString2[i] + '</td></tr>';
	}
	output += '</table>';
	document.getElementById('output').innerHTML = output;	
}

function drawChart(labels, dataString1, dataString2, chart_type) {
	
	document.getElementById('chart-container').innerHTML = '<canvas id="myChart"></canvas>';
	
	var name = JSON.parse('[' + labels + ']');
	var data1 = JSON.parse('[' + dataString1 + ']');
	var data2 = JSON.parse('[' + dataString2 + ']');
	
	var chartdata = {
		labels: name, 
		datasets: [
			{
			label: 'Users', 
			backgroundColor: 'rgba(255, 99, 132, 0.2)',
			borderColor: 'rgba(255,99,132,1)', 
			data: data1, 
			borderWidth: 2
			}, 
			{
			label: 'Sessions', 
			backgroundColor: 'rgba(54, 162, 235, 0.2)',
			borderColor: 'rgba(54, 162, 235, 1)', 
			data: data2, 
			borderWidth: 2
			}
		]
	};
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		type: chart_type,
		data: chartdata, 
		options: {
			scales: {
				yAxes: [{
						ticks: {
							min: 0
						}
					}]
				}, 
			legend: {
				position: 'bottom', 
				labels: {
					fontFamily: 'Roboto Light'
					}
				}, 
			title: {
				display: 'true', 
				fontFamily: 'Roboto Light', 
				fontSize: 14, 
				text: 'Comparison'
				}
		}
	});
}

