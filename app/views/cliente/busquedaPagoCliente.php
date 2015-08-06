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
	$_SESSION['nombrecliente']=$cnombre;
	$result=$instancia->ConsultaReserva($idcliente);
	$i=0;
	while ($row = mysql_fetch_array($result)){
	  $idreserva=$row[0];
	  		$i++;
	}
 $_SESSION['idreserva']= $idreserva;
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
<?
$cod=mysql_fetch_row($instancia->ConsultaReserva($idcliente));//comenatrio mentira
?>
<div class="row">  
 <label>ESTADO DE CUENTA DEL CLIENTE:</label>  
  <table cellpadding="0" cellspacing="0" border="0">
  <thead>
      <tr>
          <th>Nro.        &nbsp;&nbsp;</th>
          <th>A Cuenta    &nbsp;&nbsp;</th>
          <th>Saldo       &nbsp;&nbsp;</th>
          <th>Fecha       &nbsp;&nbsp;</th>
      </tr>
  </thead>
  <tbody>
  <?
$result=$instancia->MantenimientoCobro("",$cod[0],"","","","R");
	$i=0;
	while ($row = mysql_fetch_array($result)){
 
  ?>
  <tr class="gradeA">
  <td><? echo($i+1); ?></td>
  <td><? echo($row[0]); ?></td>
  <td><? echo($row[1]); ?></td>
  <td><? echo($row[2]); ?></td>
  </tr>
  <?
  	 $i++;
	} 
  ?>
  </tbody>
</table> 
</div>     
                

