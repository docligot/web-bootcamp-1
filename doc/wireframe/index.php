<!DOCTYPE HTML>

<html>

<head>
	<title>W3 CSS Practice</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
	<header class="w3-top w3-blue w3-xlarge w3-padding">Top Bar</header>
	<div style="height: 52px;"></div>
	<div class="w3-row">
		<?php include ('nav.php'); ?>
		<div class="w3-col l2">&nbsp;</div>
		<div class="w3-col l10">
			<div class="w3-row">
			<?php
			
			if ($_GET) {
				$page = $_GET['page'];

				switch ($page) {
					case "map" :
						include ('map.php');
						break;
					case "sir" :
						include ('sir_chart.php');
						break;
					case "table" :
						include ('table.php');
						break;
					case "word" :
						include ('word_network.php');
						break;
					default :
						include ('map.php');
						break;
				}
			}
			
			?>
			</div>
			<footer class="w3-bottom w3-black w3-padding">Footer</footer>
		</div>
	</div>
</body>
</html>