<?php
	class Cliente extends Eloquent{
		
	protected $table = 'Tcliente';
	public $timestamps = false;
	protected $fillable = array('cnombre','capellido','cpasaporte','cnacionalidad');

	public static function agregar($input)
	{
		$respuesta = array();
		$reglas = array(
			'cnombre'=>array('required','min:4'),
			'capellido'=>array('required','min:4'),
			'cpasaporte'=>array('required','unique:cliente','digits:8'),
			'cnacionalidad'=>array('required','max:30'),
			
			);
		$validador = Validator::make($input,$reglas);
		if($validador->fails())
		{
			$respuesta['mensaje'] = $validador;
			$respuesta['error'] = true;
		} else
		{
		
			$cliente = static::create($input);
			$respuesta['mensaje'] = 'cliente Creado';
			$respuesta['error'] = false;
			$respuesta['data'] = $cliente;
		}
		return $respuesta;
	}
}
?>