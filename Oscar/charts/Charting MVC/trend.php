<?php

function showTrend() {
?>
<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10">
		<h2 class="w3-xlarge w3-padding din-bold">Keyword Trends</h2>
		
		<div class="w3-row">
			<div class="w3-col l3 w3-padding">
				<select id="variable1" class="w3-select" onchange="updateChart();">
				</select>
				<select id="variable2"  class="w3-select" onchange="updateChart();">
				</select>
				<select id="variable3" class="w3-select" onchange="updateChart();">
				</select>
				<hr/>
				<div class="w3-small"><p>Select up to three (3) keywords to measure their relevance over time.</p>
				<p>This chart tracks weekly search relevance for selected key words from January 2020 up to the present date and will include key dates relevant to the pandemic beginning with the imposition of Enhanced Community Quarantine (ECQ). The relative search volumes are normalized for comparison. Comparison of search relevance trends along key dates can indicate a change in public conversation and sentiment during the crisis and can also serve as a metric for communications effectiveness as messages are pushed out by the I-ACT initiative.</p>
				</div>
			</div>
			<div class="w3-col l9 w3-padding">
				<div id='chartContainer'><div class="w3-light-grey" style="height: 460px;"></div></div>
			</div>
		</div>
		<br/><br/>
		<?php include('footer.php') ?>
	</div>
</div>

<script src="chart_iact/chart.bundle.js"></script>
<script src="chart_iact/chartjs-plugin-annotation.js"></script>
<script src="chart_iact/renderTrend.js"></script>

<?php
}