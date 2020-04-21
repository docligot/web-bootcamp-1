<?php

$username = 'postgres';
$password = 'password';
$dbname = 'postgres';
$host = '152.32.82.152';
$port = '5444';
$schema = 'oscar';
$dbc = pg_connect('host=' . $host . ' port=' . $port . ' dbname=' . $dbname . ' user=' . $username . ' password=' . $password);

