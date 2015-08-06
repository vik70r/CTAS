<?php

class Agencia extends Eloquent {

	protected $table = 'agencia';
	protected $fillable = array('nombre','apellidos','dni','direccion','telefono','email','password');

	public static function agregar($input)
	{
		$respuesta = array();
		$reglas = array(
			'nombre'=>array('required','min:3'),
			'ruc'=>array('required','numeric','digits:12','unique:agencia'),
			'ciudad'=>array('required','min:4'),
			'direccion'=>array('required','min:10'),
			'telefono'=>array('required','numeric'),
			'email'=>array('required','email','unique:agencia'),
			'password'=>array('required','min:6','confirmed')
		);
		$validador = Validator::make($input,$reglas);
		if($validador->fails())
		{
			$respuesta['mensaje'] = $validador;
			$respuesta['error'] = true;
		} else
		{
			$input['password'] = Hash::make($input['password']);
			$agencia = static::create($input);
			$respuesta['mensaje'] = 'agencia Creado';
			$respuesta['error'] = false;
			$respuesta['data'] = $agencia;
		}
		return $respuesta;
	}


	public static function editar($input)
	{
		$respuesta = array();
		$reglas = array(
			'nombre'=>array('required','min:3'),
			'ruc'=>array('required','numeric','digits:12','unique:agencia'),
			'ciudad'=>array('required','min:4'),
			'direccion'=>array('required','min:10'),
			'telefono'=>array('required','numeric')
		);
		$validador = Validator::make($input,$reglas);
		if($validador->fails())
		{
			$respuesta['mensaje'] = $validador;
			$respuesta['error'] = true;
		} else
		{
			$respuesta['mensaje'] = 'agencia Actualizado';
			$respuesta['error'] = false;
		}
		return $respuesta;
	}

	public static function Cambiar($input)
	{
		$respuesta = array();
		$reglas = array(
			'password'=>array('required','min:6','confirmed')
		);
		$validador = Validator::make($input,$reglas);
		if($validador->fails())
		{
			$respuesta['mensaje'] = $validador;
			$respuesta['error'] = true;
		} else
		{
			$respuesta['error'] = false;
		}
		return $respuesta;
	}
}

