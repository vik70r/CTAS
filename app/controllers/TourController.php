<?php

class TourController extends BaseController
{
	public function index($registros=5)
	{
		$datos = Tour::paginate($registros);
		$tours = Tour::all();
		return View::make('tour.index',compact("datos"),array('tours'=>$tours));
	}
	public function profile($id = null)
	{
		if (is_null($id) or ! is_numeric($id))
		{
			return Redirect::to('404.html');
		} else {
			$tour = Tour::where('id','=',$id)->firstOrFail();
			if (is_object($tour))
			{
				return View::make('tour.profile',array('tour'=>$tour));
			} else {
				return Redirect::to('404.html');
			}
		}
	}


	public function add()
	{
		return View::make('tour.add');
	}
	public function insert()
	{
		$respuesta = Tour::agregar(Input::all());
		if($respuesta['error']==true)
		{
			return Redirect::to('tour/add')->with('mensaje',$respuesta['mensaje'])->withInput();
		} else {
			return Redirect::to('tours')->with('mensaje',$respuesta['mensaje']);
		}
	}
	public function edit($cod=null)
	{
		if(is_null($cod))
		{
			return Redirect::to('404.html');
		} else {
			$tour = Tour::where('idtour','=',$cod)->firstOrFail();
			return View::make('tour.edit',array('tour'=>$tour));
		}
	}
	public function update()
	{
		$cod=Input::get('codAgencia');
		if(is_null($cod))
		{
			Redirect::to('404.html');
		} else {
			$tour = Tour::where('codAgencia','=',$cod)->firstOrFail();
			if(is_object($tour))
			{
				$tour->nombre = Input::get('nombre');
				$tour->apellidos = Input::get('apellidos');
				$tour->email = Input::get('email');
				$tour->telefono = Input::get('telefono');
				$tour->save();
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
			$agencia = Tour::where('codAgencia','=',$cod)->firstOrFail();
			if(is_object($agencia))
			{
				$agencia->estado = '0';
				$agencia->save();
				return Redirect::to('agencias');
			}
		}
	}
}
