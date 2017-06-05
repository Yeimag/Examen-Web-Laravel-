@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                           <th>ID</th>
                           <th>Producto</th>
                           <th>Cantidad</th>
                           <th>Cantidad Minima</th>
                           <th>Cantidad Maxima</th>
                           <th>Excepto</th>
                           <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inventario as $key => $value)
                            <tr>
                                <th scope="row">{{ $inventario->id }}</th>
                                <th>{{ $inventario->id  }}</th>
                                <th>{{ $inventario->productoID  }}</th>
                                <th>{{ $inventario->cantidad  }}</th>
                                <th>{{ $inventario->cantidad_min  }}</th>
                                <th>{{ $inventario->cantidad_max }}</th>
                                <th>{{ $inventario->excepto }}</th>
                                <td>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('inventario/' . $value->id . '/edit') }}">Edit</a>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('inventario/' . $value->id . '/delete') }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@stop
