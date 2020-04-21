<?php

$username = 'postgres';
$password = 'password';
$host = '152.32.82.152';
$port = '5444';
$dbname= 'postgres';
$schema = 'helen';
$dbc = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password);

