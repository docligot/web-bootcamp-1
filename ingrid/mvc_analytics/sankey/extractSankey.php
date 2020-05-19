<?php

$file = fopen('../data/sankey.csv', "r");
while (! feof($file)) {
	$result[] = (fgetcsv($file));
}
fclose($file);
echo json_encode($result);