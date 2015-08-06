<?php

class LoginController extends BaseController
{
	
	public function login()
	{
		$email = null;
		if(is_null($email))
		{
			return View::make('login');
		} else {
			$personal = Personal::where('email','=',$email)->first();
			// Activar sessión
			return Redirect::to('personal/profile/'.$personal->codPersonal);
		}
	}
	public function loginInit()
	{

	}
	public function logout()
	{
		// Destruir sessión
		// Redirigir a Login
		return Redirect::to('personal/login.html');
	}

	
}
