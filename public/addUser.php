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
	//$sql = "INSERT INTO users VALUES ('$USERNAME', '$PASSWORD')";
	$sql = 'SELECT * FROM users WHERE username=$_POST["username"] AND password=$_POST["password"];'
	if ($conn->query($sql) === TRUE) {
		$_SESSION['username'] = $_POST["username"];
		echo "Hello, " . $_POST["username"];
		//header("LOCATION: /index.php");
	} else {
	    echo "Error creating database2: " . $conn->error;
	}

	$conn->close();
	return;
?>