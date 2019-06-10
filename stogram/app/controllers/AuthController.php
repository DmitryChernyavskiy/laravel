<?php

class AuthController extends BaseController
{
	public function showSignupForm()
	{
		return View::make('auth.signup');
	}

	public function postSignupForm()
	{
		$data = Input::all();
		$validator = Validator::make($data, array(
			'name' => 'required|min:3|max:64',
			'email' => 'required|email|max:64|unique:users',
			'password' => 'required|min:5|confirmed'));
		if($validator->fails())
		{
			return Redirect::action('AuthController@showSignupForm')->withErrors($validator);
		}
		$user = new User;
		$user->name = $data['name'];
		$user->email = $data['email'];
		$user->password = Hash::make($data['password']);
		$user->save();
		return Redirect::action('AuthController@showLoginForm');	
	}

	public function showLoginForm()
	{
		return View::make('auth.login');
	}

	public function postLoginForm()
	{
		if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
			return Redirect::to('/');
		}	

		return Redirect::action('AuthController@showLoginForm');
	}

	public function logout()
	{
		if(Auth::check())
		{
			Auth::logout();
		}
		return Redirect::action('HomeController@showIndex');
	}
}
