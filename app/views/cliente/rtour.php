<?php
require_once('class.ezpdf.php');
require_once('ConexionPDF.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);
//$conexion = mysql_connect("localhost", "root", "root");
//mysql_select_db("bdreservatravel", $conexion);

$queEmp = " SELECT * FROM TTOUR ";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'num'=>'<b>Nro.</b>',
				'tnombre'=>'<b>Nombre del Tours</b>',
				'costoreferencial'=>'<b>Sub Total</b>',
				'tdescripcion'=>'<b>Descripcion</b>'
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>Reserva de Viajes</b>\n";
$txttit.= "RELACION DE TOURS   \n";

$pdf->ezText($txttit, 14);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();


?>