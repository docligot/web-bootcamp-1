<?php

$file = fopen('../data/transaction.csv', "r");
while (! feof($file)) {
	$result[] = (fgetcsv($file));
}
fclose($file);
echo json_encode($result);