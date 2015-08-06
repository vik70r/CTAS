<?php

class Personal extends Eloquent {

	protected $table = 'Personal';
	protected $fillable = array('enombre','eapellido','eruc','edireccion','etelefono','ecargo','etipo','epassword');

	public static function agregar($input)
	{
		$respuesta = array();
		$reglas = array(
			'enombre'=>array('required','min:3'),
			'eapellido'=>array('required','min:3'),
			'eruc'=>array('required','numeric','digits:10','unique:templeado'),
			'edireccion'=>array('required','min:10'),			
			'etelefono'=>array('required','numeric'),
			'ecargo'=>array('required','min:5'),
			'etipo'=>array('required','min:5'),
			'epassword'=>array('required','min:6','confirmed')
		);
		$validador = Validator::make($input,$reglas);
		if($validador->fails())
		{
			$respuesta['mensaje'] = $validador;
			$respuesta['error'] = true;
		} else
		{
			$input['password'] = Hash::make($input['password']);
			$empleado = static::create($input);
			$respuesta['mensaje'] = 'empleado Creado';
			$respuesta['error'] = false;
			$respuesta['data'] = $empleado;
		}
		return $respuesta;
	}
	public static function editar($input)
	{
		$respuesta = array();
		$reglas = array(
			'nombre'=>array('required','alpha','min:3'),
			'apellidos'=>array('required','alpha','min:3'),
			'dni'=>array('required','numeric','digits:8'),
			'direccion'=>array('required','min:10'),
			'telefono'=>array('required','numeric'),
			'email'=>array('required','email'),
		);
		$validador = Validator::make($input,$reglas);
		if($validador->fails())
		{
			$respuesta['mensaje'] = $validador;
			$respuesta['error'] = true;
		} else
		{
			$respuesta['mensaje'] = 'Personal Actualizado';
			$respuesta['error'] = false;
		}
		return $respuesta;
	}
}

