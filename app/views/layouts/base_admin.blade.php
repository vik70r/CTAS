<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administración | CTA</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {{ HTML::style('assets/css/bootstrap.min.css') }}
        {{ HTML::style('assets/css/font-awesome.min.css') }}
      
        {{ HTML::style('assets/css/ionicons.min.css') }}
        <!-- Morris chart -->
        {{ HTML::style('assets/css/morris/morris.css') }}
        <!-- jvectormap -->
        {{ HTML::style('assets/css/jvectormap/jquery-jvectormap-1.2.2.css') }}
        <!-- Date Picker -->
        {{ HTML::style('assets/css/datepicker/datepicker3.css') }}
        <!-- Daterange picker -->
        {{ HTML::style('assets/css/daterangepicker/daterangepicker-bs3.css') }}
        <!-- bootstrap wysihtml5 - text editor -->
        {{ HTML::style('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}
        <!-- Theme style -->
        {{ HTML::style('assets/css/AdminLTE.css') }}

        {{ HTML::script('assets/js/jquery.min.js') }}
      

    </head>

    <body class="skin-blue">
        <header class="header">
            <a href="#" class="logo">Administrador</a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
													{{ HTML::image('assets/img/avatar4.png','User Image',array('class'=>'img-circle')) }}
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    {{ HTML::image('assets/img/VIK.png','User Image',array('class'=>'img-circle')) }}
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    {{ HTML::image('assets/img/avatar.png','User Image',array('class'=>'img-circle')) }}
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{Auth::user()->email}} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
									{{ HTML::image('assets/img/VIK.png','User Image',array('class'=>'img-circle')) }}
                                    <p>
                                        Viktor - Administrador
                                        
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Carpetas</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Amigos</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        {{ HTML::link('agencia/profile/12345','Profile',array('class'=>'btn btn-default btn-flat')) }}
                                    </div>
                                    <div class="pull-right">
                                        {{ HTML::link('salir','Sign out', array('class'=>'btn btn-default btn-flat')) }}
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
							{{ HTML::image('assets/img/VIK.png','User Image',array('class'=>'img-circle')) }}
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Viktor</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Inicio</span>
                            </a>
                        </li>

                        

						<li class ="treeview">
                            <a href="personal">
                                <i class="fa fa-folder"></i> <span>Personal</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                            <ul class="treeview-menu">
                                <li>{{ HTML::link('personal/add.html','Agregar') }}</li>
                                
                                <li>{{ HTML::link('personal','Listar Personal') }}</li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="agencia">
                                <i class="fa fa-folder"></i> <span>agencia</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>{{ HTML::link('agencia/add.html','Agregar') }}</li>
                                
                                <li>{{ HTML::link('agencias','Listar agencias') }}</li>                        
                                
                            </ul>
                        </li>

                         

                        <li class="treeview">
                            <a href="cliente">
                                <i class="fa fa-folder"></i> <span>cliente</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>{{ HTML::link('personal/addC.html','Agregar') }}</li>
                                <li>{{ HTML::link('clientes','Listar clientes') }}</li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="personal">
                                <i class="fa fa-folder"></i> <span>Hotel</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>{{ HTML::link('hotel/add.html','Agregar Hotel') }}</li>
                                <li>{{ HTML::link('hotels','Listar Hoteles') }}</li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="personal">
                                <i class="fa fa-folder"></i> <span>Guia</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>{{ HTML::link('guia/add.html','Agregar Guia') }}</li>
                                <li>{{ HTML::link('guias','Listar Guias') }}</li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="personal">
                                <i class="fa fa-folder"></i> <span>Tour</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>{{ HTML::link('tour/add.html','Agregar Tour') }}</li>
                                <li>{{ HTML::link('tours','Listar Tours') }}</li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="personal">
                                <i class="fa fa-folder"></i> <span>Reservas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>{{ HTML::link('reservaBoleto.html','Reservar Boleto') }}</li>
                                <li>{{ HTML::link('tours','Listar Tours') }}</li>
                            </ul>
                        </li>

                        <!-- Servicio Asistencias -->
                        
                        <li class="treeview">
                            <a href="agencia">
                                <i class="glyphicon glyphicon-briefcase"></i> <span>Modalidad de Pago</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><i class="glyphicon glyphicon-plus"></i> {{ HTML::link('/modalidad/create','Agregar') }}</li>
                                <li><i class="glyphicon glyphicon-search"></i>{{ HTML::link('#','Buscar') }}</li>
                                <li><i class="glyphicon glyphicon-list-alt"></i>{{ HTML::link('/modalidad','Listar') }}</li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="pagos">
                                <i class="glyphicon glyphicon-euro"></i> <span>Caja y Facturación</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><i class="glyphicon glyphicon-plus"></i> {{ HTML::link('/pagos/create','Realizar Pago') }}</li>
                                <li><i class="glyphicon glyphicon-search"></i>{{ HTML::link('/pagos/search_pagos','Buscar') }}</li>
                                <li><i class="glyphicon glyphicon-list-alt"></i>{{ HTML::link('/pagos','Listar') }}</li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Mantenimientos TL</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>{{HTML::linkAction('DiaController@index', 'Dia')}}</li>
                                <li>{{HTML::linkAction('GrupoController@index', 'Grupo')}}</li>
                                <li>{{HTML::linkAction('ServicioController@index', 'Servicio')}}</li>
                                <li>{{HTML::linkAction('TurnoController@index', 'Turno')}}</li>
                            </ul>
                        </li>

                    </ul>
					<p align="center"><a class="navbar-brand" href="index.html"><img src="http://localhost:8080/TRAVEL/public/assets/foto/logo2.gif" alt="logo"></a>
                    <footer>
                     <p align="center"><b><font face="Arial Unicode MS">
        <font size="1" color="#000000"> <br><br><br><br>Oficina Principal CUSCO: Urb. Progreso A-14 /
        Telefax: (0051 84) 22 63 13 / Celular : (00 
        51) - 944 823220
        </font> <font size="2"><font color="#000000">
             </font>
        <a href="mailto:info@cuscoturismo.com"><font color="#842908">
        reservas@cuscoturismoperu.com</font></a></font></font></b>
            </p>
                
          
        </footer></p>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>@section('title') PANEL CONTROL<small> </small>@show</h1>
                    <ol class="breadcrumb">
                        @section('breadcrumb')
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"> Dashboard</li>
                        @show
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                @if (Session::get('mensaje'))
                    <div class="alert alert-success">{{ Session::get('mensaje')}}</div>
                @endif
				@yield('content')
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- add new calendar event modal -->
        {{ HTML::script('assets/js/bootstrap.min.js') }}
        {{ HTML::script('assets/js/jquery-ui.min.js') }}
        <!-- Morris.js charts -->
        {{ HTML::script('assets/js/raphael-min.js') }}
        {{ HTML::script('assets/js/plugins/morris/morris.min.js') }}
        <!-- Sparkline -->
        {{ HTML::script('assets/js/plugins/sparkline/jquery.sparkline.min.js') }}
        <!-- jvectormap -->
        {{ HTML::script('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
        {{ HTML::script('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
        <!-- jQuery Knob Chart -->
        {{ HTML::script('assets/js/plugins/jqueryKnob/jquery.knob.js') }}
        <!-- daterangepicker -->
        {{ HTML::script('assets/js/plugins/daterangepicker/daterangepicker.js') }}
        <!-- datepicker -->
        {{ HTML::script('assets/js/plugins/datepicker/bootstrap-datepicker.js') }}
        <!-- Bootstrap WYSIHTML5 -->
        {{ HTML::script('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
        <!-- iCheck -->
        {{ HTML::script('assets/js/plugins/iCheck/icheck.min.js') }}
        <!-- AdminLTE App -->
        {{ HTML::script('assets/js/AdminLTE/app.js') }}
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        {{ HTML::script('assets/js/AdminLTE/dashboard.js') }}
        <!-- AdminLTE for demo purposes -->
        {{ HTML::script('assets/js/AdminLTE/demo.js ') }}

    </body>
</html>
