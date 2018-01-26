<?php
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

	echo $_POST['username'];
	echo $_POST['password'];
	// Create database
	// $sql = "INSERT INTO users VALUES ($_POST['username'], $_POST['password'])";
	// if ($conn->query($sql) === TRUE) {
	// 	echo "New record created successfully";
	// } else {
	//     echo "Error creating database2: " . $conn->error;
	// }

	$conn->close();
?>