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
		
		type: 'line', 
		
		data: {
			labels: [], 
			datasets: []
		}, 
		
		options: {}
	}
	
	
	
	);
	
	
}






