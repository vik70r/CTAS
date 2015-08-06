@extends('layouts.base_'.Str::lower(Auth::user()->tipoUsuario))
@section('title')
Subir Imagen <small> {{$agencia->nombre}} </small>
@stop
@section('breadcrumb')

<li>{{ HTML::link('agencia/profile/'.$agencia->id,$agencia->nombre)}}</li>
<li>Editar</li>
@stop
@section('content')
<div class="ccol-xs-12 col-sm-12">
{{ Form::model($agencia,array('url'=>array('agencia/imagen',$agencia->id),'method'=> 'POST','class'=>'form-horizontal','role'=>'form','files'=>true))}}
	<div class="form-group">
		{{ Form::label('foto','Imagen:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::file('foto',array())}}
		</div>
		<div class="errores">
				@if ( $errors->has('foto'))
		       	@foreach ($errors->get('foto') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-12 col-sm-3">
			<button class="btn btn-info btn-block" type="reset">Cancelar </button>
		</div>
		<div class="col-xs-12 col-sm-3">
			<button class="btn btn-primary btn-block" type="submit">Subir</button>
		</div>
	</div>
{{Form::close()}}
</div>
@stop
