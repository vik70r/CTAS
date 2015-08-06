<?
session_start();
$instancia=new Cconexion();
$instancia->HacerConexion();
function __autoload($class_name){
	 include $class_name.'.php';
	}
if(	$_SESSION['userCARGO'] =="administrador" or $_SESSION['userCARGO']=="secretaria") 
{
	 
if(isset($btnReserva)){
$op=$O1." ".$O2." ".$O3;
$instancia->MantenimientoReserva("",$combohotel ,$_SESSION['idcliente'] ,date("d/m/Y") ,$guia ,$transporte ,$alimentacion ,$tipocliente ,$fecha1 ,$fecha2 ,$combotren ,$comboentrada ,$comboHSalida ,$comboHRetorno,$op,$mensaje,"I");
	}
	
		 
//RECUPERANDO EL ID DE RESERVA DEL CLIENTE
$Equipos=$instancia->ConsultaReserva($_SESSION['idcliente']);
	$Nro=0;
	while ($Fila=mysql_fetch_array($Equipos))
	{
		
		$Nro++;
		$idreserva=$Fila[0];
	}
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
<link rel="stylesheet" type="text/css" href="admin/css/tablas.css"/>
<link rel="stylesheet" href="estilosReserva.css" type="text/css" media="screen" />

<script type="text/javascript" src="Busqueda/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="tour/css/stiloAddTour.css"/>
<script type="text/javascript" src="tour/js/ajax.js"></script>
<script type="text/javascript" src="tour/js/fly-to-basket.js"></script>

<script type="text/javascript" src="admin/js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" language="javascript" src="admin/js/jquery.dataTables.js"></script>
<script language="javascript"> <!--
function imprime() { 
window.open('ImprimeReserva.php');
}
</script>
</head>

<body>
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
		
  <!--inicio ventana holder y  box--> 
  <div class="holder"> 
      <div class="box">            
            
		<!--inicio  titulo--> 
        <div class="title">
        <h2>NUEVA RESERVAR DE TOURS : <? echo($_SESSION['nombrecliente']." : ".$_SESSION['idcliente']); ?></h2>
        <img src="admin/gfx/title-hide.gif" class="toggle" alt="" />
        </div>
       <!--fin  titulo-->   
	  <div class="content tabs">      
	 <!--inicio contenedor--> 				
	<div  class="tabdiv">  
    <form id="forma2" > 
    <div class="row">
    <table border="0" cellpadding="0" cellspacing="0" class="tabla">
    <tr>
        <td class="modo">Nombre Guia : </td>
        <td class="modo1"> 
        <select name="comboGuia" >
        <option value='Ninguno'>Ninguno</option>
         <?php	
        $B_BUSCAR= $instancia->mostrarTabla("TGUIA");
        $R_BUSCAR=mysql_fetch_assoc($B_BUSCAR);
        $C_BUSCAR=mysql_num_rows($B_BUSCAR);
        $suma=0;
        do{ ++$suma;
        echo "<option value='".$R_BUSCAR['idguia']."'>".$R_BUSCAR['gnombre']." ".$R_BUSCAR['gapellido']."</option>";
        }while($R_BUSCAR=mysql_fetch_assoc($B_BUSCAR));
        ?>     
        </select>
        </td>
    </tr>
    <tr>
        <td class="modo">Nombre Agencia : </td>
        <td class="modo1"> 
        <select name="comboAgencia" >
         <?php	
        $B_BUSCAR= $instancia->mostrarTabla("TAGENCIA");
        $R_BUSCAR=mysql_fetch_assoc($B_BUSCAR);
        $C_BUSCAR=mysql_num_rows($B_BUSCAR);
        $suma=0;
        do{ ++$suma;
        echo "<option value='".$R_BUSCAR['idagencia']."'>".$R_BUSCAR['anombre']."</option>";
        }while($R_BUSCAR=mysql_fetch_assoc($B_BUSCAR));
        ?>     
        </select>
        </td>
    </tr>
    <tr>
        <td class="modo">Tipo Endose : </td>
        <td class="modo1"> 
        <select name="comboEndose" >
        <option value='Ninguno'>Ninguno</option>  
        <option value='ENDOSAR'>ENDOSAR</option> 
        </select>
        </td>
    </tr>
    <tr>
      <td class="modo">Precio Endose : </td>
      <td class="modo1"> 
       <input name="PrecioEndoce" type="text" value="" placeholder="Solo en Caso de Endose" class="small" /> 
      </td>
    </tr>
    
     <tr>
        <td class="modo">Tour A Reservar : </td>
        <td class="modo1"> 
        <select name="comboTourS" >
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
    </tr>
     <tr>
        <td class="modo"></td>
        <td class="modo1"> 
        <div class="pages-bottom">
               <div class="actionbox">
                 <button type="submit" name="btnReservaPaso2" id="btnReservaPaso2" value="btnReservaPaso2" ><span>Agregar Reserva</span></button>
                 <button type="submit" name="btnImprimeReserva" id="btnImprimeReserva" ><span>Imprimir Reserva</span></button>
               </div>
          </div>	
        </td>
      </tr>
    
    </table>
   
      </div>  
  </form>
    <?
  if(isset($btnReservaPaso2)){
// recuperar el id del cliente para que pueda reservar completamente
$instancia->MantenimientoTDetalleTour('',$idreserva,$comboTourS,$comboGuia,$comboAgencia,$comboEndose,$PrecioEndoce,"I");
echo "<META HTTP-EQUIV=refresh CONTENT=\"1;URL=ReservaBoletoPaso3.php\">";
}
  ?>
 <div class="row">
  <h1 align="center">Lista de Tour Comprados </h1>
  <div align="center">
  <table width="767" border="1">
    <tr>
      <th width="40" scope="col">Nro</th>
      <th width="70" scope="col">Eliminar</th>
      <th width="80" scope="col">Id. Tour</th>
      <th width="400" scope="col">Nombre del Tour</th>
      <th width="80" scope="col">Costo Referencial</th>
    </tr>
    
    <?	
	 if(isset($Borrar))
		{
			$instancia->MantenimientoTDetalleTour($iddetalle,'','','','','','','A');
		}	
		//Consulta de la tabla de equipos				
		
      ?> 
      <tbody>
		<?
		$sql=$instancia->MantenimientoElimimaReserva($idreserva);
		$j=0;
		$suma=0;
         while($fil=mysql_fetch_array($sql)){ 
		  $j++;
		  $suma=$suma+$fil[2];
        ?>
           <tr class='gradeA'>
                <td><? echo($j); ?></td>
                <td><? echo("<a href='ReservaBoletoPaso2.php?Borrar=1&iddetalle=".$fil[0]."'>Eliminar</a>"); ?></td>
                <td><? echo($fil[0]); ?> </td>
                <td><? echo($fil[1]); ?> </td>
                <td><? echo($fil[2]); ?> </td>
            </tr>
        <?
            }
        ?>
        <tr class='gradeA'>
         <th colspan="5" style="font-size:22px; text-align:center;" >Total : <? echo $suma; ?></th>
         </tr>
     </tbody>  
  </table>
  </div>
  </div>
     <!--inicio row--> 	 
   <div class="row">
  <label><strong>RELACION DE TOURS</strong></label>
	<div id="mainContainer">
	<div id="leftColumn">
	<div id="products">
        <table cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
                <th>Nro.</th>
                <th>Nombre del Tours</th> 
                <th>Costo($)&nbsp;&nbsp;</th> 
                <th>Descripcion</th>        
            </tr>
        </thead>
        <tbody>
		<?
        $resultado=$instancia->mostrarTabla("TTOUR");
        $i=0;
         while($fila=mysql_fetch_array($resultado)){ 
        ?>
           <tr class='gradeA'>
                <td><? echo($fila[0]); ?></td>
                <td><? echo($fila[1]); ?></td>
                <td><? echo($fila[2]); ?></td>
                <td><? echo($fila[3]); ?> </td>
            </tr>
        <?
                $i=$i+1;
            }
        ?>
            </tbody>
        </table>
	</div>	
	<div class="clear"></div>
	</div>
</div>
</div>
 <!--fin row--> 	

 </div>
                                        
    </div>	
	</div>
    <!--fin ventana holder y  box--> 
    
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