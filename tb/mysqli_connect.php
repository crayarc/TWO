<?php
# Script 9.2 - mysqli_connect.php
// contains the database access information.
// establishes a connection to MySQL,
// selects the database, and sets the encoding.

// information as constants:
DEFINE ('DB_USER', 'ama2316_myuser');
DEFINE ('DB_PASSWORD', '~aqW3A{$6.J}');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'ama2316_mydb');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');

?>
