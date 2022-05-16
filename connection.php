<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "database";
	$username = "gypsy";
	$password = "admin";

	$conn = new PDO(
		"mysql:host=$servername; dbname=database",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
