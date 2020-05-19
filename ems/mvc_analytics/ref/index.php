<!DOCTYPE HTML>

<html>
<head>
	<title>MVC Viz</title>
	<link rel="stylesheet" href="resources/css/all.css"/>
	<link rel="stylesheet" href="resources/w3.css" />
	<link rel="stylesheet" href="resources/app_css.css" />
</head>

<body>
	<nav>
		<?php include ('topbar.php'); ?>
		<div class="spacer"></div>
		<div class="w3-sidebar w3-col l2 w3-bar-block w3-gray w3-hide-small w3-hide-medium w3-xlarge">
			<?php include ('menu.php'); ?>
		</div>
		<div id="sideBar" class="w3-center w3-sidebar w3-xxlarge w3-animate-left w3-hide w3-col l2 w3-bar-block w3-gray">
			<?php include ('menu.php'); ?>
		</div>
	</nav>



<script src="resources/app_js.js"></script>
</body>
</html>