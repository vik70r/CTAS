<?php

class HotelController extends BaseController
{
	public function index($registros=20)
	{
		//$cod="1";
		//$datos = Cliente::paginate($registros);

		$hotels=Hotel::all();
		//$clientes = Cliente::where('codCarrera','=',$cod)->get();
		$datos = DB::table('thotel')
        				
        				->select('thotel.idhotel', 'thotel.hnombre', 'thotel.hdireccion', 'thotel.categoria','thotel.htelefono','thotel.hdescripcion')
        				->get();
		return View::make('hotel.index',compact("datos"),array('hotels'=>$hotels));
	}


	public function add()
	{
		return View::make('hotel.add');
	}
	public function insert()
	{
		$respuesta = Hotel::agregar(Input::all());
		if($respuesta['error']==true)
		{
			return Redirect::to('personal/hotel/add')->with('mensaje',$respuesta['mensaje'])->withInput();
		} else {
			return Redirect::to('personal/hotels')->with('mensaje',$respuesta['mensaje']);
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
