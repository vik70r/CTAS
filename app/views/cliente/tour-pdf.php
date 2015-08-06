<?php
require_once('../pdf/class.ezpdf.php');
require_once('ConexionPDF.php');
$pdf =& new Cezpdf('b3');
$pdf->selectFont('../pdf/fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1,1);
//la conexion esta en conexionPDF

$queEmp = " SELECT CONCAT( cnombre,  ', ', capellido ) AS NombreyApellidos,cpasaporte, cnacionalidad,btipocliente,anombre, bopcional,hnombre, CONCAT( bhorasalida,  '-', bhorallegada ) AS Hora, treserva.bobservacion
				
				FROM treserva , Tdetalletour , tcliente , thotel, tagencia
				WHERE treserva.idreserva= Tdetalletour.idreserva
					AND  treserva.idhotel = thotel.idhotel
					AND  tagencia.idagencia = Tdetalletour.idagencia
					AND  tcliente.idcliente = treserva.idcliente
					AND  tdetalletour.A= '1'
					AND   treserva.bfecha_inicio= '".$fecha1."'
					AND   Tdetalletour.idtour = $comboTour "; 
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'num'=>'<b>Nro.</b>',
				'NombreyApellidos'=>'<b>Nombre y Apellidos</b>',
				'cpasaporte'=>'<b>Pasaporte</b>',				
				'cnacionalidad'=>'<b>Nacionalidad</b>',
				'btipocliente'=>'<b>Tipo</b>',
				'anombre'=>'<b>Agencia</b>',
				'bopcional'=>'<b>Opcional</b>',
				'hnombre'=>'<b>Hotel</b>',
				'Hora'=>'<b>Hora</b>',
				'bobservacion'=>'<b>Observacion</b>'
				
				
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>950
			);

$txttit = "<b>Reserva de Tours</b>\n";
$txttit.= "Relacion De Clientes del Tour : $idreserva  \n";

$pdf->ezText($txttit, 18);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();


?>