<?PHP

$file = fopen('scores.csv', "r");
while (!feof($file)) {
	$result[] = fgetcsv($file);
	
}
array_pop($result);
rsort($result);
echo json_encode($result);
fclose($file);