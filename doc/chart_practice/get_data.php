<?php

function extractFile($filename) {
	$file = fopen($filename, "r");
	while (!feof($file)) {
		$result[] = (fgetcsv($file));
	}
	array_pop($result);
	return json_encode($result);
	fclose($file);
}

echo extractFile('sample_data.csv');
