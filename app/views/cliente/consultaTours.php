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
<link rel="stylesheet" type="text/css" href="admin/css/tablas.css"/>
<link rel="stylesheet" href="estilosReserva.css" type="text/css" media="screen" />

<script type="text/javascript" src="Busqueda/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="tour/css/stiloAddTour.css"/>
<script type="text/javascript" src="tour/js/ajax.js"></script>
<script type="text/javascript" src="tour/js/fly-to-basket.js"></script>

<script type="text/javascript" src="admin/js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" language="javascript" src="admin/js/jquery.dataTables.js"></script>
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
		<!--inicion cabesera-->
		<div class="top">
          <div class="split"><h1> </h1></div>
          <div class="split">
          <div class="logout"><img src="admin/gfx/icon-logout.gif" align="left" alt="Logout" /> <a href="logout.php">Salir</a></div>
          <div><img src="admin/gfx/icon-welcome.gif" align="left" alt="Welcome" /> Bienvenido <? echo($_SESSION['nombreEmple']); ?> </div>
          </div>
		</div>
		<!--fin cabesera-->  
		
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
     <!--fin  menu-->  
     
     	<div class="holder">		
			<div class="box">
            
				<div class="title">
					<h2>COBRO DE TOURS</h2>
					<img src="admin/gfx/title-hide.gif" class="toggle" alt="" />
				</div>
                
			<div class="content forms">
           
         <form name="frmactual" action="consultaTours.php" >
        <table border="0" cellpadding="0" cellspacing="0" class="tabla">
        <tr>
        
        <th class="modo">                      
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
             <label>FECHA:</label>
             <input name="fecha1" type="text" value="" class="datepicker" />
          </td>  
          <th class="modo">    	  
            <div class="pages-bottom">
                  <div class="actionbox">             
                   <button type="submit" name="btnConsultaTour" id="btnConsultaTour"><span>Realizar Consulta</span></button>            
                  </div>
              </div> 
           </td> 
          </tr>
        </table>     		
           </form>                 
        </div>
 <?
 if(isset($btnConsultaTour)){
	 //recuperando los atributos del tour aTRAVES DE SI ID
$Equipos=$instancia->ConsultaTour($comboTour);;
  $Nro=0;
  while ($Fila=mysql_fetch_array($Equipos))
  {
	  $Nro++;
	  $idreserva=$Fila[1];
  }
 echo "<META HTTP-EQUIV=refresh CONTENT=\"1;URL=tour-pdf.php?comboTour=$comboTour&fecha1=$fecha1&idreserva=$idreserva\">";
}
 ?>
                
	</div>       
</div>
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