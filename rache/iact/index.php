<!DOCTYPE HTML>

<html>

<head>
	<title>I-ACT Insights</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style> 
	.w3-roboto-head{
		font-family: 'Roboto Condensed', sans-serif;
		font-weight:700;
	}
	.w3-roboto-body{
		font-family: 'Roboto Condensed', sans-serif;
		font-weight:400;
		font-size:large;
	}
	</style>
</head>

<body>
	<header class="w3-top w3-highway-blue w3-xxlarge w3-container w3-roboto-head"> I-ACT COVID INSIGHTS</header>
	<div style="height: 54px;"></div>
	<div class="w3-row">
			<?php include ('nav.php'); ?>
		<div class="w3-col l2">&nbsp;</div>
		<div class="w3-col l10">
			<div class="w3-row">
			<?php
			
			if ($_GET) {
				$page = $_GET['page'];

				switch ($page) {
					case "home" :
						include ('home.php');
						break;
					case "predictions" :
						include ('predictions.php');
						break;
					// case "table" :
					// 	include ('table.php');
					// 	break;
					// case "word" :
					// 	include ('word_network.php');
					// 	break;
					default :
						include ('home.php');
						break;
				}
			}
			
			?>
						
	
			</div>

			<footer class="w3-bottom w3-highway-blue w3-padding">© 2020 CirroLytix Research Services</footer>
		</div>
	</div>
</body>
</html>