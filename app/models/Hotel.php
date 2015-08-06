<?php
	class Hotel extends Eloquent{
		
	protected $table = 'thotel';
	public $timestamps = false;
	protected $fillable = array('hnombre','hdireccion','categoria','htelefono','hdescripcion');

	public static function agregar($input)
	{
		$respuesta = array();
		$reglas = array(
			'hnombre'=>array('required','min:4'),
			'hdireccion'=>array('required','min:4'),
			'categoria'=>array('required','max:50'),
			'htelefono'=>array('required','numeric'),
			'hdescripcion'=>array('required','max:200'),
						
			);
		$validador = Validator::make($input,$reglas);
		if($validador->fails())
		{
			$respuesta['mensaje'] = $validador;
			$respuesta['error'] = true;
		} else
		{
		
			$hotel = static::create($input);
			$respuesta['mensaje'] = 'Hotel Creado';
			$respuesta['error'] = false;
			$respuesta['data'] = $hotel;
		}
		return $respuesta;
	}
}
?>