<?php
// This provides the information for accessing the database. 
// It also creates a connection to MySQL, 
// It selects the database, and sets the encoding.
// Set the database access information as constants:
DEFINE ('DB_USER', 'jb102000_chris');
DEFINE ('DB_PASSWORD', 'olyvia1');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'jb102000_leaptrip_bpa');
// Make the connection:
$dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
// Set the encoding...
mysqli_set_charset($dbcon, 'utf8');