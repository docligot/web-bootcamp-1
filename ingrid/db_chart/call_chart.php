<?php

$series4 = $_GET['series4'];
$series5 = $_GET['series5'];
$series6 = $_GET['series6'];

$username = 'postgres';
$password = 'password';
$dbname = 'postgres';
$host = '152.32.82.152';
$port = '5444';
$schema = 'ingrid';

$dbc = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password);

$query = "SELECT period, $series4, $series5 FROM ingrid.full_data_view";

switch ($series6) {
	case "Train" :
		$query .= " WHERE \"set\" = 'Train'";
		break;
	case "Test" :
		$query .= " WHERE \"set\" = 'Test'";
		break;
}

$result = pg_query($dbc, $query);
	
if ($result) {
	while ($row = pg_fetch_array($result)) {
		$result_string[] = $row;
	}	
	
	echo json_encode($result_string);
} else {
	echo '';
}

pg_close($dbc);
exit();
