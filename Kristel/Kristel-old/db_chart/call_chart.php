<?php

$series4 = $_GET['series4'];
$series5 = $_GET['series5'];
$series6 = $_GET['series6'];

$username = 'postgres';
$password = 'password';
$dbname ='postgres';
$host = '152.32.82.152';
$port = '5444';
$schema = 'kristel';

$dbc = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password);

$query = 'SELECT * FROM kristel.full_data_view';

$result = pg_query($dbc, $query);

if ($result) {

	while ($row = pg_fetch_array($result)){
		$result_string[] = $row;
	}
	echo json_encode($result_string);

} else {
	echo '';
}



