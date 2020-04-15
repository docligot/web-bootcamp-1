<?php

sleep(3);


$requested_food = $_GET['food'];

// This is an array of text you want to appear as food choices

$food_facts['strawberries'] = "One cup of sliced, fresh strawberries, or 166 g, contains a range of important nutrients in the following amounts:
Calories: 53 kcal.
Protein: 1.11 g.
Carbohydrates: 12.75 g.
Dietary fiber: 3.30 g.
Calcium: 27 mg.
Iron: 0.68 mg.
Magnesium: 22 mg.
Phosphorus: 40 mg.";


$food_facts['orange'] = "One medium-sized orange has:
60 calories.
No fat or sodium.
3 grams of fiber.
12 grams of sugar.
1 gram of protein.
14 micrograms of vitamin A.
70 milligrams of vitamin C.
6% of daily recommended amount of calcium.";


$food_facts['grapes'] = "One cup (151 grams) of red or green grapes contains the following nutrients (1):
1. Packed With Nutrients, Especially Vitamins C and K
Calories: 104.
Carbs: 27.3 grams.
Protein: 1.1 grams.
Fat: 0.2 grams.
Fiber: 1.4 grams.
Vitamin C: 27% of the Reference Daily Intake (RDI)
Vitamin K: 28% of the RDI.
Thiamine: 7% of the RDI.";

$result = $food_facts[$requested_food];

echo $result;