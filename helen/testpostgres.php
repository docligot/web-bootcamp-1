<?php
    $username = 'myuser';
	$password = 'mypass';
	$dbname ='mydb';
	$host = 'localhost';
	$port = '5432';
    $connection = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password);
    if($connection) {
       echo 'connected';
    } else {
        echo 'there has been an error connecting';
    } 
?>

