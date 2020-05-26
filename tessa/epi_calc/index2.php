<html>

<head>
  <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-base.min.js"></script>

  <link rel="stylesheet" href="w3.css" />
  <link rel="stylesheet" href="slider.css" />
</head>
<div class="w3-padding-32">
<div class="w3-col l3" style="padding-left:15px">
  <div class="slidecontainer">
    Population
    <span id="rs-bullet" class="rs-label">100,000</span>
    <input type="range" min="100" max="1000000" value="100000" class="slider" id="population" onchange="deleteSeries();">
  </div>
  <div class="box-minmax">
    <span>100</span><span>1,000,000</span>
  </div>
  <div>
    <button class="btn" onclick="deleteSeries()">Click Me </button>

  </div>



</div>
<div id="curve_chart" class="w3-col l9 w3-padding" style="height: 300px;"></div>
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
anychart.onDocumentReady( function() {


var s0 = 100000;
var i0 = 5;
var beta =  0.1890;
var gamma =  0.0700;
var mu = 0;
var s = [];
var i = [];
s.push(s0-i0);
i.push(i0);
var s_pl;
var i_pl;
console.log('zero');

for (var n=1; n<250; n++) {
  s_pl = s[n-1] - ((s[n-1]/s[0])*(beta*i[n-1]));
  s.push(s_pl);
  i_pl = i[n-1] + (s[n-1] / s[0]) * (beta * i[n-1]) - (i[n-1] * gamma) - (i[n-1] * mu);
  i.push(i_pl);
}
console.log('second');

function array_range(start, len)
{
var arr = new Array(len);
for (var i = 0; i < len; i++, start++)
  {
arr[i] = start;
}
    return arr;
}

var data=[];
for (var z=0; z < 200; z++) {
  data.push([z, s[z]]);
}

console.log(data);

// create a chart
var chart = anychart.line();

// create a spline series and set the data
var series = chart.spline(data);

// set the container id
chart.container("curve_chart");

// initiate drawing the chart
chart.draw();

});

function deleteSeries() {

  chart.removeAllSeries();
  }

</script>


</html>
