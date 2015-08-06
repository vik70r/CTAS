<?php
	class Tour extends Eloquent{
		
	protected $table = 'ttour';
	public $timestamps = false;
	protected $fillable = array('tnombre','costoreferencial','tdescripcion');

	public static function agregar($input)
	{
		$respuesta = array();
		$reglas = array(
			'tnombre'=>array('required','min:4'),
			'costoreferencial'=>array('required','numeric'),
			'tdescripcion'=>array('required','max:200'),
						
			);
		$validador = Validator::make($input,$reglas);
		if($validador->fails())
		{
			$respuesta['mensaje'] = $validador;
			$respuesta['error'] = true;
		} else
		{
		
			$tour = static::create($input);
			$respuesta['mensaje'] = 'Tour Creado';
			$respuesta['error'] = false;
			$respuesta['data'] = $tour;
		}
		return $respuesta;
	}
}
?>