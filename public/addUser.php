<?php
	$app = require __DIR__.'/../bootstrap/app.php';
	$app->post('addUser', function (Illuminate\Http\Request $request) {
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
			echo "New record created successfully";
		} else {
		    echo "Error creating database2: " . $conn->error;
		}

		$conn->close();
		return;
	})
?>