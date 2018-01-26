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
    include('index.html');
    $USERNAME = $request->input('username');
	$PASSWORD = $request->input('password');


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
    return ;
});
