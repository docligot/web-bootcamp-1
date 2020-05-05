<?php

$username = 'postgres';
$password = 'password';
$dbname = 'postgres';
$host = '192.168.1.122'; // 152.32.82.152
$port = '5432'; // 5444
$schema = 'doc';
$dbc = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password);