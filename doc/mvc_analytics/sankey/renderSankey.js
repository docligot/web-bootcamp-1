function extractSankey() {
	var variable1 = document.getElementById('variable1').value;
	var variable2 = document.getElementById('variable2').value;
	var variable3 = document.getElementById('variable3').value;
	
	if (variable1 && variable2 && variable3) {
		if (variable1 != variable2 && variable1 != variable3 && variable2 != variable3) {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					var dataArray = JSON.parse(this.responseText);
					console.log(dataArray);
					var journey = [];
					for (i = 0; i < dataArray[0].length; i++) {
						journey.push(dataArray[0][i]);
					}
					var tableString = '<table class="w3-table w3-bordered w3-striped">';
					tableString += '<tr><th>'+variable1+'</th><th>'+variable2+'</th><th>'+variable3+'</th><th>Amount</th></tr>';
					for (i = 0; i < dataArray[1].length; i++) {
						tableString += '<tr><td>'+dataArray[1][i][0]+'</td><td>'+dataArray[1][i][1]+'</td><td>'+dataArray[1][i][2]+'</td><td>'+dataArray[1][i][3]+'</td></tr>';
					}
					tableString += '</table>';
					renderSankey(journey);
					document.getElementById('sankeyTable').innerHTML = tableString;
				} else {
					document.getElementById('sankeyContainer').innerHTML = '<div id="sankey-container"><div class="w3-center" style="padding-top: 150px;"><div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div></div>';
				}
			};
		xmlhttp.open("GET", "sankey/extractSankey.py?variable1=" + variable1 + "&variable2=" + variable2 + "&variable3=" + variable3, true);
		xmlhttp.send();
		} else {
			document.getElementById('sankeyContainer').innerHTML = '<div id="sankey-container"></div>';
			document.getElementById('sankeyTable').innerHTML = '<div>Please select three different variables.</div>';
		}
	}
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
			name: 'Transaction Flow'
		}]
	});
}
renderSankey();