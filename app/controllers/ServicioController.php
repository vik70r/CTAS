<?php

class ServicioController extends \BaseController {

	public function index()
	{
		
		$servicios = Servicio::all();
		return View::make('servicio.index')->with('servicios', $servicios);
	}

	public function create()
	{
		//MUESTRA EL FORMULARIO PARA INSERTAR UN NUEVO SEMESTRE
		return View::make('servicio.create');
	}

	public function store()
	{
		//RECUPERAR LOS DATOS  DE CREATE Y GUARDAR LOS DATOS EN LA BASE DE DATOS
 		$nombre = Input::get('nombre');
 		$a = '[{"nombre":"'.$nombre.'"}]';
 		$b = Servicio::select('nombre')->where('nombre', $nombre)->get();
 		if($a==$b){
 			Session::flash('message',"El Servicio ($nombre) ya existe en la base de datos!");
			Session::flash('class','danger');;
 		}
 		else{
 			$servicio = new Servicio;
			$servicio->nombre = Input::get('nombre');
			$servicio->save();
			Session::flash('message','Guardado correctamente!');
			Session::flash('class','success');
 		}
 		return Redirect::to('servicio/create');
	}

	public function show($id)
	{
		//RECUPERAMOS LOS DATOS DE ID QUE LE PASEMOS Y MOSTRAMOS TODO EL REGISTRO DEL ID
		$servicio = Servicio::find($id);
		return View::make('servicio.show')->with('servicio', $servicio);
	}

	public function edit($id)
	{
		//RECUPERAMOS LOS DATOS DEL ID QUE LE PASEMOS
		$servicio = Servicio::find($id);
		return View::make('servicio.edit')->with('servicio', $servicio);
	}

	public function update($id)
	{
		//RECIBE EL CONTENIDO DEL TEX
		$input = Input::all();
		$servicio = Servicio::find($id);
		$servicio->nombre = $input['nombre'];
		$nombre = $input['nombre'];
 		$a = '[{"nombre":"'.$nombre.'"}]';
 		$b = Servicio::select('nombre')->where('nombre', $nombre)->get();
 		if($a==$b){
 			Session::flash('message',"El servicio ($nombre) ya existe en la base de datos!");
			Session::flash('class','danger');;
			return Redirect::to('servicio/'.$id.'/edit');
 		}
 		else{
			$servicio->save();
			Session::flash('message','Modificado correctamente!');
			Session::flash('class','success');
			return Redirect::to('servicio/'.$id);
 		};
		//if()
		//$semestre->save();
		//return Redirect::to('semestre/'.$id);
	}

	public function destroy($id)
	{
		$servicio = Servicio::find($id);
		$servicio->delete();
		Session::flash('message',"El servicio Eliminado Correctamente...!");
		Session::flash('class','success');;
		return Redirect::to('servicio');
	}

}