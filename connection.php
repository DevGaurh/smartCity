<?php
	$dbhost = 'localhost';
    $dbuser = 'dev';
    $dbpass = 'root';
	$dbname = "sctdb";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);    
    if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
?>