<?php

function showSankey() {
?>
<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10 w3-padding">This is the sankey page.
		<div class="w3-row">
			<select class="w3-select w3-third">
				<option value="">Select Variable:</option>
				<option value="Region">Region</option>
				<option value="Payment">Payment</option>
				<option value="Source">Source</option>
				<option value="Product">Product</option>
			</select>
			<select class="w3-select w3-third">
				<option value="">Select Variable:</option>
				<option value="Region">Region</option>
				<option value="Payment">Payment</option>
				<option value="Source">Source</option>
				<option value="Product">Product</option>
			</select>
			<select class="w3-select w3-third">
				<option value="">Select Variable:</option>
				<option value="Region">Region</option>
				<option value="Payment">Payment</option>
				<option value="Source">Source</option>
				<option value="Product">Product</option>
			</select>
		</div>
		<div id="sankeyContainer" class="w3-padding"></div>
	</div>
</div>

<script src="sankey/highcharts.js"></script>
<script src="sankey/sankey.js"></script>
<script src="sankey/renderSankey.js"></script>
<script>
	extractSankey();
</script>

<?php
}