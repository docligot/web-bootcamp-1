
function getChartmod(file) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			
			console.log(dataArray);
		} else {

		}
	};
	xmlhttp.open("GET", "extractData.php?file=" + file, true);
	xmlhttp.send();
}

function getChart(file, container, chart, title, type) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var dataArray = JSON.parse(this.responseText);
			var dates = [];
			var data1 = [];
			var data2 = [];
			var data3 = [];
			var series1 = dataArray[0][2];
			var series2 = dataArray[0][3];
			var series3 = dataArray[0][4];
			for (i = Math.max(1, dataArray.length - 55); i < dataArray.length - 1; i++) {
				dates.push(dataArray[i][1]);
				data1.push(Number(dataArray[i][2]).toFixed(3));
				data2.push(Number(dataArray[i][3]).toFixed(3));
				data3.push(Number(dataArray[i][4]).toFixed(3));
			}
			drawChart(series1, series2, series3, dates, data1, data2, data3, type, container, chart, title);
		} else {
			document.getElementById(container).innerHTML = "<div class=\"w3-display-container\" style=\"height: 400px;\"><div class=\"lds-heart w3-display-middle\"><div></div></div></div>";
		}
	};
	xmlhttp.open("GET", "resources/data/extractData.php?file=" + file, true);
	xmlhttp.send();
}
