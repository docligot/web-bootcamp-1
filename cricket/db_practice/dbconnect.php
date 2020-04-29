<?php
$username = 'postgres';
$password = 'password';
$dbname = 'postgres';
$host = '192.168.1.122';
$port = '5432';
$schema = 'doc';
$dbc = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password); 
