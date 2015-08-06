@extends('layouts.base_admin')
@section('title')
MATENIMIENTO DE servicio
@stop

@section('breadcrumb')
	<li class="active todos"><i class="fa fa-fw fa-th-list"></i>Listar</li>
	<li class="nuevo"><i class="fa fa-fw fa-plus"></i>{{HTML::linkAction('ServicioController@create', 'Nuevo')}}</li>
@stop
@section('content')
    @if(Session::has('message'))
        <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
    @endif
     <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <div class="box">
            <div class="panel panel-success">
                <div class="panel-body" align="">
                    <div class="panel-default" align="center">
                        <h3 class="text-muted" align="center">Lista de Servicios</h3>
                    </div>
                    <table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    Servicio
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100px;" aria-label="Browser: activate to sort column ascending">
                                    Accion(Editar)
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100px;" aria-label="Platform(s): activate to sort column ascending">
                                    Accion(Eliminar)
                                </th>
                            </tr>
                        </thead>
						@foreach($servicios as $servicio)
							<tr>
								<td align = "center">
									<a href="servicio/{{ $servicio->id }}">{{ $servicio->nombre }}</a>  
								</td>
								<td  align = "center">
									<a href="servicio/{{ $servicio->id }}/edit"><span class="label label-success">Editar</a>
								</td>
								<td align = "center"> 
									{{ Form::open(array('url'=>'servicio/'.$servicio->id, 'method'=>'delete')) }}
									{{ Form::submit('Eliminar') }}
									{{ Form::close() }}
								</td>
							</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop