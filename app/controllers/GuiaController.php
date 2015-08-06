<?php

class GuiaController extends BaseController
{
	public function index($registros=5)
	{
		$datos = Guia::paginate($registros);
		$guias = Guia::all();
		return View::make('guia.index',compact("datos"),array('guias'=>$guias));
	}
	public function profile($id = null)
	{
		if (is_null($id) or ! is_numeric($id))
		{
			return Redirect::to('404.html');
		} else {
			$guia = Guia::where('id','=',$id)->firstOrFail();
			if (is_object($guia))
			{
				return View::make('guia.profile',array('guia'=>$guia));
			} else {
				return Redirect::to('404.html');
			}
		}
	}


	public function add()
	{
		return View::make('guia.add');
	}
	public function insert()
	{
		$respuesta = Guia::agregar(Input::all());
		if($respuesta['error']==true)
		{
			return Redirect::to('guia/add')->with('mensaje',$respuesta['mensaje'])->withInput();
		} else {
			return Redirect::to('guias')->with('mensaje',$respuesta['mensaje']);
		}
	}
	public function edit($cod=null)
	{
		if(is_null($cod))
		{
			return Redirect::to('404.html');
		} else {
			$agencia = Agencia::where('codAgencia','=',$cod)->firstOrFail();
			return View::make('agencia.edit',array('agencia'=>$agencia));
		}
	}
	public function update()
	{
		$cod=Input::get('codAgencia');
		if(is_null($cod))
		{
			Redirect::to('404.html');
		} else {
			$agencia = Agencia::where('codAgencia','=',$cod)->firstOrFail();
			if(is_object($agencia))
			{
				$agencia->nombre = Input::get('nombre');
				$agencia->apellidos = Input::get('apellidos');
				$agencia->email = Input::get('email');
				$agencia->telefono = Input::get('telefono');
				$agencia->save();
				return Redirect::to('agencias');
			} else {
				Redirect::to('500.html');
			}
		}
	}
	public function delete($cod = null)
	{
		if(is_null($cod))
		{
			Redirect::to('404.html');
		} else {
			$agencia = Agencia::where('codAgencia','=',$cod)->firstOrFail();
			if(is_object($agencia))
			{
				$agencia->estado = '0';
				$agencia->save();
				return Redirect::to('agencias');
			}
		}
	}
}
