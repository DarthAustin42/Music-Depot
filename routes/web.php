<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
	$servername = "localhost";
	$username = "anielsen";
	$password = "VikingS42";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	// Create database
	$sql = "USE testDB;";
	if ($conn->query($sql) === TRUE) {
		$sql = "SELECT * FROM testTable";
		if($conn->query($sql) === TRUE) {
		    echo $conn->query($sql);
		}
		else {
			echo "Error creating database1: " . $conn->error;
		}
	} else {
	    echo "Error creating database2: " . $conn->error;
	}

	$conn->close();
	
    include('index.html');
    return ;
});
