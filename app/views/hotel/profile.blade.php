@extends('layouts.base_admin')
@section('title')
Perfil <small>hotel</small>
@stop
@section('breadcrumb')
<li>{{$hotel->nombre}}</li>
@section('content')
<div class="row">
	<div class="col-lg-3">
		<p align="center"><b>código:</b>{{ $hotel->idhotel }}</p>
		
	</div>
	<div class="col-lg-7">
		
		<p><b>Nombre:</b> {{ $hotel->hnombre }}</p>
		<p><b>Direccion:</b> {{ $hotel->hdireccion }}</p>
		<p><b>Categoria:</b> {{ $hotel->categoria}}</p>
		<p><b>Teléfono:</b> {{ $hotel->htelefono}}</p>
		<p><b>Descripcion:</b> {{ $hotel->hdescripcion }}</p>
		
	</div>
</div>
@stop