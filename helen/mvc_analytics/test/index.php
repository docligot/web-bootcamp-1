<html>
<head>
	<title>Mindanao Food Highway</title>
	<link rel="stylesheet" href="../resources/css/all.css"/>
	<link rel="stylesheet" href="../resources/w3.css" />
	<link rel="stylesheet" href="../resources/app_css.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
</head>

<body class="roboto">

	<?php include ('topbar.php'); ?>
		<nav>
		<div class="spacer">&nbsp;</div>
		<div class="w3-sidebar w3-col l2 w3-bar-block w3-dark-gray w3-hide-small w3-hide-medium w3-large">
			<?php include ('menu.php'); ?>
		</div>
		<div id="sideBar" class="w3-center w3-sidebar w3-xxlarge w3-animate-left w3-hide w3-col l2 w3-bar-block w3-dark-gray">
			<?php include ('menu.php'); ?>
		</div>
	</nav>


	<?php 
	include ('home.php');
	include ('mapsample.php');
	include ('linesample.php');


	if (isset($_GET["page"])) {
		$page = $_GET['page'];
		switch ($page) {
			case 'map':
				showMap();
				break;
			case 'chart':
				showChart();
				break;
			default:
				showHome();
				break;
		}
	} else {
		showHome();
	}
	?>
	?>

</body>

</html>