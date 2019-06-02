<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
	public function create()
	{
		return view('users.create');
	}    

	public function show(User $user)
	{
		// var_dump(compact('user'));exit;
		// var_dump($user::gravatar());exit();
	    return view('users.show', compact('user'));
	}

}
