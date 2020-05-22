<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="w3.css" />
  <link rel="stylesheet" href="slider.css" />
</head>
<div class="w3-padding-32">
<div class="w3-col l3" style="padding-left:50px">
  <h3>Parameters</h3>
  <div class="range-slider">
    <div class="w3-block" style="margin-bottom:8px">
      Population:
      <input type="number" class="range-value w3-border-0" value="100000" readonly/>
    </div>
      <input id="population" class="input-range slider" type="range" value="100000" min="100" max="1000000" onchange="graphUpdate()">
      <div class="w3-row">
        <div class="w3-half w3-left-align">100</div>
        <div class="w3-half w3-right-align">1,000,000</div>
      </div>
  </div>

  <div class="range-slider w3-section">
    <div class="w3-block" style="margin-bottom:8px">
      Initial Infected
      <input type="text" class="range-value w3-border-0" value="5" readonly/>
    </div>
    <input id="ini_infected" class="input-range slider" type="range" value="5" min="1" max="500" onchange="graphUpdate()">
    <div class="w3-row">
      <div class="w3-half w3-left-align">1</div>
      <div class="w3-half w3-right-align">500</div>
    </div>
  </div>

  <div class="range-slider w3-section">
    <div class="w3-block" style="margin-bottom:8px">
      Beta (Infection/day)
      <input type="number" class="range-value w3-border-0" value= "0.1890" readonly/>
    </div>
    <input id="beta" class="input-range slider" type="range" value= "0.1890" min="0.1" max="2" step="0.001" onchange="graphUpdate()">
    <div class="w3-row">
      <div class="w3-half w3-left-align">0.1</div>
      <div class="w3-half w3-right-align">2.0</div>
    </div>
  </div>

  <div class="range-slider w3-section">
    <div class="w3-block" style="margin-bottom:8px">
      Gamma (Recovery/day)
    <input type="number" class="range-value w3-border-0" value="0.0700" readonly/>
  </div>
    <input id="gamma" class="input-range slider" type="range" value="0.0700" min="0" max="0.15" step="0.001" onchange="graphUpdate()">
    <div class="w3-row">
      <div class="w3-half w3-left-align">0.00</div>
      <div class="w3-half w3-right-align">0.15</div>
    </div>
  </div>

</div>
<div id="curve_chart" class="w3-col l9 w3-padding"></div>
</div>



<script>


function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

range = $('.range-slider > .input-range');
value = $('.range-slider > .range-value');

//value.val(range.attr('value'));

range.on('input', function(){
  	//monparent=$(this).parent();
  monparent=this.parentNode;

  value=$(monparent).find('.range-value');
    $(value).val(this.value);
});

value.on('input', function(){
    monparent=this.parentNode;
  	range=$(monparent).find('.input-range');
    $(range).val(this.value);

});





</script>

<script>
google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawTrendlines);

function sUpdate(s0, i0, beta, gamma, mu=0) {
  var s = [];
  var i = [];
  var s_pl;
  var i_pl;
  var final_si = [];
  var mu = 0;
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

function updateData(data, final_si) {
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'X');
  data.addColumn('number', 'Susceptible');
  data.addColumn('number', 'Infected');

  for (var z=0; z < 200; z++) {
    data.addRow([z, final_si[0][z], final_si[1][z]]);
  }
  return data;
}


function drawTrendlines() {
      // Initial Values
      var s0 = 100000;
      var i0 = 5;
      var beta =  0.1890;
      var gamma =  0.0700;
      var mu = 0;
      var final_si = sUpdate(s0, i0, beta, gamma, mu);
      var data = updateData(data,final_si);
    	var options = {
          title: 'Epi Curve: SIR',
          curveType: 'function',
          legend: { position: 'bottom' },
          height: 500
        };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);

      var sam = document.getElementById('ini_infected');
      var resetSome = document.getElementById('population');
    }
    function graphUpdate() {
      var s0 = document.getElementById('population').value;
      var i0 = +document.getElementById('ini_infected').value;
      var beta = +document.getElementById('beta').value;
      var gamma = +document.getElementById('gamma').value;
      mu = 0;

      final_si = sUpdate(s0, i0, beta, gamma, mu);
      console.log(final_si[0]);
      var data2 = updateData(data2, final_si);
      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
      var options = {
          title: 'Epi Curve: SIR',
          curveType: 'function',
          legend: { position: 'bottom' },
          height: 500
        };
      chart.draw(data2, options);
    }

</script>





</html>
