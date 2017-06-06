@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel-body">
              <a href="/inventario/create" class="btn btn-primary" role="button">Nuevo</a>
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
                        @foreach($inventarios as $inventario)
                            <tr>
                                <th scope="row">{{ $inventario->id }}</th>
                                <th>{{ $inventario->productoID  }}</th>
                                <th>{{ $inventario->cantidad  }}</th>
                                <th>{{ $inventario->cantidad_min  }}</th>
                                <th>{{ $inventario->cantidad_max }}</th>
                                <th>{{ $inventario->excepto }}</th>
                                <td>
                                    <a  href="/inventario/{{ $inventario->id}}/edit" class="btn btn-small btn-info">Edit</a>
                                    <a href="/inventario/{{ $inventario->id }}/delete" class="btn btn-small btn-info" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@stop
