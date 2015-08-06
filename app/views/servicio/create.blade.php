@extends('layouts.base_admin')
@section('title')
MATENIMIENTO DE servicio
@stop

@section('breadcrumb')
    <li class="active todos"><i class="fa fa-fw fa-th-list"></i>{{HTML::linkAction('ServicioController@index', 'Todos')}}</li>
    <li class="nuevo"><i class="fa fa-fw fa-plus"></i>Nuevo</li>
@stop
@section('content')
<div>
    @if(Session::has('message'))
        <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
    @endif
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <div class="box">
            <div class="panel panel-success">
                <div class="panel-body" align="">
                    <div class="panel-default" align="center">
                        <h3 class="text-muted" align="center">Nuevo servicio</h3>
                    </div>
                    <section class="content">
                        <ul>
                            {{ Form::open(array('url' => 'servicio')) }}
                             <input title="Se necesita un nuevo servicio" type="text" name="nombre" pattern="^[a-zA-Z]*$" required/> <br/>
                            <br/>
                            {{ Form::submit('Guardar')}}
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            {{HTML::linkAction('ServicioController@index', 'Cancelar')}}
                            {{ Form::close()}} 
                        </ul>
                    </section><!-- /.content -->
                </div>
            </div>
        </div>
    </div>
</div>
@stop