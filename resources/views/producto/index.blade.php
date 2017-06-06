@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel-body">
              <a href="{{ route('producto.create') }}" class="btn btn-primary" role="button">Nuevo</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                           <th>ID</th>
                           <th>Nombre</th>
                           <th>Marca</th>
                           <th>Familia</th>
                           <th>Casa de Fabricación</th>
                           <th>Tipo de Unidad</th>
                           <th>Departamento</th>
                           <th>Activo</th>
                           <th>Fecha Ingreso</th>
                           <th>Unidad</th>
                           <th>Impuesto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <th scope="row">{{ $producto->id }}</th>
                                <th>{{ $producto->nombre }}</th>
                                <th>{{ $producto->marca }}</th>
                                <th>{{ $producto->familia }}</th>
                                <th>{{ $producto->casa_fabricacion }}</th>
                                <th>{{ $producto->tipo_unidad }}</th>
                                <th>{{ $producto->departamento }}</th>
                                <th>{{ $producto->activo }}</th>
                                <th>{{ $producto->fecha_ingreso }}</th>
                                <th>{{ $producto->unidad}}</th>
                                <th>{{ $producto->impuesto}}</th>
                                <th>
                                   <p>
                                      <a href="{{route('producto.index')}}/{{ $producto->id }}/edit" class="btn btn-primary" role="button">Editar</a>
                                     
                                      <form action="{{route('producto.index')}}/{{ $producto->id }}" method="POST">
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
