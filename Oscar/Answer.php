
<html>

<head>

</head>

<body>

<?php

	$name = $_GET['name'];
	$age = $_GET['age'];
	$food = $_GET['food'];
	
	if ($age > 50) {
		$age_answer = 'You\'re old!';
	} else {
		$age_answer = 'No comment.';
	}
	
	switch ($food) {
		
		case "Adobo" :
			$food_answer = "Yummy!";
			break;
		
		case "asado" ;
			$food_answer = "Why not adobo?";
			break;
			
		default:
			$food_answer = "Anything but adobo.";
			break;
	}
	
	echo '<p>Your name is: ' . $name . '</P>' ;
	echo '<p>Your age is : ' . $age . '</p>' ;
	echo '<p>' . $age_answer . '</p>';
	echo '<p>Your favorite food is: ' . $food . '</p>';
	echo '<p>' . $food_answer . '</p>';



?>

	
</body>

</html>