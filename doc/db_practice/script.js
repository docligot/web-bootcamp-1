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
                /*				
                for (var i in dataArray) {
                	labels.push(dataArray[i].period);
                	dataString1.push(dataArray[i][series1]);
                	dataString2.push(dataArray[i][series2]);
                }*/
                dataArray.filter(function(source) {labels.push(source.period)});
                dataArray.filter(function(source) {dataString1.push(source[series1])});
                dataArray.filter(function(source) {dataString2.push(source[series2])});
                console.log(labels);
                console.log(dataString1);
                console.log(dataString2);
                createTable(series1, series2, labels, dataString1, dataString2);
                drawChart(series1, series2, labels, dataString1, dataString2, 'line')
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
        ltblack: 'rgba(128, 128, 128, 0.2)',
        ltwhite: 'rgba(255, 255, 255, 0.2)',
        ltred: 'rgba(255, 128, 128, 0.2)',
        ltlime: 'rgba(128, 255, 128, 0.2)',
        ltblue: 'rgba(128, 128, 255, 0.2)',
        ltyellow: 'rgba(255, 255, 128, 0.2)',
        ltcyan: 'rgba(128, 255, 255, 0.2)',
        ltmagenta: 'rgba(255, 128, 255, 0.2)'
    };
}

function drawChart(series1, series2, labels, dataString1, dataString2, chart_type) {

    document.getElementById('chart-container').innerHTML = '<canvas id="myChart" style="height:250px;"></canvas>';

    var name = JSON.parse('[' + labels + ']');
    var data1 = JSON.parse('[' + dataString1 + ']');
    var data2 = JSON.parse('[' + dataString2 + ']');

    loadColors();

    var chartdata = {
        labels: name,
        datasets: [{
            label: series1,
            backgroundColor: window.chartColors.ltblue,
            borderColor: window.chartColors.blue,
            data: data1,
            borderWidth: 2,
            yAxisID: 'y1'
        }, {
            label: series2,
            backgroundColor: window.chartColors.ltred,
            borderColor: window.chartColors.red,
            data: data2,
            borderWidth: 2,
            yAxisID: 'y2'
        }]
    };
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: chart_type,
        data: chartdata,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    type: 'linear',
                    display: true,
                    position: 'left',
                    id: 'y1',
                    scaleLabel: {display: true, labelString: series1},
                    ticks: {beginAtZero: true}
                }, {
                    type: 'linear',
                    display: true,
                    position: 'right',
                    id: 'y2',
                    scaleLabel: {display: true, labelString: series2},
                    ticks: {beginAtZero: true},
                    gridLines: {display: false}
                }]
            },
            legend: {
                position: 'bottom',
                labels: {fontFamily: 'Roboto Light'}
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