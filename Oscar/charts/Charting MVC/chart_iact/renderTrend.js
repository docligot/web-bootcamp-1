function renderTrend() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			dataArray = JSON.parse(this.responseText);
			labels = [];
			series = [];
			labels = dataArray[0];
			for (var i in labels) {
				series[labels[i]] = [];
				for (var j in dataArray[1]) {
					series[labels[i]].push(dataArray[1][j][i]);
				}				
			}
			labels.sort();
			var drop = [];
			for (i = 1; i <= 3; i++) {
				var variable = 'variable'+i;
				document.getElementById(variable).innerHTML = '<option value="">Select Keyword ' + i +':</option>';	
				for (j = 1; j <= labels.length; j++) {
					if (labels[j] != 'date') {
						drop.push(labels[j]);
						document.getElementById(variable).innerHTML += '<option value="' + labels[j] + '">' + labels[j] + '</option>';
					}
				}
			}
			document.getElementById('variable1').value=labels[1];
			document.getElementById('variable2').value='human+rights';
			document.getElementById('variable3').value=drop[Math.floor(Math.random() * drop.length)];
			selectSeries();
		}
	};
	xmlhttp.open("GET", "chart_iact/extractTrend.json", true);
	xmlhttp.send();
}

function selectSeries() {
	var variable1 = document.getElementById('variable1').value;
	var variable2 = document.getElementById('variable2').value;
	var variable3 = document.getElementById('variable3').value;
	drawChart(variable1, variable2, variable3, series['date'], series[variable1], series[variable2], series[variable3], 'line', 'chartContainer', 'trendChart', 'Search Trends');
}

function updateChart() {
	var variable1 = document.getElementById('variable1').value;
	var variable2 = document.getElementById('variable2').value;
	var variable3 = document.getElementById('variable3').value;
	myChart.config.data.datasets[0].data = series[variable1];
	myChart.config.data.datasets[1].data = series[variable2];
	myChart.config.data.datasets[2].data = series[variable3];	
	myChart.config.data.datasets[0].label = variable1;	
	myChart.config.data.datasets[1].label = variable2;	
	myChart.config.data.datasets[2].label = variable3;	
	myChart.update();
}

function loadColors() {
    window.chartColors = {
        black: 'rgba(128, 128, 128, 1)',
        white: 'rgba(255, 255, 255, 1)',
        red: 'rgba(255, 128, 128, 1)',
        lime: 'rgba(128, 255, 128, 1)',
        blue: 'rgba(128, 128, 255, 1)',
        yellow: 'rgba(255, 255, 128, 1)',
        cyan: 'rgba(128, 255, 255, 1)',
        magenta: 'rgba(255, 128, 255, 1)',
		iact_yellow: 'rgb(222, 176, 16)',
		iact_slate: 'rgb(104, 136, 159)',
		iact_dark: 'rgb(89, 89, 90)',
		iact_blue: 'rgb(7, 75, 123)'
    };
}

function drawChart(variable1, variable2, variable3, labels, series1, series2, series3, chart_type, container, chart, title) {
	document.getElementById(container).innerHTML = '<canvas id="' + chart + '" style="height:460px;"></canvas>';
	loadColors();
    var chartdata = {
        labels: labels,
        datasets: [{
            label: variable1,
			fill: false, 
            backgroundColor: window.chartColors.iact_yellow,
            borderColor: window.chartColors.iact_yellow,
            data: series1,
            borderWidth: 2,
            yAxisID: 'y1'
        }]
    };

	if (series2) {
		chartdata.datasets.push(
			{
				label: variable2,
				fill: false, 
				backgroundColor: window.chartColors.iact_slate,
				borderColor: window.chartColors.iact_slate,
				data: series2,
				borderWidth: 2,
				yAxisID: 'y1'
			}
		);
	}
	
	if (series3) {
		chartdata.datasets.push(
			{
				label: variable3,
				fill: false, 
				backgroundColor: window.chartColors.iact_blue,
				borderColor: window.chartColors.iact_blue,
				data: series3,
				borderWidth: 2,
				yAxisID: 'y1'
			}
		);
	}
	
    var ctx = document.getElementById(chart).getContext('2d');
    myChart = new Chart(ctx, {
        type: chart_type,
        data: chartdata,
        options: {
			tooltips: {
				intersect: false, 
				mode: 'x'
			},
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    type: 'linear',
                    display: true,
                    position: 'left',
                    id: 'y1',
                    scaleLabel: {display: true, labelString: 'Search Relevance'},
                    ticks: {beginAtZero: false}
                }], 
				xAxes: [{
					display: true, 
					id: 'x1'
				}]
            },
            legend: {
                position: 'bottom',
                labels: {fontFamily: 'Roboto Light'}
            },
            title: {
                display: false,
                fontFamily: 'Roboto Light',
                fontSize: 14,
                text: title
            }
		}
	});
	
	myChart.options.annotation = {
		annotations: [{
			type: 'line', 
			id: 'vLine', 
			mode: 'vertical', 
			scaleID: 'x1', 
			value: '2020-03-15', 
			borderWidth: 2, 
			borderColor: window.chartColors.iact_dark, 
			label: {
				content: 'ECQ', 
				enabled: true, 
				position: 'top'
			}
		}]			
	};
	myChart.update();

}

renderTrend();