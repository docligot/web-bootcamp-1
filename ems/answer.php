<html>

<head>
	<title>This is a practice website.</title>

</head>

<body>

<?php
	$name = $_GET['name'];
	$age = $_GET['age'];
	$food = $_GET['food'];
	
	echo '<p>Your name is: '.$name.'</p>';
	echo '<p>Your age is: '.$age.'</p>';
	echo '<p>Your favorite food is: '.$food.'</p>';
?>

</body>
</html>