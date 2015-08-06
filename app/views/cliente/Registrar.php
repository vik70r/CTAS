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
		<img src="images/tepsa_bus.jpg" width="308" height="170" alt="Logo" />
	  <h1> Reserva de Viajes <br />
		<span>  </span><br />
		<span style="color: #000000"><img src="images/logotepsa.jpg" width="364" height="82" alt="Logo" /></span></h1>
  	</div>
		<!--[if !IE]> START TOP <![endif]-->
		<div class="top">
			<div class="split"><h1>Relación de Reservas</h1></div>
			<div class="split">
				<div class="logout"><img src="/admin/gfx/icon-logout.gif" align="left" alt="Logout" /> <a href="/admin/logout.php">Salir</a></div>
				<div><img src="/admin/gfx/icon-welcome.gif" align="left" alt="Welcome" /> Bienvenido Liliana, Puma</div>
			</div>
		</div>
		<!--[if !IE]> END TOP <![endif]-->  
		
		<!--[if !IE]> START MENU <![endif]-->  
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
		<!--[if !IE]> END MENU <![endif]-->  
		
		<!--[if !IE]> START HOLDER <![endif]--> 
		<div class="holder"> 
			<!--[if !IE]> START LEFT BOX <![endif]-->
			<form id="comentForm" name="comentForm" method="post" action="addreservation_procesar.php">
			<div class="box">
				<div class="title">
					<h2>NUEVA RESERVA</h2>
					<img src="admin/gfx/title-hide.gif" class="toggle" alt="" />
				</div>
				<div class="content forms">
						<div class="row">
							<label>Lead Client Name:</label>
							<input name="name" type="text" value="" class="medium" />
						</div>
						<div class="row">
							<label>Number Pax:</label>
							<input name="npax" type="text" value="" class="small" />
						</div>
						<div class="row">
							<label>Tour Name:</label>
							<input name="tourname" type="text" value="" class="medium" />
						</div>
						<div class="row">
							<label>Date:</label>
							<span class="date">Date Arrival:</span> <input name="datea" type="text" value="" class="datepicker" />
							<span class="date">Date Departure:</span> <input name="dateb" type="text" value="" class="datepicker" />                            
						</div>
						<div class="row">
							<label>Facturar a Nombre de:</label>
							<input name="facturar" type="text" value="" class="medium" />
						</div>

						<div class="row buttons">
							<button type="submit"><span>Procesar</span></button>
						</div>
                </div>
			</div>
            </form>
			<!--[if !IE]> END LEFT BOX <![endif]-->  
			<!--[if !IE]> START LEFT BOX <![endif]--> 
		</div>
		
		<!--[if !IE]> START FOOTER <![endif]--> 
		<div class="footer">
			<div class="split">&#169; Copyright <a href="http://www.inkatrailmachupicchu.net">Todo Los Derechos Reservados</a></div>
			<div class="split right">Hecho por yo</div>
		</div>
		<!--[if !IE]> END FOOTER <![endif]--> 
		
	</div>
</div>
<script type="text/javascript" src="admin/js/date.js"></script>
<script type="text/javascript" src="admin/js/hoverIntent.js"></script>
<script type="text/javascript" src="admin/js/jquery.datepicker.js"></script>
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