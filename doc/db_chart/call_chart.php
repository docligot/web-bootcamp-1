<?php

$series4 = $_GET['series4'];
$series5 = $_GET['series5'];
$series6 = $_GET['series6'];

/*
Host: 152.32.82.152
Port: 5444
*/

$username = 'postgres';
$password = 'password';
$dbname = 'postgres';
$host = '192.168.1.122';
$port = '5432';
$schema = 'doc';

$dbc = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password); 

$query = "SELECT period, $series4, $series5 FROM doc.full_data_view";

$result = pg_query($dbc, $query); 

	$result_string['labels'] = '';
	$result_string[$series4] = '';
	$result_string[$series5] = '';

if ($result) {
	while ($row = pg_fetch_array($result)) {
		$result_string['labels'] .= ','.$row['period'];
		$result_string[$series4] .= ','.$row[$series4];
		$result_string[$series5] .= ','.$row[$series5];
	}
	$result_string['labels'] = ltrim($result_string['labels'], ',');
	$result_string[$series4] = ltrim($result_string[$series4], ',');
	$result_string[$series5] = ltrim($result_string[$series5], ',');	
	
	echo json_encode($result_string);
} else {
	echo '';
}

pg_close($dbc);
exit();


