<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        {{ HTML::style('assets/css/bootstrap.min.css') }}
        <!-- Morris chart -->
        {{ HTML::style('assets/css/morris/font-awesome.min.css') }}
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


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <form class="form-box" id="login-box" action="check" method="POST" >
            
            <div class="header">Sign In </div>

                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Correo electrónico"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Contraseña"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Mantener la sesion iniciada
                    </div>
                    @if (Session::get('mensaje'))
                    <div style="color:red" text-align: rigth; >{{ Session::get('mensaje')}}</div>
                    @endif
                </div>
                <div class="footer">
                    <button type="submit" class="btn bg-olive btn-block">Iniciar Sesion</button>

                    <p><a href="#">¿Olvidaste tu Contraseña?</a></p>

                    <a href="inicio.html" class="text-center">Regresar a la pagina anterior?</a>
                </div>


            <div class="margin text-center">

            </div>
        </form>

        {{ HTML::script('assets/js/plugins/jquery.min.js') }}
        {{ HTML::script('assets/js/plugins/bootstrap.min.js') }}


    </body>
</html>