@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel-body">
              <a href="{{ route('cliente.create') }}" class="btn btn-primary" role="button">Nuevo</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                           <th>Cedula</th>
                           <th>Nombre</th>
                           <th>Apellido</th>
                           <th>Fecha Nacimiento</th>
                           <th>Dirección</th>
                           <th>Estado Civil</th>
                           <th>Sexo</th>
                           <th>Fecha Ingreso</th>
                           <th>Descuento</th>
                           <th>Funcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <th scope="row">{{ $cliente->cedula }}</th>
                                <th>{{ $cliente->nombre }}</th>
                                <th>{{ $cliente->apellido }}</th>
                                <th>{{ $cliente->fecha_nacimiento }}</th>
                                <th>{{ $cliente->direccion }}</th>
                                <th>{{ $cliente->estado_civil }}</th>
                                <th>{{ $cliente->sexo }}</th>
                                <th>{{ $cliente->fecha_ingreso }}</th>
                                <th>{{ $cliente->descuento}}</th>
                                <th>
                                   <p>
                                     <a href="{{route('cliente.index')}}/{{ $cliente->cedula }}/edit" class="btn btn-primary" role="button">Editar</a>
                                     
                                     <form action="{{route('cliente.index')}}/{{ $cliente->cedula }}" method="POST">
                                       <input type="submit" value="Eliminar">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <input type="hidden" name="_method" value="DELETE">
                                     </form>

                                     <!--a href="{{route('cliente.index')}}/{{ $cliente->cedula }}" class="btn btn-primary" role="button">Eliminar</a-->
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
