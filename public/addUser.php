<?php
	
	$USERNAME = $_POST["username"];
	$PASSWORD = $_POST["password"];


	$servername = "localhost";
	$username = "anielsen";
	$password = "VikingS42";
	$dbname = 'testDB';
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	// Create database
	$sql = "INSERT INTO users VALUES ('$USERNAME', '$PASSWORD')";
	if ($conn->query($sql) === TRUE) {
		header("LOCATION: /index.php");
	} else {
	    echo "Error creating database2: " . $conn->error;
	}

	$conn->close();
	return;
?>