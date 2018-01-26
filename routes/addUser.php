<?php
	$app->post('addUser', function (Illuminate\Http\Request $request) {
		$USERNAME = $request->input('username');
		$PASSWORD = $request->input('password');
		echo $USERNAME . $PASSWORD;
	})
?>