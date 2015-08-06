@extends('layouts.base_admin')
@section('title')
Perfil <small>cliente</small>
@stop
@section('breadcrumb')
<li>{{$cliente->nombre}}</li>
@section('content')
<div class="row">
	<div class="col-lg-3">
		{{ HTML::image('assets/foto/'.$cliente->foto,'User Image',array('class'=>'')) }}
		<p align="center"><b>código:</b>{{ $cliente->codCliente }}</p>
		<p>{{ HTML::link('cliente/imagen/'.$cliente->id,'Cambiar Imagen') }}</p>
	</div>
	<div class="col-lg-7">
		
		<p><b>Nombre:</b> {{ $cliente->nombre }}</p>
		<p><b>Apellidos:</b> {{ $cliente->apellidos }}</p>
		<p><b>Tipo Documento:</b> {{ $cliente->tipodocumento}}</p>
		<p><b>Documento Nro:</b> {{ $cliente->documento}}</p>
		<p><b>Ciudad:</b> {{ $cliente->ciudad}}</p>
		<p><b>Pais:</b> {{ $cliente->pais}}</p>
		<p><b>Teléfono:</b> {{ $cliente->telefono}}</p>
		<p><b>E-mail:</b> {{ $cliente->email }}</p>
		<?php 
			if($cliente->estado == 0 ){
		?> 
				<p><b>Estado:</b> Inactivo</p>
		<?php 
			}
			else{
		?> 
				<p><b>Estado:</b> Activo</p>
		<?php 
			}
		?> 
	</div>
</div>
@stop