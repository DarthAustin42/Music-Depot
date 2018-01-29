<?php
	
	session_start();
	$USERNAME = $_POST["newUsername"];
	$PASSWORD = $_POST["newPassword"];
	$PASSWORD2 = $_POST["newPassword2"];


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
			if($row['username'] === $USERNAME) {
				$foundUser = true;
				// echo "Hello there, " . $_SESSION['username'];
				break;
			}
		}
		if(!$foundUser) {
			if($PASSWORD === $PASSWORD2) {
				$sql = "INSERT INTO users VALUES ('$USERNAME', '$PASSWORD')";
				mysqli_query($conn, $sql);
				$_POST['username'] = $USERNAME;
				$_POST['password'] = $PASSWORD;
				include 'loginUser.php';
			}
			else {
				header("LOCATION: /");
			}
		}
		else {
			header("LOCATION: /");
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