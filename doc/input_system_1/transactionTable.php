<?php
$series1 = $_GET["series1"];
$series2 = $_GET["series2"];
include ('dbconnect.php');
$query = "SELECT * FROM doc.";
$result = pg_query($dbc, $query); 
if ($result) {
	while ($row = pg_fetch_array($result)) {
		$result_string[] = $row;
	}
	echo json_encode($result_string);	
} else {
	echo 'There was an error.';
}
pg_close($dbc);
exit();