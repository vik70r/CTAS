<?
session_start();
$instancia=new Cconexion();
$instancia->HacerConexion();
function __autoload($class_name){
	 include $class_name.'.php';
	}
if(	$_SESSION['userCARGO'] =="administrador" or $_SESSION['userCARGO']=="secretaria") 
{
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="admin/css/c-grey.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/form.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/menu.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/messages.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/statics.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/style.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/style_text.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/tabs.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/wysiwyg-editor.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/wysiwyg.css"/>
<link rel="stylesheet" type="text/css" href="admin/css/wysiwyg.modal.css"/>
<link rel="stylesheet" href="estilosReserva.css" type="text/css" media="screen" />
	
<script type="text/javascript" src="admin/js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" language="javascript" src="admin/js/jquery.dataTables.js"></script>

</head>

<body>
<? 
if(isset($BotonActualizar)){
 $instancia->MantenimientoReserva($idresrvasi,"" ,"" ,"","","","","","","","","",$hsalida ,$hretorno,$ropcional,$robservacion,"A");
 }
?>
<div class="wrapper">
	<div class="container">
    
    <div id="header">
		<img src="images/tepsa_bus.jpg" width="308" height="170" alt="Logo" />
	   <h1> Agencia de Viajes <br />
      <h1> ANDES TOURS E.I.R.L <br />
		<span>  </span><br />
		<span style="color: #000000"><img src="images/logotepsa.jpg" width="364" height="82" alt="Logo" /></span></h1>
  	</div>
    
		<!--inicio cabecera-->
	    <div class="top">
		<div class="split"><h1> </h1></div>
		<div class="split">
		 <div class="logout"><img src="admin/gfx/icon-logout.gif" align="left" alt="Logout" /> <a href="logout.php">Salir</a></div>
		 <div><img src="admin/gfx/icon-welcome.gif" align="left" alt="Welcome" /> Bienvenido <? echo($_SESSION['nombreEmple']); ?></div>
		</div>
		</div>
		<!--fin cabecera--> 
		
		<!--inicio menu-->  
		<div class="menu">
        <ul>
		    <li class="break"></li>
			<li><a href="">MANTENIMIENTO</a>
               <ul>
                  <li><a href="insertCliente.php">CLIENTE</a></li>
                  <li class="break"></li>
          <? if($_SESSION['userCARGO'] =="administrador") { ?>
                  <li><a href="insertEmpleado.php">EMPLEADO</a></li>
                  <li class="break"></li>
                  <li><a href="insertGuia.php">GUIA</a></li>
                  <li class="break"></li>
                  <li><a href="insertHotel.php">HOTEL</a></li>
                  <li class="break"></li>
                  <li><a href="insertAgencia.php">AGENCIA</a></li>
                  <li class="break"></li>
                  <li><a href="insertTour.php">TOUR</a></li>
                  <li class="break"></li>
            <? }?>
                </ul>
            </li>
			<li class="break"></li>
              <li>
                  <a href="">OPERACIONES TOURS</a>
                   <ul>
                      <li><a href="ReservaBoleto.php">RESERVAR </a></li>
                      <li class="break"></li>
                      <li><a href="pagoBoleto.php">COBRO</a></li>
                      <li class="break"></li>
                      <li><a href="Copi.php">EDITAR RESERVA</a></li>
                      <li class="break"></li>
                  </ul>
              </li>
            <li class="break"></li>
				<li>
					<a href="">REPORTES</a>
                    <ul>
                        <li>
                           <a>RELACION</a>
                           <ul>
                             	<li><a href="rhotel.php">HOTEL</a></li>
                                <li class="break"></li>
                                <li><a href="rguia.php">GUIA</a></li>
                                <li class="break"></li>
                                <li><a href="rtour.php">TOUR</a></li>
                                <li class="break"></li>
                                <li><a href="rempleado.php">EMPLEADO</a></li>
                                <li class="break"></li>
                                </ul>
                        </li>
						<li><a href="consultaTours.php">REPORTE TOURS</a></li>
						<li class="break"></li>
						<li><a href="cotiza.php">COTIZACION</a></li>
						<li class="break"></li>
                  <? if($_SESSION['userCARGO'] =="administrador") { ?>
                        <li><a href="rcobro.php">COBRO</a></li>
						<li class="break"></li>
                  <? } ?>
					</ul>
				</li>
			<li class="break"></li>
		</ul>
		</div>
		<!--fin menu-->  
		
		<!--[if !IE]> START HOLDER <![endif]--> 
      <div class="holder"> 
      <div class="box">
    
    <div class="content tabs">	
    <form name="formulario" action="Copi.php">
     <table border="0" cellpadding="0" cellspacing="0" class="tabla">
        <tr>
        
        <th class="modo"> 
             <label>TOURS:&nbsp;&nbsp;</label>                     
               <select name="comboTour">
                <option value='0'>Seleccione Tour</option>
                 <?php	
                $B_BUSCAR= $instancia->mostrarTabla("TTOUR");
                $R_BUSCAR=mysql_fetch_assoc($B_BUSCAR);
                $C_BUSCAR=mysql_num_rows($B_BUSCAR);
                $suma=0;
                do{ ++$suma;
                echo "<option value='".$R_BUSCAR['idtour']."'>".$R_BUSCAR['tnombre']."</option>";
                }while($R_BUSCAR=mysql_fetch_assoc($B_BUSCAR));
                ?>     
              </select>
          </td>  
          <th class="modo">    
             <label>&nbsp;&nbsp;FECHA:&nbsp;&nbsp;</label>
             <input name="fecha1" type="text" value="" class="datepicker" />&nbsp;&nbsp;
          </td>  
          <th class="modo">    	  
            <div class="pages-bottom">
                  <div class="actionbox">             
                   <button type="submit" name="btnConsultaTour"><span>Realizar Consulta</span></button>            
                  </div>
              </div> 
           </td> 
          </tr>
        </table> 
</form>
 </div>
 <?
 if(isset($btnConsultaTour))
 {
 ?>
        <table cellpadding="0" cellspacing="0" border="1" class="display" id="example">
            <thead>
                <tr>
                    <th>Nro.</th>
                    <th>NOMBRES Y APELLIDOS</th>
                    <th>PASAPORTE</th>
                    <th>NACIONALIDAD</th>
                    <th>TIPO</th>
                    <th>AGENCIA</th>
                    <th>OPCIONAL</th>
                    <th>HOTEL</th>
                    <th>HORA TREN</th>
                    <th>OBSERVACION</th>
                    <th>E</th>
                </tr>
            </thead>
            <tbody>
         <?
		 $resultado=$instancia->MetodoReporteReserva($fecha1,$comboTour);
         $i=0;
         while($fila=mysql_fetch_array($resultado)){ 
		   $i=$i+1;
        ?>
           <tr class='gradeA'>
                <td><? echo($i); ?></td>
                <td><? echo($fila[1]); ?></td>
                <td><? echo($fila[2]); ?> </td>
                <td><? echo($fila[3]); ?></td>
                <td><? echo($fila[4]); ?> </td>
                <td><? echo($fila[5]); ?></td>
                <td><? echo($fila[6]); ?> </td>
                <td><? echo($fila[7]); ?></td>
                <td><? echo($fila[8].'-'.$fila[9]); ?> </td>
                <td><? echo($fila[10]); ?></td>
                <td>
               <a href="editatreserva.php?idres=<? echo($fila[0]); ?>&nombre=<? echo($fila[1]); ?>&hs=<? echo($fila[8]); ?>&hl=<? echo($fila[9]); ?>&opcional=<? echo($fila[6]); ?>&observacion=<? echo($fila[10]); ?>"><img src="admin/gfx/icon-edit.png" alt="Ver" /></a>
                </td>
            </tr>
        <?
              
            }
        ?>           
        </tbody>
        </table>
  <?
  //fin del evento de boton consultar
 }
 ?>
       </div>       
	</div>
  <!--[if !IE]> FIN HOLDER <![endif]--> 
  
</div>
</div>
<script type="text/javascript" src="admin/js/date.js"></script>
<script type="text/javascript" src="admin/js/hoverIntent.js"></script>
<script type="text/javascript" src="admin/js/jquery.datepicker.js"></script>
<script type="text/javascript" src="admin/js/jquery.filestyle.mini.js"></script>
<script type="text/javascript" src="admin/js/jquery.filestyle.mini.js"></script>
<script type="text/javascript" src="admin/js/jquery.flot.js"></script>
<script type="text/javascript" src="admin/js/jquery.graphtable-0.2.js"></script>
<script type="text/javascript" src="admin/js/jquery.pngFix.js"></script>
<script type="text/javascript" src="admin/js/jquery.sparkbox-select.js"></script>
<script type="text/javascript" src="admin/js/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="admin/js/jquery-ui.js"></script>
<script type="text/javascript" src="admin/js/superfish.js"></script>
<script type="text/javascript" src="admin/js/supersubs.js"></script>
<script type="text/javascript" src="admin/js/plugins/wysiwyg.rmFormat.js"></script>
<script type="text/javascript" src="admin/js/controls/wysiwyg.link.js"></script>
<script type="text/javascript" src="admin/js/controls/wysiwyg.table.js"></script>
<script type="text/javascript" src="admin/js/controls/wysiwyg.image.js"></script>
<script type="text/javascript" src="admin/js/inline.js"></script>
</body>
</html>
<?
}else{
	echo "<META HTTP-EQUIV=refresh CONTENT=\"1;URL=index.php\">";
	die();
	}
?>