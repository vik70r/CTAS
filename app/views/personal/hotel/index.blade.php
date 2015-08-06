@extends('layouts.base_admin')
@section('title')
Lista de Hoteles
@stop
@section('breadcrumb')
<li>hoteles</li>
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

                        <th colspan="1" rowspan="1">Cod Hotel</th>
                        <th colspan="1" rowspan="1">Nombre</th>
                        <th colspan="1" rowspan="1">Dirección</th>
                        <th colspan="1" rowspan="1">Categoria</th>
                        <th colspan="1" rowspan="1">Telefono</th>
                        <th colspan="1" rowspan="1">Descripción</th>
                        
                        <th colspan="1" rowspan="1">Acciones</th>
                    </tr>
                </thead>
            <tbody aria-relevant="all" aria-live="polite" role="alert">
                @foreach( $datos as $dato)
                <tr class="odd">
                        <td class="  sorting_1">{{ HTML::link('hotel/profile/'.$dato->idhotel,$dato->idhotel) }}</td>
                        <td class=" "> {{ $dato->hnombre }} </td>
                        <td class=" ">{{ $dato->hdireccion }}</td>
                        <td class=" ">{{ $dato->categoria }}</td>
                        <td class=" ">{{ $dato->htelefono }}</td>
                         <td class=" ">{{ $dato->hdescripcion }}</td>
                        
                       
                        <td class=" ">
                            <span class="label label-success">{{ HTML::link('hotel/edit/'.$dato->idhotel,' Modificar ') }}</span>
                            <span class="label label-warning">{{ HTML::link('hotel/profile/'.$dato->idhotel,' Detalles ') }}</span>
                            <span class="label label-danger">{{ HTML::link('hotel/deshabilitar/'.$dato->idhotel,' Deshabilitar') }}</span>
                            <span class="label label-primary">{{ HTML::link('hotel/habilitar/'.$dato->idhotel,' Habilitar') }}</span>
                          
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
          
        </div>
          
    </div><!-- /.box-body -->


</div>
@stop
