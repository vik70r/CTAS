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
		<div class="split"><h1></h1></div>
		<div class="split">
		 <div class="logout"><img src="admin/gfx/icon-logout.gif" align="left" alt="Logout" /> <a href="logout.php">Salir</a></div>
		 <div><img src="admin/gfx/icon-welcome.gif" align="left" alt="Welcome" /> Bienvenido <? echo($_SESSION['nombreEmple']); ?></div>
		</div>
		</div>
		<!--fin cabecera--> 
		
		<!--[if !IE]> START MENU <![endif]-->  
		<div class="menu">
		  <ul>		    
				<center><strong>ACTUALIZANDO DATOS DE LA RESERVA DEL CLIENTE</strong></center>
          </ul>
        </div>
    <!--[if !IE]> END MENU <![endif]-->  
		
		<!--[if !IE]> START HOLDER <![endif]--> 
      <div class="holder" align="center"> 
      <form name="formulario6" action="Copi.php?idresrvasi='<? echo($HTTP_GET_VARS['idres']);?>'">
      <div class="row">
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" >
          <tbody>
            
        <tr class="gradeA">
         <td> <label>NOMBRES Y APELLIDOS</label>
         <input name="nombap" type="text" value="<? echo($HTTP_GET_VARS['nombre']); ?>" class="medium" disabled="disabled"/></td>
        </tr>
        
        <tr class="gradeA">
         <td>    
          <label>HORA DE SALIDA DEL CUSCO</label>
          <input name="hsalida" type="text" value="<? echo($HTTP_GET_VARS['hs']); ?>" class="medium"/> 
          </td>
        </tr>
        <tr class="gradeA">
         <td>    
          <label>HORA DE RETORNO DE MACHU PICCHU</label>
          <input name="hretorno" type="text" value="<? echo($HTTP_GET_VARS['hl']); ?>" class="medium"/> 
          </td>
        </tr>

         <tr class="gradeA">
         <td>  
          <label>OPCIONAL (Machupicchu, Huayna Picchu ,Machupicchu Montaña)</label>
          <textarea name="ropcional"  placeholder="Escriba la opcion de Machupicchu, Huayna Picchu ,Machupicchu Montaña" class="medium">
          <? echo($HTTP_GET_VARS['opcional']); ?>
          </textarea>  
         </td>
        </tr>
            
          <tr class="gradeA">
         <td>  
          <label>OBSERVACIONES (zip line, rafting, buses)</label>
          <textarea name="robservacion" placeholder="Escriba la opcion zip line, rafting, buses" class="medium">
          <? echo($HTTP_GET_VARS['observacion']); ?>
          </textarea>  
         </td>
        </tr>
        <tr class="gradeA">
         <td>    
           
            <button type="submit" name="BotonActualizar" id="BotonActualizar"><span>Guardar Cambios</span></button>
  
         </td>
        </tr>
        </tbody>
        </table>
        </div>
        </form>
	</div>
  <!--[if !IE]> FIN HOLDER <![endif]--> 
  
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