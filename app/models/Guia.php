<?php
	class Guia extends Eloquent{
		
	protected $table = 'tguia';
	public $timestamps = false;
	protected $fillable = array('gnombre','gapellido','gsexo','gtelefono','gdescripcion');

	public static function agregar($input)
	{
		$respuesta = array();
		$reglas = array(
			'gnombre'=>array('required','min:4'),
			'gapellido'=>array('required','min:4'),
			'gsexo'=>array('required','max:2'),
			'gtelefono'=>array('required','numeric'),
			'gdescripcion'=>array('required','max:200'),
						
			);
		$validador = Validator::make($input,$reglas);
		if($validador->fails())
		{
			$respuesta['mensaje'] = $validador;
			$respuesta['error'] = true;
		} else
		{
		
			$guia = static::create($input);
			$respuesta['mensaje'] = 'Guia Creado';
			$respuesta['error'] = false;
			$respuesta['data'] = $guia;
		}
		return $respuesta;
	}
}
?>