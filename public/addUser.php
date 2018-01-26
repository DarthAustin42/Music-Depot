<?php
	
	session_start();
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
	$sql = "SELECT * FROM users";
	if ($allUsers = mysqli_query($conn, $sql)) {
		$foundUser = false;
		while($row = mysqli_fetch_array($allUsers)) {
			if($row['username'] === $USERNAME && $row['password'] === $PASSWORD) {
				$_SESSION['username'] = $_POST["username"];
				header("LOCATION: /");
				// echo "Hello there, " . $_SESSION['username'];
				// $foundUser = true;
				break;
			}
		}
		if(!$foundUser) {
			echo "There is no user with that information";
		}

		mysqli_free_result($allUsers);
		//echo $allUsers;
		//$_SESSION['username'] = $_POST["username"];
		//header("LOCATION: /index.php");
	} else {
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}

	mysqli_close($conn);
	return;
?>