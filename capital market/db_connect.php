<?php


$servername = "110.4.45.234";
$server_username = "jamesbon_bong";
$server_password = "Freedomsky@717";
$dbname = "jamesbon_conference";

	// Create connection
$conn = new mysqli($servername, $server_username, $server_password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	

?>