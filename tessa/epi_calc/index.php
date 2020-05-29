<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="script" href="slider.js" />
  <link rel="stylesheet" href="w3.css" />
  <link rel="stylesheet" href="slider.css" />
</head>
<div class="w3-padding-32">
<div class="w3-col l3" style="padding-left:15px">
  <div class="slidecontainer">
    Population
    <span id="rs-bullet" class="rs-label">100,000</span>
    <input type="range" min="100" max="1000000" value="100000" class="slider" id="population">
  </div>
  <div class="slidecontainer">
    Initial Infection
    <span id="rs-bullet" class="rs-label">10</span>
    <input type="range" min="1" max="1000" value="10" class="slider" id="infected">
  </div>
  <div class="box-minmax">
    <span>100</span><span>1,000,000</span>
  </div>
  <div><button id="hideSales">Click me</div>



</div>
<div id="curve_chart" class="w3-col l9 w3-padding"></div>
</div>

<script>
var rangeSlider = document.getElementById("population");
var rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function showSliderValue() {
  rangeBullet.innerHTML = numberWithCommas(rangeSlider.value);
  var bulletPosition = (rangeSlider.value /rangeSlider.max);
  rangeBullet.style.left = (bulletPosition * 200) + "px";
}

</script>

<script>
google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawTrendlines);



function drawTrendlines() {
      var data = new google.visualization.DataTable();

      // Initial Values
      var s0 = 100000;
      var i0 = 5;
      var beta =  0.1890;
      var gamma =  0.0700;
      var mu = 0;
      var s = [];
      var i = [];
      var s_pl;
      var i_pl;
      var final_si = [];

      function sUpdate(s0, i0, beta, gamma) {
        s=[];
        i=[];
        final_si = [];
        s.push(s0-i0);
        i.push(i0);
        for (var n=1; n<250; n++) {
        	s_pl = s[n-1] - ((s[n-1]/s[0])*(beta*i[n-1]));
          s.push(s_pl);
          i_pl = i[n-1] + (s[n-1] / s[0]) * (beta * i[n-1]) - (i[n-1] * gamma) - (i[n-1] * mu);
          i.push(i_pl);
        }
        final_si[0] = s;
        final_si[1] = i;
        return final_si;
      }

      sUpdate(s0, i0, beta, gamma);

      data.addColumn('number', 'X');
      data.addColumn('number', 'Susceptible');
      data.addColumn('number', 'Infected');

      for (var z=0; z < 200; z++) {
      	data.addRow([z, final_si[0][z], final_si[1][z]]);
      }


    	var options = {
          title: 'Epi Curve: SIR',
          curveType: 'function',
          legend: { position: 'bottom' },
          height: 500
        };
      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);



   var resetSome = document.getElementById("population");
   resetSome.onchange = function ()
   {
     var data2 = new google.visualization.DataTable();

     s0 = resetSome.value;
     i0 = 5;
     beta =  0.1890;
     gamma =  0.0700;
     mu = 0;

     sUpdate(s0, i0, beta, gamma);

     data2.addColumn('number', 'X');
     data2.addColumn('number', 'Susceptible');
     data2.addColumn('number', 'Infected');

     for (var z=0; z < 200; z++) {
       data2.addRow([z, final_si[0][z], final_si[1][z]]);
     }

     chart.draw(data2, options);
   }


    }

function deleteThis() {
  chart.clearChart();
}

</script>





</html>
