<?php

class GuiaController extends BaseController
{
	public function index()
	{
		$cargos = Cargo::all();
		return View::make('personal.cargo.index',array('cargos'=>$cargos));
	}
	public function add()
	{
		return View::make('personal.cargo.add');
	}
	public function insert()
	{
		$respuesta = Cargo::agregar(Input::all());
		if($respuesta['error']==true)
		{
			return Redirect::to('personal/cargo/add')->with('mensaje',$respuesta['mensaje'])->withInput();
		} else {
			return Redirect::to('personal/cargos')->with('mensaje',$respuesta['mensaje']);
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
