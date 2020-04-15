<?php

sleep(3);

$requested_food = $_GET['food'];

$food_facts['hamburger'] = "There are 250 calories in a Hamburger from McDonald's.";

$food_facts['cheeseburger']= "There are 300 calories in a Cheeseburger from McDonald's.";

$food_facts['mcchicken']= "There are 410 calories in a McChicken.";

$food_facts['big-mac'] = "There are 540 calories in a Big Mac.";

$result = $food_facts[$requested_food];

echo $result;
