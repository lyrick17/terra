<?php 

DEFINE ('DB_USER', 'root'); // modify this to either 'root' or 'johnlyrick'
DEFINE ('DB_PASSWORD', ''); // modify this to either '' or 'jonson'
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'jonson_act');

$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('Could not connect to MySQLi: '.mysqli_connect_error());

// encoding 
mysqli_set_charset($dbcon, 'utf8');