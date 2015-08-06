<?php
session_start();
$instancia=new Cconexion();
$instancia->HacerConexion();
function __autoload($class_name){
	 include $class_name.'.php';
	} 

$busqueda=$_POST['busqueda'];
// DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe
if ($busqueda<>''){	

	$result=$instancia->BuscarCliente($busqueda);
	$i=1;
	while ($row = mysql_fetch_array($result)){
	  $idcliente=$row['idcliente'];
	  $cnombre=	$row['cnombre']." ".$row['capellido'];
	  $cnacionalidad=$row['cnacionalidad'];
	  $cpasaporte=$row['cpasaporte']; 
	  $cedad=$row['cedad'];
	  		$i++;
	}
	$_SESSION['idcliente']=$idcliente;
	$_SESSION['nombrecliente']=$cnombre;
}

?>
<div class="row">
<table border="0" cellpadding="0" cellspacing="0" class="tabla">
<tr>
<th class="modo">Nombres y Apellidos : </td>
<th class="modo1"> <? echo( $cnombre); ?> </td> 
</tr>
<tr>
<th class="modo">Pasaporte : </td>
<th class="modo1"><? echo($cpasaporte);  ?> </td> 
</tr>
<tr >
<th class="modo">Nacionalidad : </td>
<th class="modo1"> <? echo($cnacionalidad); ?></td> 
</tr>
<tr>
<th class="modo">Edad : </td>
<th class="modo1"> <? echo($cedad); ?></td> 
</tr>
<tr>
<th class="modo">Codigo Cliente : </td>
<th class="modo1"> <? echo($idcliente); ?></td> 
</tr>
</table>
</div>
	

                         

