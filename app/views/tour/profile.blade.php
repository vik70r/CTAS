@extends('layouts.base_admin')
@section('title')
Perfil <small>tour</small>
@stop
@section('breadcrumb')
<li>{{$tour->nombre}}</li>
@section('content')
<div class="row">
	<div class="col-lg-3">
		<p align="center"><b>código:</b>{{ $tour->idtour }}</p>
		
	</div>
	<div class="col-lg-7">
		
		<p><b>Nombre:</b> {{ $tour->tnombre }}</p>
		
		<p><b>Costo:</b> {{ $tour->costoreferencial}}</p>
		<p><b>Descripcion:</b> {{ $tour->tdescripcion }}</p>
		
	</div>
</div>
@stop