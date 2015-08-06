@extends('layouts.base_admin')
@section('title')
Lista de Guias
@stop
@section('breadcrumb')
<li>guias</li>
@stop
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title"> </h3>
    </div>
    <div class="box-body table-responsive">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
            <div class="row">
                <div class="col-xs-6">
                    <div class="dataTables_length" id="example1_length">
                        <label><select aria-controls="example1" size="1" name="example1_length">
                            <option selected="selected" value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> records per page</label>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div id="example1_filter" class="dataTables_filter">
                        <label>Search: <input aria-controls="example1" type="text"></label>
                        {{ HTML::link('guia/add.html','Agregar guia') }}
                    </div>
                </div>
            </div>
            <table aria-describedby="example1_info" id="example1" class="table table-bordered table-striped dataTable">
                <thead>
                    <tr role="row">
                        <th aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 80px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" role="columnheader" class="sorting_asc">Cod guia</th>
                        
                        <th aria-label="Browser: activate to sort column ascending" style="width: 200px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" role="columnheader" class="sorting">Nombre</th>
                        <th aria-label="Platform(s): activate to sort column ascending" style="width: 200px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" role="columnheader" class="sorting">Apellido</th>
                        <th aria-label="Engine version: activate to sort column ascending" style="width: 163px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" role="columnheader" class="sorting">Sexo</th>
                        <th aria-label="Engine version: activate to sort column ascending" style="width: 163px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" role="columnheader" class="sorting">Telefono</th>
                        <th aria-label="CSS grade: activate to sort column ascending" style="width: 114px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" role="columnheader" class="sorting">Descripcion</th>
                        <th aria-label="CSS grade: activate to sort column ascending" style="width: 114px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" role="columnheader" class="sorting">Actividades</th>
                    </tr>
                </thead>
            <tbody aria-relevant="all" aria-live="polite" role="alert">
                @foreach( $datos as $dato)
                <tr class="odd">
                        <td class="  sorting_1">{{ HTML::link('guia/profile/'.$dato->idguia,$dato->idguia) }}</td>
                        <td class=" "><b></b> {{ $dato->gnombre }}</td>
                        <td class=" "><b></b> {{ $dato->gapellido }}</td>
                        <td class=" ">{{ $dato->gsexo }}</td>
                        <td class=" ">{{ $dato->gtelefono }}</td>
                        <td class=" ">{{ $dato->gdescripcion }}</td>
                        <td class=" ">
                            {{ HTML::link('guia/edit/'.$dato->id,'Actualizar') }}
                            {{ HTML::link('guia/delete/'.$dato->id,'Eliminar') }}
                            {{ HTML::link('guia/profile/'.$dato->id,'Detalles') }}
                        </td>
                </tr>
                @endforeach
                </tbody>
            </table>
                 Pagina Actual:{{ $datos->getCurrentPage()}}
            </div>
                {{ $datos->links()}}
    </div><!-- /.box-body -->
</div>
@stop

