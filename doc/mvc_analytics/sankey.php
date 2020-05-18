<?php

function showSankey() {
?>
<div class="w3-row">
	<div class="w3-col l2">&nbsp;</div>
	<div class="w3-col l10 w3-padding">This is the sankey page.</div>
	<div id="sankeyContainer" class="w3-padding"></div>
</div>

<script src="data/highcharts.js"></script>
<script src="data/sankey.js"></script>
<script src="data/renderSankey.js"></script>

<?php
}