

<?php

class AgenciaController extends BaseController
{
	
	public function index($registros=5)
	{
		$datos = Agencia::paginate($registros);
		$agencias = Agencia::all();
		return View::make('agencia.index',compact("datos"),array('agencias'=>$agencias));
	}
	public function profile($id = null)
	{
		if (is_null($id) or ! is_numeric($id))
		{
			return Redirect::to('404.html');
		} else {
			$agencia = Agencia::where('id','=',$id)->firstOrFail();
			if (is_object($agencia))
			{
				return View::make('agencia.profile',array('agencia'=>$agencia));
			} else {
				return Redirect::to('404.html');
			}
		}
	}
	public function add()
	{
		return View::make('agencia.add');
	}
	public function insert()
	{
		$respuesta = Agencia::agregar(Input::all());
		if($respuesta['error']==true)
		{
			return Redirect::to('agencia/add.html')->withErrors($respuesta['mensaje'] )->withInput();
		} else {
			return Redirect::to('agencias')->with('mensaje',$respuesta['mensaje']);
		}
	}
	public function edit($id=null)
	{
		if(is_null($id) or ! is_numeric($id))
		{
			return Redirect::to('404.html');
		} else {
			$agencia = Agencia::where('id','=',$id)->firstOrFail();
			return View::make('agencia.edit',array('agencia'=>$agencia));
		}
	}
	public function update($id=null)
	{
		$respuesta = Agencia::editar(Input::all());
		if($respuesta['error']==true)
		{
			return Redirect::to('agencia/edit/'.$id)->withErrors($respuesta['mensaje'] )->withInput();
		}
		else
		{
			if(is_null($id))
			{
				Redirect::to('404.html');
			} else {
				$agencia = Agencia::where('id','=',$id)->firstOrFail();
				if(is_object($agencia))
				{
					
					$agencia->nombre = Input::get('nombre');
					$agencia->ruc = Input::get('ruc');
					$agencia->ciudad = Input::get('ciudad');
					$agencia->direccion = Input::get('direccion');
					$agencia->telefono = Input::get('telefono');
					$agencia->save();
						return Redirect::to('agencia/profile/'.$id);
				} else {
					Redirect::to('500.html');
				}
			}
		}
	}

	public function delete($id = null)
	{
		if(is_null($id))
		{
			Redirect::to('404.html');
		} else {
			$agencia = Agencia::where('id','=',$id)->firstOrFail();
			if(is_object($agencia))
			{
				$agencia->estado = '0';
				$agencia->save();
				return Redirect::to('agencia');
			}
		}
	}
	
	public function changePass($id = null)
	{
        if (is_null($id) or ! is_numeric($id))
		{
			return Redirect::to('404.html');
		} else {
			$agencia = Agencia::where('id','=',$id)->firstOrFail();
			if (is_object($agencia))
			{
				$agencia->pasword = Input::get('password');
				return View::make('agencia.change_pass',array('agencia'=>$agencia));
			} else {
				return Redirect::to('404.html');
			}
		}

	}
	public function imagen($id=null)
	{
		if(is_null($id) or ! is_numeric($id))
		{
			return Redirect::to('404.html');
		} else {
			$agencia = Agencia::where('id','=',$id)->firstOrFail();
			return View::make('agencia.imagen',array('agencia'=>$agencia));
		}
	}
	public function uploadImage($id=null)
	{
		$mensaje = "Ocurrio Error";
		if(Input::file("foto")->isValid())
		{
			$file = Input::file("foto");
			$fileName = Input::file('foto')->getClientOriginalName();
			$agencia = Agencia::where('id','=',$id)->firstOrFail();
			$agencia->foto = md5($id."-".$fileName).'.'.Input::file('foto')->getClientOriginalExtension();
			if($agencia->save())
			{
				Input::file('foto')->move('assets/foto',$agencia->foto);
				$mensaje = "Imagen actualizado";
			}
		}
		return Redirect::to('agencia/profile/'.$id)->withErrors($mensaje);
	}
}
