@extends('layouts.base_admin')
@section('title')
Agregar Tour <small> NUEVO TOUR</small>
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
{{ Form::open(array('method'=> 'POST','url'=> 'tour/insert.html','class'=>'form-horizontal','role'=>'form')) }}
	<div class="form-group">
		{{ Form::label('Tnombre','Nombre:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('tnombre','',array('class'=>'form-control','placeholder'=>'viktor'))}}
		</div>
	</div>

	
	<div class="form-group">
		{{ Form::label('costoreferencial','Costo:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('costoreferencial','',array('class'=>'form-control','placeholder'=>'222222'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('tdescripcion','Descripción:',array('class'=>'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::textarea('tdescripcion','',array('class'=>'form-control','placeholder'=>'Para personal autorizado'))}}
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
