<?PHP

$new_score = $_POST['new_name'];
$new_name = $_POST['new_score'];
$line = $new_score . ',' . $new_name;
echo $line;
$file = fopen('scores.csv', "a");
fputcsv($file, array($new_name, $new_score));
fclose($file);