@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel-body">
              <a href="{{ route('inventario.create') }}" class="btn btn-primary" role="button">Nuevo</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
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
                                <th>{{ $inventario->productoID  }}</th>
                                <th>{{ $inventario->cantidad  }}</th>
                                <th>{{ $inventario->cantidad_min  }}</th>
                                <th>{{ $inventario->cantidad_max }}</th>
                                <th>{{ $inventario->excepto }}</th>
                                <th>
                                  <p>
                                     <a href="{{route('inventario.index')}}/{{ $inventario->id }}/edit" class="btn btn-primary" role="button">Editar</a>
                                     
                                     <form action="{{route('inventario.index')}}/{{ $inventario->id }}" method="POST">
                                       <input type="submit" value="Eliminar">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <input type="hidden" name="_method" value="DELETE">
                                     </form>
                                  </p>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@stop
                                   
