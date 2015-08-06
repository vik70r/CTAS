@extends('layouts.base_'.Str::lower(Auth::user()->tipoUsuario))
@section('title')
Cambiar Contraseña <small> {{$agencia->nombre}} </small>
@stop
@section('breadcrumb')
<li>{{ HTML::link('agencias','Agencias')}} </li>
<li>{{ HTML::link('agencia/profile/'.$agencia->id,$agencia->nombre)}}</li>
<li>Editar</li>
@stop
@section('content')
<div class="col-xs-12 col-sm-12">
{{ Form::model($agencia,array('method'=> 'POST','url'=>array('agencia/update',$agencia->id),'class'=>'form-horizontal','role'=>'form')) }}
	
	<div class="form-group">
		{{ Form::label('password','Password:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::password('password',array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('password_confirmation','Confirme-Password:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::password('password_confirmation',array('class'=>'form-control'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('password'))
		       	@foreach ($errors->get('password') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-12 col-sm-3">
			<button class="btn btn-info btn-block" type="reset">Cancelar</button>
		</div>
		<div class="col-xs-12 col-sm-3">
			<button class="btn btn-primary btn-block" type="submit">Guardar</button>
		</div>
	</div>
{{Form::close()}}
</div>
@stop
