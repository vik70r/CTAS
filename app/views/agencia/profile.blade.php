@extends('layouts.base_'.Str::lower(Auth::user()->tipoUsuario))
@section('title')
Perfil <small>agencia</small>
@stop
@section('breadcrumb')
<li>{{$agencia->nombre}}</li>
@stop
@section('content')
<div class="row">
	<div class="col-lg-3">
		{{ HTML::image('assets/foto/'.$agencia->foto,'User Image',array('class'=>'')) }}
		<p align="center"><b>código:</b>{{ $agencia->id }}</p>
		<p>{{ HTML::link('agencia/imagen/'.$agencia->id,'Cambiar Imagen') }} </p>
	</div>
	<div class="col-lg-7">
		<p>{{ HTML::link('agencia/edit/'.$agencia->id,'Editar') }} {{ HTML::link('agencia/change-pass/'.$agencia->id,'Cambiar Contraseña') }}</p>
		
		<p><b>Nombre:</b> {{ $agencia->nombre }}</p>
		<p><b>Dirección:</b> {{ $agencia->direccion }}</p>
		<p><b>Teléfono:</b> {{ $agencia->telefono}}</p>
		<p><b>E-mail:</b> {{ $agencia->email }}</p>
		<p><b>Estado:</b> {{ $agencia->estado }}</p>
	</div>
</div>
@stop
