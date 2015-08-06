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
</head>

<body>
<div class="wrapper">
	<div class="container">
    
     <div id="header">
		<img src="images/cruz del sur 02.png" width="308" height="190" alt="Logo" />
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
        
		
		
		<div class="holder"> 
		<form id="comentForm" name="comentForm" method="post" action="insertEmpleado.php">
			<div class="box">
            
				<div class="title">
					<h2>NUEVA EMPLEADO</h2>
					<img src="admin/gfx/title-hide.gif" class="toggle" alt="" />
				</div>
                
				<div class="content forms">
                  <div class="row">
                       <label for="enombre">Nombre:</label>
                      <input name="enombre" type="text"  placeholder="Se Requiere un Nombre" required="required" autofocus="autofocus" value="" class="medium" />
                  </div>
                  <div class="row">
                      <label for="eapellido">Apellidos:</label>
                      <input name="eapellido" type="text" placeholder="Se Requiere un Apellido" required="required"  value="" class="medium" />
                  </div>
                  <div class="row">
                      <label for="edni">DNI:</label>
                      <input name="edni" type="text" placeholder="Nro de DNI" required="required" value="" class="medium" />
                  </div>
                  <div class="row">
                      <label for="edireccion">Direccion:</label>
                      <input name="edireccion" type="text" placeholder="Ingrese una Direccion" required="required" value="" class="medium" />
                  </div>
                 <div class="row">
                 <label>TIPO EMPLEADO:</label>
                <input type="radio" class="radio" name="ecargo" value="secretaria" checked="checked"/> <span>SECRETARIA</span>
                <input type="radio" class="radio" name="ecargo" value="administrador" /> <span>ADMINISTRADOR</span>
                 </div>
                  <div class="row">
                      <label for="etelefono">Telefono:</label>
                      <input name="etelefono" type="text" placeholder="Nro. de Telefono" required="required" value="" class="small" />
                  </div>
                  
                  	 <div class="row">
                      <label for="epassword">Password:</label>
                      <input name="epassword" type="text"  required="required" value="" class="small" />
                  </div>		
                  <div class="row buttons">
                      <button type="submit" name="BotonRegistro" id="BotonRegistro"><span>Registrar Empleado</span></button>
                  </div>
                </div>
			</div>
            </form>

		</div>
<?php
if(isset($_POST['BotonRegistro'])){	
	$instancia->MantenimientoTempleado("",$enombre,$eapellido,$edni,$edireccion,$etelefono,$ecargo,$epassword,$etipo,"I");
	}

 
?>		
		
	</div>
</div>
</body>
</html>

<?
}else{
	echo "<META HTTP-EQUIV=refresh CONTENT=\"1;URL=index.php\">";
	die();
	}
?>