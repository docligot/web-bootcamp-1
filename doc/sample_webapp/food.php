<?php

sleep(3);

$requested_food = $_GET['food'];

$food_facts['hamburger'] = "There are 250 calories in a Hamburger from McDonald's. Most of those calories come from carbohydrates (50%).";
$food_facts['cheeseburger'] = "There are 300 calories in a Cheeseburger from McDonald's. Most of those calories come from fat (36%) and carbohydrates (44%).";
$food_facts['mcchicken'] = "There are 410 calories in a McChicken from McDonald's. Most of those calories come from fat (47%) and carbohydrates (38%).";
$food_facts['big-mac'] = "There are 540 calories in a Big Mac from McDonald's. Most of those calories come from fat (47%) and carbohydrates (34%).";

$result = "<p>$food_facts[$requested_food]</p>";

echo $result;