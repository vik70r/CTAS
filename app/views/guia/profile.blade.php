@extends('layouts.base_admin')
@section('title')
Perfil <small>guia</small>
@stop
@section('breadcrumb')
<li>{{$guia->nombre}}</li>
@section('content')
<div class="row">
	<div class="col-lg-3">
		<p align="center"><b>código:</b>{{ $guia->idguia }}</p>
		
	</div>
	<div class="col-lg-7">
		
		<p><b>Nombre:</b> {{ $guia->gnombre }}</p>
		<p><b>Apellidos:</b> {{ $guia->gapellido }}</p>
		<p><b>Sexo:</b> {{ $guia->gsexo }}</p>
		<p><b>Teléfono:</b> {{ $guia->gtelefono}}</p>
		<p><b>Descripcion:</b> {{ $guia->gdescripcion }}</p>
		
	</div>
</div>
@stop