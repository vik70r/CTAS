@extends('layouts.base_admin')
@section('title')
MATENIMIENTO DE servicio
@stop

@section('breadcrumb')
  <li class="active todos"><i class="fa fa-th-list"></i>{{HTML::linkAction('ServicioController@index', 'Todos')}}</li>
  <li class="nuevo"><i class="fa fa-plus"></i>{{HTML::linkAction('ServicioController@create', 'Nuevo')}}</li>
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
                        <h3 class="text-muted" align="center">Editar Grupo {{ $servicio -> nombre }}</h3>
                    </div>
                <section class="content">
                    <ul>
                  {{ Form::open(array('url' => 'servicio/' . $servicio->id, 'method' =>'put')) }}
                   <input title="Se necesita un nuevo servicio" type="text" name="nombre" pattern="^[a-zA-Z]*$" required/> <br/>
                  <br/>
                  {{ Form::submit('Modificar')}} 
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