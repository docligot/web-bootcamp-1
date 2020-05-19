<?php

function showChart() {
?>
<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10 w3-padding">
		<div class="w3-xlarge">Charts</div>
		<div class="w3-row w3-padding">
			<select id="variable1" class="w3-select w3-third" onchange="extractSankey();">
				<option value="">Select Variable:</option>
				<option value="Region">Region</option>
				<option value="Payment">Payment</option>
				<option value="Source">Source</option>
				<option value="Product">Product</option>
			</select>
			<select id="variable2" class="w3-select w3-third" onchange="extractSankey();">
				<option value="">Select Variable:</option>
				<option value="Region">Region</option>
				<option value="Payment">Payment</option>
				<option value="Source">Source</option>
				<option value="Product">Product</option>
			</select>
			<select id="variable3" class="w3-select w3-third" onchange="extractSankey();">
				<option value="">Select Variable:</option>
				<option value="Region">Region</option>
				<option value="Payment">Payment</option>
				<option value="Source">Source</option>
				<option value="Product">Product</option>
			</select>
		</div>
		<br/>
		<div class="w3-border">
			<div id="sankeyContainer" class="w3-padding"></div>
			<div class="w3-small w3-border-top w3-padding">&nbsp;</div>
		</div>
		
		<div id="sankeyTable" class="w3-padding"></div>
	</div>
</div>

<script src="sankey/highcharts.js"></script>
<script src="sankey/sankey.js"></script>
<script src="sankey/renderSankey.js"></script>


<?php
}