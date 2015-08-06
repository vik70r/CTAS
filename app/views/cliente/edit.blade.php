@extends('layouts.base_admin')
@section('title')
Editar cliente <small> {{$cliente->nombre}} </small>
@stop
@section('breadcrumb')
<li>{{ HTML::link('clientes','Clientes')}} </li>
<li>{{ HTML::link('clientes/profile/'.$cliente->id,$cliente->nombre)}}</li>
<li>Editar</li>
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
{{ Form::model($cliente,array('url'=>array('cliente/update',$cliente->id),'method'=> 'POST','class'=>'form-horizontal','role'=>'form'))}}
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
		{{ Form::label('apellidos','Apellidos:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('apellidos','',array('class'=>'form-control','placeholder'=>'Cuba Gamarra'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('apellidos'))
		       	@foreach ($errors->get('apellidos') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('tipodocumento','Tipo Documento:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('tipodocumento','',array('class'=>'form-control','placeholder'=>'12345678'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('tipodocumento'))
		       	@foreach ($errors->get('tipodocumento') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('documento','Documento:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('documento','',array('class'=>'form-control','placeholder'=>'12345678'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('documento'))
		       	@foreach ($errors->get('documento') as $error)
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
		{{ Form::label('ciudad','Ciudad:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('ciudad','',array('class'=>'form-control','placeholder'=>'Cusco'))}}
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
		{{ Form::label('pais','Pais:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('pais','',array('class'=>'form-control','placeholder'=>'Peru'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('pais'))
		       	@foreach ($errors->get('pais') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	
	
	

	
	<div class="form-group">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<button class="btn btn-info btn-block" type="reset">Cancelar</button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<button class="btn btn-primary btn-block" type="submit">Actualizar</button>
		</div>
	</div>
{{Form::close()}}
</div>
@stop