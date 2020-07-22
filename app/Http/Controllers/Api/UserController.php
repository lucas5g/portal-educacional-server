<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	//
	public function index()
	{
		$users = User::all();

		return $users;
	}

	public function store(Request $request)
	{

		$emailExist = User::where('email', $request->email)->first();

		if($emailExist){
			return response()->json(['error'=>'Email is already registered'], 409);
		}

	
		$user = new User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = $request->password;
		$user->date_birth = $request->date_birth;
		$user->profile = $request->profile;

		$user->save();

		return $user;

	}

	public function show(User $user)
	{
		return $user;
	}

	public function update(Request $request, User $user)
	{

		if (!empty($request->password)) {
			$user->password = $request->password;
		}

		$user->name = $request->name;
		$user->email = $request->email;
		$user->date_birth = $request->date_birth;
		$user->profile = $request->profile;

		$user->save();

		return $user;
	}
}
