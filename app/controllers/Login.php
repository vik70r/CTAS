<?php

class Login extends BaseController{

	public function postUser()
	{
		//get POST data
		$userdata = array(
			'email' => Input::get('email'),
			'password'=> Input::get('pass')
		);
		//$datoAdicional = Input::get("");

		if(Auth::attempt($userdata))
		{
		
			$ird = Auth::user()->getnroId();
			$tipoUsuario = Auth::user()->gettipoUsuario();
			if ($tipoUsuario == "Agencia")
			{			 	
			 	return Redirect::to('agencia/profile/'.$ird);
			 	
			}
			else
			{
			if($tipoUsuario == "Personal")
			{
				return Redirect::to('personal/profile/'.$ird);
			}
			}
			
		}
		else
		{
			return Redirect::to('/')->with('mensaje',"Error Datos incorrectos ingrese nuevamente!!!");									
				//return "Error Datos no Validos.";				
		}


	}

}