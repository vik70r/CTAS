<?php

class PagosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$clientes = Cliente::orderBy('id','DESC')->get();

		return View::make('pagos.index')->with('clientes',$clientes);
	}
	/*public function index()
	{
		$pagos = Pagos::orderBy('id','DESC')->get();

		return View::make('pagos.index')->with('pagos',$pagos);
	}*/

	public function getCreate()
	{
		return View::make('pagos.create');
	}
	public function store()
	{
		$pagos = new Pagos;

		//$pagos->id = Input::get('');
		$pagos->nro_serie = Input::get('nro_serie');
		$pagos->id_cliente = Input::get('id_cliente');
		$pagos->fecha = Input::get('fecha');
		$pagos->total_pago = Input::get('total');

		if ($pagos->save()) {
			Session::flash('message','Guardado correctamente!');
			Session::flash('class','success');
		} else {
			Session::flash('message','Ha ocurrido un error!');
			Session::flash('class','danger');
		}
		$detalle_pagos = new DetallePagos;
		$detalle_pagos->id = Input::get('id');
		$detalle_pagos->pagos_id = $pagos->id;
		$detalle_pagos->descripcion = Input::get('descripcion');
		$detalle_pagos->id_modalidad=Input::get('id_modalidad');

		if ($detalle_pagos->save()) {
			Session::flash('message','Guardado correctamente!');
			Session::flash('class','success');
		} else {
			Session::flash('message','Ha ocurrido un error!');
			Session::flash('class','danger');
		}
		return Redirect::to('pagos/create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  String  $nombre
	 * @return Response
	 */
	public function getShow($id = null)
	{
		$pagos = Pagos::find($id);
		//$pagos = Pagos::getAttribute($id)
		//$pagos = Pagos::table('pagos_pago')-->where('nombre','=',$nombre)-->get();
		return View::make('pagos.show')->with('pagos',$pagos);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  String $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$pagos = Pagos::find($id);

		return View::make('pagos.edit')->with('pagos',$pagos);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pagos = Pagos::find($id);

		$pagos->id = Input::get('id');
		$pagos->nro_serie = Input::get('nro_serie');
		$pagos->id_cliente = Input::get('id_cliente');
		$pagos->fecha = Input::get('fecha');
		$pagos->total_pago = Input::get('total_pago');

		if ($pagos->save()) {
			Session::flash('message','Actualizado correctamente!');
			Session::flash('class','success');
		} else {
			Session::flash('message','Ha ocurrido un error!');
			Session::flash('class','danger');
		}
		return Redirect::to('pagos/edit/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pagos = Pagos::find($id);

		if ($pagos->delete()) {
			Session::flash('message','Eliminado correctamente!');
			Session::flash('class','success');
		} else {
			Session::flash('message','Ha ocurrido un error!');
			Session::flash('class','danger');
		}

		return Redirect::to('pagos');
	}
	public function profile($id = null)
	{
		$modalidad = Modalidad::lists('id','monto');
		if (is_null($id) or ! is_numeric($id))
		{
			return Redirect::to('404.html');
		} else {
			$cliente = Cliente::where('id','=',$id)->firstOrFail();
			if (is_object($cliente))
			{
				return View::make('pagos.showCliente',array('cliente'=>$cliente,'modalidad'=>$modalidad));
				//return Redirect::to('pagos/create')->withErrors($respuesta['mensaje'] )->withInput();
				//return Redirect::to('pagos/create/',array('cliente'=>$cliente,'modalidad'=>$modalidad));
			} else {
				return Redirect::to('404.html');
			}
		}
	}

	public function search()
	{
		$modalidad = Modalidad::lists('id','monto');
		$pago = Pagos::max('id');

		$id = Input::get('id_cliente');

		if (is_null($id) or ! is_numeric($id))
		{
			return Redirect::to('404.html');
		} else {
			$cliente = Cliente::where('id','=',$id)->firstOrFail();
			if (is_object($cliente))
			{
				return View::make('pagos.showCliente',array('cliente'=>$cliente,'modalidad'=>$modalidad,'pago'=>$pago));
				//return Redirect::to('pagos/create')->withErrors($respuesta['mensaje'] )->withInput();
				//return Redirect::to('pagos/create/',array('cliente'=>$cliente,'modalidad'=>$modalidad));
			} else {
				return Redirect::to('404.html');
			}
		}
	}

	public function add()
	{
		$modalidad = Modalidad::lists('id','monto');
		return View::make('pagos.create',array('modalidad'=>$modalidad));
	}

	public function search_pagos()
	{

		$id = Input::get('fecha');
		
		if (is_null($id))
		{
			return View::make('pagos.search_pagos');
		} else {
			$pagos = Pagos::where('fecha','=',$id)->get();
			if (is_object($pagos))
			{
				return View::make('pagos.search_pagos',array('pagos'=>$pagos));
				//return Redirect::to('pagos/create')->withErrors($respuesta['mensaje'] )->withInput();
				//return Redirect::to('pagos/create/',array('cliente'=>$cliente,'modalidad'=>$modalidad));
			} else {
				return Redirect::to('404.html');
			}
		}
	}
}