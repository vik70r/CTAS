<?
session_start();
$instancia=new Cconexion();
$instancia->HacerConexion();
function __autoload($class_name){
	 include $class_name.'.php';
	} 

if(!isset($_POST['productId']))exit;	/* No product id sent as input to this file */

$resultado=$instancia->mostrarTabla("TTOUR");
if($_POST['productId']){	
  $i=0;
  while($fila=mysql_fetch_array($resultado)){ 
       if($_POST['productId']==$fila[0]){
		echo "$fila[0]|||$fila[1]|||$fila[2]";	
		$fi=mysql_fetch_array($instancia->ConsultaReserva($_SESSION['idcliente']));
		$instancia->MantenimientoTDetalleTour("",$fi[0],$fila[0],"","","","","I");
	   }
		$i++;
	}
	
 }
 
?>