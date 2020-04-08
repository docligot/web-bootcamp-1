<?php
$series1 = $_GET["series1"];
$series2 = $_GET["series2"];
$username = 'postgres';
$password = 'password';
$dbname = 'postgres';
$host = '192.168.1.122';
$port = '5432';
$schema = 'doc';
$dbc = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password); 
$query = "SELECT period, $series1, $series2 FROM doc.full_data_view";
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