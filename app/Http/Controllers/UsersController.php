<?php

namespace App\Http\UsersController;

public function list(){
	$users = users::all();
	return view('listusers', ['users'=>$users]);
}
