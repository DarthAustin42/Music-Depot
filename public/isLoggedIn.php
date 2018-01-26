<?php
	session_start();

	if(isset($_SESSION["username"])) {
    	return $_SESSION["username"];
    } else {
    	return "Login/Sign Up";
    }
?>