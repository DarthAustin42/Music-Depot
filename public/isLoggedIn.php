<?php
	session_start();

	echo "hi, " . $_SESSION["username"];
	// if(isset($_SESSION["username"])) {
 //    	return $_SESSION["username"];
 //    } else {
 //    	return "Login/Sign Up";
 //    }
?>