<?php
	session_start();

	if(isset($_SESSION["username"])) {
    	echo "<p>" . $_SESSION["username"] . "</p>";
    } else {
    	echo "<p>Login/Sign Up</p>";
    }
?>