<?php


$servername = "110.4.45.234";
$username = "jamesbon_bong";
$password = "Freedomsky@717";
$dbname = "jamesbon_flashbook";

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	
	

?>