@extends('layouts.base_admin')
@section('title')
Agregar Hotel <small> NUEVO Hotel</small>
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
{{ Form::open(array('method'=> 'POST','url'=> 'personal/hotel/insert.html','class'=>'form-horizontal','role'=>'form')) }}
	<div class="form-group">
		{{ Form::label('hnombre','Nombre:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('hnombre','',array('class'=>'form-control','placeholder'=>'viktor'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('hdireccion','Dirección:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('hdireccion','',array('class'=>'form-control','placeholder'=>'Av. tu casa'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('categoria','Categoria:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('categoria','',array('class'=>'form-control','placeholder'=>'dos estrellas'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('htelefono','Telefono:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('htelefono','',array('class'=>'form-control','placeholder'=>'222222'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('hdescripcion','Descripción:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::textarea('hdescripcion','',array('class'=>'form-control','placeholder'=>'Para personal autorizado'))}}
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<button class="btn btn-info btn-block" type="reset">Cancelar</button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<button class="btn btn-primary btn-block" type="submit">Guardar</button>
		</div>
	</div>
{{Form::close()}}
</div>
@stop
