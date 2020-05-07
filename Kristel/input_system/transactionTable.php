<?php


include('dbConnect.php');
$query = 'SELECT * FROM kristel.product_input;';
$result = pg_query($dbc, $query);

if (result) {
	while ($row = pg_fetch_array($result)) {
		$result_string[] = $row;
	}
	echo json_encode($result_string);
} else {
	echo "There was an error.";
}
pg_close($dbc);
exit();