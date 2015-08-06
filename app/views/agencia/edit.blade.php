@extends('layouts.base_'.Str::lower(Auth::user()->tipoUsuario))
@section('title')
Editar Agencia <small> {{$agencia->nombre}}  </small>
{{$agencia-> dni}}
@stop
@section('breadcrumb')

<li>{{ HTML::link('agencia/profile/'.$agencia->id,$agencia->nombre)}}</li>
<li>Editar</li>
@stop
@section('content')
<div class="ccol-xs-12 col-sm-12">

{{ Form::model($agencia,array('url'=>array('agencia/update',$agencia->id),'method'=> 'POST','class'=>'form-horizontal','role'=>'form'))}}
		<div class="form-group">
		{{ Form::label('nombre','Nombre(s):',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Viktor'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('nombre'))
		       	@foreach ($errors->get('nombre') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group ">
		{{ Form::label('ruc','R.U.C.:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('ruc','',array('class'=>'form-control','placeholder'=>'000123456789'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('ruc'))
		       	@foreach ($errors->get('ruc') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('ciudad','Ciudad:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('ciudad','',array('class'=>'form-control','placeholder'=>'Arequipa'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('ciudad'))
		       	@foreach ($errors->get('ciudad') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('direccion','Dirección:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('direccion','',array('class'=>'form-control','placeholder'=>'Av. la cultura Nro 8'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('direccion'))
		       	@foreach ($errors->get('direccion') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('telefono','Teléfono:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('telefono','',array('class'=>'form-control','placeholder'=>'12345678'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('telefono'))
		       	@foreach ($errors->get('telefono') as $error)
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
			<button class="btn btn-primary btn-block" type="submit">Actualizar</button>
		</div>
	</div>
{{Form::close()}}
</div>
@stop
