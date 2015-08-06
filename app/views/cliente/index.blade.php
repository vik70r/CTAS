@extends('layouts.base_admin')
@section('title')
Lista de Clientes
@stop
@section('breadcrumb')
<li>clientes</li>
@stop
@section('content')
<style>
    span {
        margin: 5px;
    }
    span a{
        color: white;
    }
</style>
<div class="box">
    <div class="box-header">
        <h3 class="box-title"> </h3>
    </div>

  
    <div class="box-body table-responsive">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
            <table aria-describedby="example1_info" id="example1" class="table table-bordered table-striped dataTable">
                <thead>
                    <tr role="row">

                        <th colspan="1" rowspan="1">Cod cliente</th>
                        <th colspan="1" rowspan="1">Nombres y Apellidos</th>
                        <th colspan="1" rowspan="1">Pasaporte</th>
                        <th colspan="1" rowspan="1">Nacionalidad</th>
                        <th colspan="1" rowspan="1">Edad</th>
                        
                        <th colspan="1" rowspan="1">Acciones</th>
                    </tr>
                </thead>
            <tbody aria-relevant="all" aria-live="polite" role="alert">
                @foreach( $datos as $dato)
                <tr class="odd">
                        <td class="  sorting_1">{{ HTML::link('cliente/profile/'.$dato->idcliente,$dato->idcliente) }}</td>
                        <td class=" "> {{ $dato->cnombre }} <b>{{ $dato->capellido }}</b></td>
                        <td class=" ">{{ $dato->cpasaporte }}</td>
                        <td class=" ">{{ $dato->cnacionalidad }}</td>
                        <td class=" ">{{ $dato->cedad }}</td>
                        
                       
                        <td class=" ">
                            <span class="label label-success">{{ HTML::link('cliente/edit/'.$dato->idcliente,' Modificar ') }}</span>
                            <span class="label label-warning">{{ HTML::link('cliente/profile/'.$dato->idcliente,' Detalles ') }}</span>
                            <span class="label label-danger">{{ HTML::link('cliente/deshabilitar/'.$dato->idcliente,' Deshabilitar') }}</span>
                            <span class="label label-primary">{{ HTML::link('cliente/habilitar/'.$dato->idcliente,' Habilitar') }}</span>
                          
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
          
        </div>
          
    </div><!-- /.box-body -->


</div>
@stop
