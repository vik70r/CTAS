@extends('layouts.base_admin')
@section('title')
Agregar Guia <small> NUEVO GUIA</small>
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
{{ Form::open(array('method'=> 'POST','url'=> 'personal/guia/insert.html','class'=>'form-horizontal','role'=>'form')) }}
	<div class="form-group">
		{{ Form::label('gnombre','Nombre:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('gnombre','',array('class'=>'form-control','placeholder'=>'viktor'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('gapellido','Dirección:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('gapellido','',array('class'=>'form-control','placeholder'=>'Cuba'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('gsexo','Categoria:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('gsexo','',array('class'=>'form-control','placeholder'=>'M'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('gtelefono','Telefono:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('gtelefono','',array('class'=>'form-control','placeholder'=>'222222'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('gdescripcion','Descripción:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::textarea('gdescripcion','',array('class'=>'form-control','placeholder'=>'Para personal autorizado'))}}
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
