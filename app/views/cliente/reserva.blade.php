<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Paquetes</title>
    <link href="assets/princ/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/princ/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/princ/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/princ/css/animate.min.css" rel="stylesheet">
    <link href="assets/princ/css/main.css" rel="stylesheet">
    <link href="assets/princ/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
        <link rel="shortcut icon" href="assets/princ/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/princ/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/princ/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/princ/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/princ/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">

                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="inicio.html"><img src="assets/princ/images/CTA1.GIF" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="inicio.html">Inicio</a></li>
                        <li><a href="about-us.html">Nosotros</a></li>
                        <li><a href="services.html">Servicios</a></li>
                        <li class="active"><a href="paquetes.html">Paquetes</a></li>
                        
                        <li><a href="blog.html">Blog</a></li> 
                        <li><a href="login">Login</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
   
    <section id="recent-works">
        <div class="container">
         <div class="center wow fadeInDown">
                <h2>DATOS REQUERIDOS</h2>
               
<div id="planyo_content" class="planyo"><div id="reservation_code">

<div class="reservation_steps"><span style="display:inline-block;" class="reservation_step_current reservation_step_1"><div class="reservation_step_img"><div class="reservation_step_img_text"><strong>1</strong></div></div><div class="reservation_step_name">Detalles de Reserva</div></span><span style="display:inline-block;" class="reservation_step reservation_step_2"><div class="reservation_step_img"><div class="reservation_step_img_text"><strong>2</strong></div></div><div class="reservation_step_name">Productos adicionales</div></span><span style="display:inline-block;" class="reservation_step reservation_step_3"><div class="reservation_step_img"><div class="reservation_step_img_text"><strong>3</strong></div></div><div class="reservation_step_name">Verificación de dirección email</div></span><span style="display:inline-block;" class="reservation_step reservation_step_4"><div class="reservation_step_img"><div class="reservation_step_img_text"><strong>4</strong></div></div><div class="reservation_step_name">Reserva terminada</div></span></div>



            </div>
            <div class="col-xs-12 col-sm-12">
{{ Form::open(array('method'=> 'POST','url'=> 'cliente/insert.html','class'=>'form-horizontal','role'=>'form')) }}
  
  <div class="form-group">
    {{ Form::label('nombre','Nombre(s):',array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6 col-md-4">
      {{ Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Viktor' ))}}
    </div>
    <div class="errores">
      @if ( $errors->has('nombre'))
            @foreach ($errors->get('nombre') as $error)
          <div class="alert alert-danger">* {{ $error }}</div>
          @endforeach
      @endif
    </div>
  </div>
  <div class="form-group ">
    {{ Form::label('apellidos','Apellidos:',array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6 col-md-4">
      {{ Form::text('apellidos','',array('class'=>'form-control','placeholder'=>'Cuba Gamarra'))}}
    </div>
    <div class="errores">
      @if ( $errors->has('apellidos'))
            @foreach ($errors->get('apellidos') as $error)
          <div class="alert alert-danger">* {{ $error }}</div>
          @endforeach
      @endif
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('tipodocumento','Tipo Documento:',array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6 col-md-4">
      {{ Form::text('tipodocumento','',array('class'=>'form-control','placeholder'=>'12345678'))}}
    </div>
    <div class="errores">
      @if ( $errors->has('tipodocumento'))
            @foreach ($errors->get('tipodocumento') as $error)
          <div class="alert alert-danger">* {{ $error }}</div>
          @endforeach
      @endif
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('documento','Documento:',array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6 col-md-4">
      {{ Form::text('documento','',array('class'=>'form-control','placeholder'=>'12345678'))}}
    </div>
    <div class="errores">
      @if ( $errors->has('documento'))
            @foreach ($errors->get('documento') as $error)
          <div class="alert alert-danger">* {{ $error }}</div>
          @endforeach
      @endif
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('email','E-mail:',array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6 col-md-4">
      {{ Form::email('email','',array('class'=>'form-control','placeholder'=>'correo@unsaac.edu.pe'))}}
    </div>
    <div class="errores">
      @if ( $errors->has('email'))
            @foreach ($errors->get('email') as $error)
          <div class="alert alert-danger">* {{ $error }}</div>
          @endforeach
      @endif
    </div>
  </div>
  
  <div class="form-group">
    {{ Form::label('telefono','Teléfono:',array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6 col-md-4">
      {{ Form::text('telefono','',array('class'=>'form-control','placeholder'=>'12345678'))}}
    </div>
    <div class="errores">
      @if ( $errors->has('telefono'))
            @foreach ($errors->get('telefono') as $error)
          <div class="alert alert-danger">* {{ $error }}</div>
          @endforeach
      @endif
    </div>
  </div>

  <div class="form-group">
    {{ Form::label('ciudad','Ciudad:',array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6 col-md-4">
      {{ Form::text('ciudad','',array('class'=>'form-control','placeholder'=>'Cusco'))}}
    </div>
    <div class="errores">
      @if ( $errors->has('ciudad'))
            @foreach ($errors->get('ciudad') as $error)
          <div class="alert alert-danger">* {{ $error }}</div>
          @endforeach
      @endif
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('pais','Pais:',array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6 col-md-4">
      {{ Form::text('pais','',array('class'=>'form-control','placeholder'=>'Peru'))}}
    </div>
    <div class="errores">
      @if ( $errors->has('pais'))
            @foreach ($errors->get('pais') as $error)
          <div class="alert alert-danger">* {{ $error }}</div>
          @endforeach
      @endif
    </div>
  </div>
  


  <div class="form-group">
    <div class="col-xs-12 col-sm-3">
      <button class="btn btn-info btn-block" type="reset">Cancelar</button>
    </div>
    <div class="col-xs-12 col-sm-3">
      <button class="btn btn-info btn-block" type="submit">Guardar</button>
    </div>
  </div>
  </div>
{{Form::close()}}




<fieldset id="reservation_details"><legend>Detalles de reserva</legend><ul><li id="row_resource_name" class="fld_single"><label for="resource_name">Recurso</label><span id="resource_name" class="freeform_contents">NOMBRE DE LUGAR</span></li><input type="hidden" value="29" id="resource_id" name="resource_id">

  <div style="position:absolute;visibility:hidden;z-index:1000;" class="picker_dropdown title_inside" id="start_datecal" onmousedown="var e=arguments[0] || window.event;e.stopPropagation();" onclick="var e=arguments[0] || window.event;e.stopPropagation();"></div>
    <script type="text/javascript">
          planyo_set_event(document.getElementById('start_datecal'), 'click', 'planyo_dummy',false); 
                      document.first_weekday=1;
    </script>
    
  <li id="row_start_date" class="fld_single"><div id="par_start_date" class="float-label-parent float-label-text-parent par_start_date"><label id="lab_start_date" style="visibility:hidden" for="start_date">Fecha de Inicio<em>*</em></label><input type="text" id="start_date" name="start_date" value="" onchange="planyo_dates_changed();" onfocus="planyo_close_calendar();document.active_float_date='start_date';planyo_show_calendar('start_date','planyo_float_date_changed();');" onmousedown="var e=arguments[0] || window.event;e.stopPropagation();" onclick="var e=arguments[0] || window.event;e.stopPropagation();" placeholder="Fecha de Inicio*" onblur="update_float_label_focus('start_date',0);" onkeyup="update_float_label('start_date');"></div>

  <script type="text/javascript">
function planyo_float_date_changed() {
  if(document.active_float_date)update_float_label(document.active_float_date);
  if(window.planyo_dates_changed)planyo_dates_changed();
}

function update_float_label(item_name) {
  var item=document.getElementById(item_name);
  var label=document.getElementById('lab_'+item_name);
  if(item && label) {
    label.style.visibility = item.value && item.value.length>0 ? 'visible' : 'hidden';
  }
}
</script>


<div class="float-date-icon" onmousedown="planyo_close_calendar();var e=arguments[0] || window.event;e.stopPropagation();" onclick="var e=arguments[0] || window.event;e.stopPropagation();" onmouseup="document.active_float_date='start_date';planyo_show_calendar('start_date','planyo_float_date_changed();');" id="start_datecalref"></div>
<div style="clear:both"></div></li>  <div style="position:absolute;visibility:hidden;z-index:1000;" class="picker_dropdown title_inside" id="end_datecal" onmousedown="var e=arguments[0] || window.event;e.stopPropagation();" onclick="var e=arguments[0] || window.event;e.stopPropagation();"></div>
    <script type="text/javascript">
          planyo_set_event(document.getElementById('end_datecal'), 'click', 'planyo_dummy',false); 
                      document.first_weekday=1;
    </script>
  <li id="row_end_date" class="fld_single"><div id="par_end_date" class="float-label-parent float-label-text-parent par_end_date">

  <label id="lab_end_date" style="visibility:hidden" for="end_date">Fecha de Término<em>*</em></label>

  <input type="text" id="end_date" name="end_date" value="" onchange="planyo_dates_changed();" onfocus="planyo_close_calendar();document.active_float_date='end_date';planyo_show_calendar('end_date','planyo_float_date_changed();');" onmousedown="var e=arguments[0] || window.event;e.stopPropagation();" onclick="var e=arguments[0] || window.event;e.stopPropagation();" placeholder="Fecha de Término*" onblur="update_float_label_focus('end_date',0);" onkeyup="update_float_label('end_date');"></div>



  <div class="float-date-icon" onmousedown="planyo_close_calendar();var e=arguments[0] || window.event;e.stopPropagation();" onclick="var e=arguments[0] || window.event;e.stopPropagation();" onmouseup="document.active_float_date='end_date';planyo_show_calendar('end_date','planyo_float_date_changed();');" id="end_datecalref"></div><div style="clear:both"></div></li>

  <input type="hidden" value="full_day" id="time_mode" name="time_mode"><input type="hidden" value="1" id="quantity" name="quantity"><input type="hidden" value="" id="reminder" name="reminder"></ul></fieldset>




<input type="hidden" value="true" id="submitted_field" name="submitted"></form>
</div>

<link rel="stylesheet" href="http://www.planyo.es/schemes/?calendar=11&amp;ver=1436197322&amp;sel=scheme_css" type="text/css">

  
    <script src="http://www.planyo.com/Plugins/PlanyoFiles/planyo-jquery-utils.js" type="text/javascript"></script>
    <script src="http://www.planyo.com/Plugins/PlanyoFiles/planyo-jquery-reservations.js" type="text/javascript"></script>
    

    </section><!--/#recent-works-->

 
    


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">VIK70R</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                      <li><a href="login">Login</a></li>  
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="assets/princ/js/jquery.js"></script>
    <script src="assets/princ/js/bootstrap.min.js"></script>
    <script src="assets/princ/js/jquery.prettyPhoto.js"></script>
    <script src="assets/princ/js/jquery.isotope.min.js"></script>
    <script src="assets/princ/js/main.js"></script>
    <script src="assets/princ/js/wow.min.js"></script>


  

</body>
</html>
