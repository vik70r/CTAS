
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
		<img src="images/hoteles5.jpg" width="308" height="200" alt="Logo" />
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
		<form id="comentForm" name="comentForm" method="post" action="insertHotel.php">
			<div class="box">
            
				<div class="title">
					<h2>NUEVA HOTEL</h2>
					<img src="admin/gfx/title-hide.gif" class="toggle" alt="" />
				</div>
                
				<div class="content forms">
                  <div class="row">
                       <label for="nombre">Razon Social:</label>
                      <input name="nombre" type="text"  placeholder="Nombre De Hotel" required="required" autofocus="autofocus" value="" class="medium" />
                  </div>
                  <div class="row">
                      <label for="direccion">Direccion:</label>
                      <input name="direccion" type="text" placeholder="ingrese la direccion" required="required"  value="" class="medium" />
                  </div>
                  <div class="row">
                      <label for="categoria">Categoria:</label>
                      <select name="categoria" class="">
                      <option value="HOSTAL">HOSTAL</option>
                      <option value="HOSPEDAJE">HOSPEDAJE</option>
                      <option value="MINI DEPARTAMENTO">MINI DEPARTAMENTO</option>
                      <option value="1 ESTRELLAS">1 ESTRELLAS</option>
                      <option value="2 ESTRELLAS">2 ESTRELLAS</option>
                      <option value="3 ESTRELLAS">3 ESTRELLAS</option>
                      <option value="4 ESTRELLAS">4 ESTRELLAS</option>
                      <option value="5 ESTRELLAS">5 ESTRELLAS</option>
                    </select>
                  </div>
                  <div class="row">
                      <label for="telefono">Telefono:</label>
                      <input name="telefono" type="text" placeholder="Nro. Telefono" required="required" value="" class="small" />
                  </div>
                  
                  <div class="row">
                      <label for="descripcion">Descripcion:</label>
                      <input name="descripcion" type="text" placeholder="descripcion del hotel" required="required" value="" class="small" />
                  </div>			
                  <div class="row buttons">
                      <button type="submit" name="BotonRegistro" id="BotonRegistro"><span>Registrar Hotel</span></button>
                  </div>
                </div>
			</div>
            </form>

		</div>
<?php
if(isset($_POST['BotonRegistro'])){	
	$instancia-> MantenimientoTHotel("",$nombre,$direccion,$categoria,$telefono,$descripcion,"I");
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