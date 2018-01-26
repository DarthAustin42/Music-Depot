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
$servername = 'localhost';
$username = 'anielsen';
$password = 'VikingS42';
$dbname = 'testDB';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$router->get('/', function () use ($router) {
	$sql = "SELECT * FROM testTable";
	//$results = $conn->query($sql);
    echo("hi THERE");
    include('index.html');
    return ;
});
