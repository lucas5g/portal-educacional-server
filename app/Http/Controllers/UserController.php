<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	//
	public function index()
	{
		// $user = new User();
		// $user->name = 'lucas de sousa ';
		// $user->email = 'lucas.assuncao@freicarlosvicuna.com.br';
		// $user->password = Hash::make('123');

		// $user->save();
		$user = User::where('id', '=', 1)->first();
		return view('users/index', [
			'user' => $user,
		]);
	}
}
