@extends('layouts.base_admin')
@section('title')
Agregar cliente <small> NUEVO cliente </small>
@stop
@section('content')
<div class="col-xs-12 col-sm-12">
{{ Form::open(array('method'=> 'POST','url'=> 'personal/insertC.html','class'=>'form-horizontal','role'=>'form')) }}
	
	<div class="form-group">
		{{ Form::label('cnombre','Nombre(s):',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('cnombre','',array('class'=>'form-control','placeholder'=>'Viktor'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('cnombre'))
		       	@foreach ($errors->get('cnombre') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group ">
		{{ Form::label('capellido','Apellidos:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('capellido','',array('class'=>'form-control','placeholder'=>'Cuba Gamarra'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('capellido'))
		       	@foreach ($errors->get('capellido') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('cpasarporte','Pasaporte:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('cpasarporte','',array('class'=>'form-control','placeholder'=>'1234567890'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('cpasarporte'))
		       	@foreach ($errors->get('cpasarporte') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('cnacionalidad','Nacionalidad:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('cnacionalidad','',array('class'=>'form-control','placeholder'=>'Peruano'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('cnacionalidad'))
		       	@foreach ($errors->get('cnacionalidad') as $error)
			   	<div class="alert alert-danger">* {{ $error }}</div>
		    	@endforeach
			@endif
		</div>
	</div>

	
	<div class="form-group">
		{{ Form::label('cedad','Edad:',array('class'=>'col-sm-2 control-label')) }}
		<div class="col-sm-6 col-md-4">
			{{ Form::text('cedad','',array('class'=>'form-control','placeholder'=>'00'))}}
		</div>
		<div class="errores">
			@if ( $errors->has('cedad'))
		       	@foreach ($errors->get('cedad') as $error)
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
