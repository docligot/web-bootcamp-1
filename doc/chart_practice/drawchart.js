function loadData() {
	var series1 = document.getElementById('series1').value;
	var series2 = document.getElementById('series2').value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			console.log(dataArray);
			var labels = [];
			var series_1 = [];
			var series_2 = [];
			var name_1 = dataArray[0][series1];
			var name_2 = dataArray[0][series2];		
			for (i = 1; i < dataArray.length; i++) {
				labels.push(dataArray[i][0]);
				series_1.push(dataArray[i][series1]);
				series_2.push(dataArray[i][series2]);
			}
			drawChart(labels, series_1, series_2, name_1, name_2);
			createTable(labels, series_1, series_2, name_1, name_2);
		}
	};
	xhttp.open("GET", "get_data.php", true);
	xhttp.send();
}

function createTable(labels, series_1, series_2, name_1, name_2) {
	var table = '<table class="w3-table w3-bordered w3-striped">';
	table += '<tr><th>Date</th><th>' + name_1 + '</th><th>' + name_2 + '</th></tr>';	
	for (var i in labels) {
		table += '<tr><td>'+ labels[i] +'</td><td>'+ series_1[i] +'</td><td>'+ series_2[i] +'</td></tr>';
	}
	table += '</table>';
	document.getElementById('table_container').innerHTML = table;
}

function drawChart(labels, series_1, series_2, name_1, name_2) {
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
		
	document.getElementById('chart_container').innerHTML = '<canvas id="myChart" style="height: 300px;"></canvas>';
	
	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		
		type: 'line', 
		
		data: {
			labels: labels, 
			datasets: [
				{
					label: name_1, 
					fill: false, 
					backgroundColor: window.chartColors.red, 
					borderColor: window.chartColors.red, 
					borderWidth: 2, 
					data: series_1
				},
				{
					label: name_2, 
					fill: false, 
					backgroundColor: window.chartColors.blue, 
					borderColor: window.chartColors.blue, 
					borderWidth: 2, 
					steppedLine: true, 
					data: series_2
				}				
			]
		}, 
		
		options: {
			responsive: true, 
			maintainAspectRatio: false, 
			legend: {
				display: true, 
				position: 'bottom', 
				fontFamily: 'Roboto Light'
			}, 
			title: {
				display: true, 
				fontFamily: 'Roboto Light', 
				fontSize: 14, 
				text: 'Sample Chart'
			}, 
			scales: {
				yAxes: [{
					display: true, 
					position: 'left',
					id: 'y1', 
					stacked: false, 
					ticks: {
						beginAtZero: true
					}
				}], 
				xAxes: [{
					stacked: false
				}]				
			}
		}
	});
}

loadData();
//drawChart();





