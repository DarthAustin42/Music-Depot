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
	$sql = "SELECT * FROM users";
	if ($allUsers = mysqli_query($conn, $sql)) {
		echo "<table>";
			echo "<tr>";
				echo "<th>id</th>";
				echo "<th>username</th>";
				echo "<th>password</th>";
			echo "</tr>";
		while($row = mysqli_fetch_array($allUsers)) {
			echo "<tr>";
				echo "<td>" . $row['username'] . "</td>";
				echo "<td>" . $row['password'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";

		mysqli_free_result($allUsers);
		//echo $allUsers;
		//$_SESSION['username'] = $_POST["username"];
		echo "Hello, " . $_POST["username"];
		//header("LOCATION: /index.php");
	} else {
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}

	mysqli_close($conn);
	return;
?>