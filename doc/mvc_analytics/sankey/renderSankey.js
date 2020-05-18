function extractSankey() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			var journey = [];
			for (i = 1; i < dataArray.length; i++) {
				var string = [];
				for (j = 1; j < 4; j++) {
					if (j == 3) {
						string.push(Number(dataArray[i][j]));
					} else {
						string.push(dataArray[i][j])
					}					
				}
				journey.push(string);
			}
			console.log(journey);
			var journey1 = [];
			journey1.push(['Referred by Facebook', 'Took a sample', 3]
		,	['Referred by Facebook', 'Filled a survey', 15]
		,	['Referred by Facebook', 'Asked a question', 2]
		,	['Referred by Facebook', 'Took a photo', 20]
		,	['Referred by Facebook', 'Watched Video', 15]);
			console.log(journey1);
			renderSankey(journey);
		} 
	};
	xmlhttp.open("GET", "sankey/extractSankey.php", true);
	xmlhttp.send();
}

function renderSankey(journey) {
	document.getElementById('sankeyContainer').innerHTML = '<div id="sankey-container"></div>';

	Highcharts.chart('sankey-container', {

		title: false, 
		tooltip: {
			backgroundColor: '#FCFFC5',
			borderColor: 'black',
			borderRadius: 10,
			borderWidth: 3
		},
		chart: {
			backgroundColor: '#fff'
		}, 
		series: [{
			keys: ['from', 'to', 'weight'],
			data: journey,
			type: 'sankey',
			name: 'Customer Journey Flow'
		}]
	});
}
renderSankey();