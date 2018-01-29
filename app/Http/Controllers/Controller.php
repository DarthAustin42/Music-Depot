<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public function grabUsers() {
    	$result = DB::select("SELECT * FROM users");
		foreach ($result as $user) {
			return $user->username . "<br>";
		}
    }
}
