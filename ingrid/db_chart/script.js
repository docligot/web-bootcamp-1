function getCharts1() {
	var series4 = document.getElementById('series4').value;
	var series5 = document.getElementById('series5').value;
	var series6 = document.getElementById('series6').value;	
	if (series4 && series5 && series6) {
		extractData1(series4, series5, series6);
	}
}

function extractData1(series4, series5, series6) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray1 = JSON.parse(this.responseText);
			console.log(dataArray1);
			var labels = [];
			var dataSeries1 = [];
			var dataSeries2 = [];
			for (var i in dataArray1) {
				labels.push(dataArray1[i].period);
				dataSeries1.push(dataArray1[i][series4]);
				dataSeries2.push(dataArray1[i][series5]);
			}
			console.log(labels);
			console.log(dataSeries1);
			console.log(dataSeries2);
			
			drawChart1(labels, dataSeries1, dataSeries2, series4, series5);
			createTable(labels, dataSeries1, dataSeries2, series4, series5);
			
			//drawChart1(dataArray1['labels'], dataArray1[series4], dataArray1[series5], series4, series5);
		} 
	};
	xmlhttp.open("GET", "./db_chart/call_chart.php?series4=" + series4 + "&series5=" + series5 + "&series6=" + series6, true);
	xmlhttp.send();
}

function drawChart1(data1, data2, data3, legend1, legend2) {
	
	var labels = JSON.parse('[' + data1 + ']');
	var dataSeries1 = JSON.parse('[' + data2 + ']');
	var dataSeries2 = JSON.parse('[' + data3 + ']');
	
	document.getElementById('chart-container1').innerHTML = '<canvas id="myChart1"></canvas>';
	
	window.chartColors = {
		red: 'rgb(255, 99, 132)',
		orange: 'rgb(255, 159, 64)',
		yellow: 'rgb(255, 205, 86)',
		green: 'rgb(75, 192, 192)',
		blue: 'rgb(54, 162, 235)',
		purple: 'rgb(153, 102, 255)',
		grey: 'rgb(201, 203, 207)', 
		black: 'rgb(0,0,0)'
	};

	var ctx = document.getElementById('myChart1').getContext('2d');
	var chart = new Chart(ctx, {
		// The type of chart we want to create
		type: 'line',

		// The data for our dataset
		data: {
			labels: labels,
			datasets: [
				{
					label: legend1,
					fill: false, 
					backgroundColor: window.chartColors.orange,
					borderColor: window.chartColors.orange,
					borderWidth: 2,
					yAxisID: 'y1',					
					data: dataSeries1
				},
				{
					label: legend2,
					fill: false, 
					backgroundColor: window.chartColors.black,
					borderColor: window.chartColors.black,
					borderWidth: 'y2', 
					steppedLine: true,
					yAxisID: 'y2', 
					data:dataSeries2
				}
			]
		},

		// Configuration options go here
		options: {
			responsive: true,
			legend: {
				display: true,
				position: 'top'
			}, 
			scales: {
				yAxes: [{
					ticks: {beginAtZero: true},
					type: 'linear',
					position: 'left',
					id: 'y1',
					scaleLabel: {
						display: true,
						labelString: legend1
					}
				},{
					ticks: {beginAtZero: true},
					type: 'linear',
					position: 'right',
					id: 'y2',
					scaleLabel: {
						display: true,
						labelString: legend2
					}
				}]
			}
		}
	})
}


function createTable(labels, dataSeries1, dataSeries2, legend1, legend2) {
	var tableOutput = '<table class="w3-table">';
	tableOutput += '<tr><th>Periods</th>th>' + legend1 + '</th><th>' + legend2 + '<th></tr>';
	
	for (var i in labels) {
		tableOutput += '<tr><td>' + labels[i] + '</td><td>' + dataSeries1[i] + '</td><td>' + dataSeries2[i] + '</td></tr>';
	}
	
	tableOutput += '</table>';
	
	document.getElementById('table-container').innerHTML = tableOutput;
}





