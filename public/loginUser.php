<?php
	
	session_start();
	$USERNAME = $_POST["username"];
	$PASSWORD = $_POST["password"];

	$sql = "SELECT * FROM users";
	if ($result = app('db')->select($sql)) {
		$foundUser = false;
		while($result as $row) {
			$theUs = $row->username;
			$thePass = $row->password;
			echo $theUs . "  ::  " . $thePass;
			if($theUs === $USERNAME && $thePass === $PASSWORD) {
				$_SESSION["username"] = $_POST["username"];
				header("LOCATION: /");
				// echo "Hello there, " . $_SESSION['username'];
				// $foundUser = true;
				break;
			}
		}
		if(!$foundUser) {
			echo "There is no user with that information";
		}
		else {
			"hi";
		}

		//echo $allUsers;
		//$_SESSION['username'] = $_POST["username"];
		//header("LOCATION: /index.php");
	} else {
	    echo "ERROR: Could not able to execute $sql. ";
	}

	return;
?>