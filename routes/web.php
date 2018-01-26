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
	session_start();
	echo $_SESSION["username"];
    include('index.html');
    if(isset($_SESSION["username"])) {
    	echo "Hello, " . $_POST["username"];
    } else {
    	echo "Hi, " . $_SESSION["username"];
    }
    return ;
});