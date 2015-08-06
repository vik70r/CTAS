@extends('layouts.base_admin')
@section('title')
Reserva de Boleto <small> NUEVA RESERVA </small>
@stop
@section('content')

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="assets/admin/css/c-grey.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/form.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/menu.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/messages.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/statics.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/style.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/style_text.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/tabs.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/wysiwyg-editor.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/wysiwyg.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/wysiwyg.modal.css"/>
<link rel="stylesheet" type="text/css" href="assets/admin/css/tablas.css"/>
<link rel="stylesheet" href="estilosReserva.css" type="text/css" media="screen" />

<script type="text/javascript" src="Busqueda/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="tour/css/stiloAddTour.css"/>
<script type="text/javascript" src="tour/js/ajax.js"></script>
<script type="text/javascript" src="tour/js/fly-to-basket.js"></script>

<script type="text/javascript" src="assets/admin/js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" language="javascript" src="assets/admin/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="wrapper">
		<div class="container">
    <div id="header">
		<img src="assets/princ/images/cta.gif" width="308" height="170" alt="Logo" />
	    
  	</div>
	
  <div class="holder"> 
      <div class="box">            
            
		
	  <div class="content tabs">
      
	 <!--inicio contenedor--> 				
	<div  class="tabdiv">
    
      <form name="frmbusqueda" action="" onsubmit="buscarDato(); return false">
       <div class="row">
          <span class="text"><strong>Buscar Cliente por Numero de Pasaporte:</strong></span>
          <input name="dato" type="text" value="" class="small" />                                                 
       </div>                        
       <div id="resultado"></div>
       </form>
       
       <form id="forma1" action="ReservaBoletoPaso2.php">
       <div class="row">
        <label>TIPO CLIENTE:</label>
         <input type="radio" class="radio" name="tipocliente" value="Adulto" /> <span>Adulto</span>
        <input type="radio" class="radio" name="tipocliente" value="Estudiante" checked="checked"/> <span>Estudiante</span>
        <input type="radio" class="radio" name="tipocliente" value="Adulto" /> <span>Infante</span>
       </div>
      
       <div class="row">
    <label>El TOURS INCLUYE:</label>
    <input name="guia" type="checkbox" value="si" class="datepicker"/><span>Guia</span>
    <input name="transporte" type="checkbox" value="si" class="datepicker"/><span>Transporte</span>
    <input name="alimentacion" type="checkbox" value="si" class="datepicker"/><span>Alimentacion</span>
   <br /> <br /> 
   <div class="form-group">
    {{ Form::label('cargo_id','cargo:',array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6 col-md-4">
      {{ Form::select('cargo_id',$cargos,null,array('class'=>'form-control'))}}
      
    </div>
    
  </div>
    <table border="1" cellpadding="0" cellspacing="0" class="tabla">
    <tr>
        <th class="modo">Nombre Hotel : </td>
        <th class="modo1"> 
        <select name="combohotel" >
        <option value='Ninguno'>Ninguno</option>
         <?php	
        //$B_BUSCAR= $instancia->mostrarTabla("THOTEL");
        //$R_BUSCAR=mysql_fetch_assoc($B_BUSCAR);
        //$C_BUSCAR=mysql_num_rows($B_BUSCAR);
        //$suma=0;
        //do{ ++$suma;
        //echo "<option value='".$R_BUSCAR['idhotel']."'>".$R_BUSCAR['hnombre']."</option>";
        //}while($R_BUSCAR=mysql_fetch_assoc($B_BUSCAR));
        ?>     
        </select>
        </th>
    </tr>
    <tr>
        <th class="modo">Tipo de Bagon : </td>
        <th class="modo1"> 
        <select name="combotren" class="">
          <option value="Ninguno">Ninguno</option>
          <option value="EXPEDITION">EXPEDITION</option>
          <option value="VISTADONE">VISTADONE</option>
          <option value="AUTOVAGON">AUTOVAGON</option>
          <option value="HIRAM BINGHAN">HIRAM BINGHAN</option>
          <option value="ANDEAN EXPLORE">ANDEAN EXPLORE</option>
        </select>
         </td> 
    </tr>
    <tr>
        <th class="modo">Entrada a Machu Picchu : </td>
        <th class="modo1">
        <select name="comboentrada" class="">
          <option value="Ninguno">Ninguno</option>
          <option value=" MACHUPICCHU"> MACHUPICCHU</option>
          <option value=" MACHUPICCHU, MUSEO"> MACHUPICCHU, MUSEO</option>
          <option value=" MACHUPICCHU, HUAYNAPICCHU 1 GRUPO"> MACHUPICCHU, HUAYNAPICCHU 1 GRUPO</option>
          <option value=" MACHUPICCHU, HUAYNAPICCHU 2 GRUPO"> MACHUPICCHU, HUAYNAPICCHU 2 GRUPO</option>                      
          <option value=" MACHUPICCHU, MONTANA"> MACHUPICCHU, MONTANA</option>                                	
        </select>
        </td> 
    </tr>
    <tr >
        <th class="modo">Hora Salida : </td>
        <th class="modo1"> 
        <select name="comboHSalida" class="">
          <option value="Ninguno">Ninguno</option>
          <option value=" 5:10 am"> 5:10 am</option>
          <option value=" 6:10 am"> 6:10 am</option>
          <option value=" 7:45 am"> 7:45 am</option>
          <option value=" 12:58 pm"> 12:58 pm</option>                      
          <option value=" 19:00 pm"> 19:00 pm</option>   
          <option value=" 20:00 pm"> 20:00 pm</option>                                	
        </select>
        </td> 
    </tr>
    <tr>
        <th class="modo">Hora Retorno : </td>
        <th class="modo1"> 
        <select name="comboHRetorno" class="">
          <option value="Ninguno">Ninguno</option>
          <option value=" 5:35 am"> 5:35 am</option>
          <option value=" 8:53 am"> 8:53 am</option>
          <option value=" 14:55 pm"> 14:55 pm</option>
          <option value=" 16:22 pm"> 16:22 pm</option>                      
          <option value=" 18:45 pm"> 18:45 pm</option>   
          <option value=" 21:30 pm"> 21:30 pm</option>                                	
         </select>
        </td> 
    </tr>
    </table>
    </div> 
      <div class="row">
    	  <label>FECHA DEL TOURS</label>
          <span class="text"><strong>Fecha Salida Tours:</strong></span>
          <input name="fecha1" type="text" value="" class="datepicker" />
          <span class="text"><strong>Fecha Llegada Tours:</strong></span>
          <input name="fecha2" type="text" value="" class="datepicker" />
      </div>
     
     <div class="row">
    <label>TOURS OPCIONAL:</label>
    <input name="O1" type="checkbox" value="Machupicchu" class="datepicker"/><span>Machupicchu</span>
    <input name="02" type="checkbox" value="Huayna Picchu" class="datepicker"/><span>Huayna Picchu</span>
    <input name="03" type="checkbox" value="Machupicchu Montaña" class="datepicker"/><span>Machupicchu Montaña</span>
    </div>
     <div class="row">
    <label>OBSERVACIONES DEL TOURS :</label>
     <textarea name="mensaje" placeholder="Escriba la opcion zip line, rafting, buses" class="medium"></textarea>  
    </div>
     <div class="row">
       <div class="pages-bottom">
              <div class="actionbox">
                <button type="submit" name="btnReserva" id="btnReserva" ><span>Generar Reserva</span></button>
              </div>
        </div>	
       </div>
    </form>
     
 
 
	

	
	<div class="clear"></div>	
</div>
 <!--fin row--> 	

 </div>
                                        
    </div>	
	</div>
    <!--fin ventana holder y  box--> 
    
    </div>
</div>
<script type="text/javascript" src="assets/admin/js/date.js"></script>
<script type="text/javascript" src="assets/admin/js/hoverIntent.js"></script>
<script type="text/javascript" src="assets/admin/js/jquery.datepicker.js"></script>
<script type="text/javascript" src="assets/admin/js/jquery.filestyle.mini.js"></script>
<script type="text/javascript" src="assets/admin/js/jquery.filestyle.mini.js"></script>
<script type="text/javascript" src="assets/admin/js/jquery.flot.js"></script>
<script type="text/javascript" src="assets/admin/js/jquery.graphtable-0.2.js"></script>
<script type="text/javascript" src="assets/admin/js/jquery.pngFix.js"></script>
<script type="text/javascript" src="assets/admin/js/jquery.sparkbox-select.js"></script>
<script type="text/javascript" src="assets/admin/js/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="assets/admin/js/jquery-ui.js"></script>
<script type="text/javascript" src="assets/admin/js/superfish.js"></script>
<script type="text/javascript" src="assets/admin/js/supersubs.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/wysiwyg.rmFormat.js"></script>
<script type="text/javascript" src="assets/admin/js/controls/wysiwyg.link.js"></script>
<script type="text/javascript" src="assets/admin/js/controls/wysiwyg.table.js"></script>
<script type="text/javascript" src="assets/admin/js/controls/wysiwyg.image.js"></script>
<script type="text/javascript" src="assets/admin/js/inline.js"></script>
</body>
</html>
<?
}else{
	echo "<META HTTP-EQUIV=refresh CONTENT=\"1;URL=index.php\">
@stop