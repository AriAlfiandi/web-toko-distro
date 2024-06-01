<?php

// Connection variables
$host = "localhost:3308";
$user = "root";
$pass = "";
$dbs = "ya";

// Connect to MySQLi database
$conn = mysqli_connect($host, $user, $pass, $dbs);

// Check connection
if(mysqli_connect_errno()){
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit;
}

?>