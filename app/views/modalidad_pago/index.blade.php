@extends('layouts.base_admin')
@section('title')
Lista de Servicios
@stop
@section('content')
	{{ HTML::link('servicio/nuevo.html','Agregar Nuevo servicio') }}
	<form>
		<div class="input-group input-group-sm">
			<input class="form-control" type="text"></input>
			<span class="input-group-btn">
				<button class="btn btn-info btn-flat" type="button" >Buscar</button>
			</span>
		</div>
	</form>
	<ul>
	@foreach( $servicios as $servicio)
	<li><a href="#">{{ $servicio->id }} {{ $servicio->nombre }} </a> <a href="#">Eliminar</a> | <a href="#actualizar">Actualizar</a></li>
	@endforeach
	</ul>
@stop
