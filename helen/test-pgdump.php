<?php
    $username = 'postgres';
	$password = 'password';
	$dbname ='postgres';
	$host = '152.32.82.152';
	$port = '5444';
    $connection = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password);
    if($connection) {
        $query = "SELECT * FROM doc.full_data_view";
        $result = pg_query($connection, $query); 
        if ($result) {
            while ($row = pg_fetch_array($result)) {
                $result_string[] = $row;} 
            echo json_encode($result_string);} else 
            {echo 'Query failed';}
    } else {
        echo 'there has been an error connecting';
    } 

?>