function chartColors() {
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
}

function drawChart() {
	chartColors();
	
	document.getElementById('chart_container').innerHTML = '<canvas id="myChart" style="height: 300px;"></canvas>';
	
	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		
		type: 'bar', 
		
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "June"], 
			datasets: [
				{
					label: "Series 1", 
					fill: true, 
					backgroundColor: window.chartColors.red, 
					borderColor: window.chartColors.red, 
					borderWidth: 2, 
					data: [1, 5, 2, 7, 8, 3]
				},
				{
					label: "Series 2", 
					fill: true, 
					backgroundColor: window.chartColors.blue, 
					borderColor: window.chartColors.blue, 
					borderWidth: 2, 
					data: [10, 5, 1, 1, 3, 8]
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
					stacked: true
				}], 
				xAxes: [{
					stacked: true
				}
				]
				
			}
			
		}
	});
}

drawChart();





