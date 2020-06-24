function runChart() {
	var year = document.getElementById('year').value;
	var stock = document.getElementById('stock').value;
	if (year && stock) {
		var labels = [];
		for (i = ((year - 2000) * 12) + 1; i <= ((year - 2000) * 12) + 12; i++){
			labels.push(dataArray[i][2]);
		}
		var data = [];
		var pos = headers.indexOf(stock);
		for (i = ((year - 2000) * 12) + 1; i <= ((year - 2000) * 12) + 12; i++){
			data.push(dataArray[i][pos]);
		}
		console.log(labels);
		console.log(data);
		drawChart(labels, data, year, stock);
	}
}

function extractData() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			dataArray = JSON.parse(this.responseText);
			console.log(dataArray);
			headers = dataArray[0];
			console.log(headers);
		} 
	};
	xmlhttp.open("GET", "read_csv.php", true);
	xmlhttp.send();
}

function drawChart(labels, data, year, stock) {
	document.getElementById('chartContainer').innerHTML = '<canvas id="myChart"></canvas>';

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

	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		// The type of chart we want to create
		type: 'bar',

		// The data for our dataset
		data: {
			labels: labels,
			datasets: [
				{
					label: stock,
					fill: false, 
					backgroundColor: window.chartColors.orange,
					borderColor: window.chartColors.orange,
					borderWidth: 2, 
					data: data
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
				yAxes: {
					ticks: {
						beginAtZero: true
					}
				}
			}
		}
	})
}

extractData();