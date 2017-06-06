@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel-body">
              <a href="/cliente/create" class="btn btn-primary" role="button">Nuevo</a>
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
                                <th>{{ $cliente->fechaNacimiento }}</th>
                                <th>{{ $cliente->direccion }}</th>
                                <th>{{ $cliente->estadoCivil }}</th>
                                <th>{{ $cliente->Sexo }}</th>
                                <th>{{ $cliente->fechaIngreso }}</th>
                                <th>{{ $cliente->Descuento}}</th>
                                <th>
                                   <p>
                                     <a href="/cliente/{{ $cliente->id }}/edit" class="btn btn-primary" role="button">Editar</a>
                                     <a href="/cliente/{{ $cliente->id }}/delete" class="btn btn-primary" role="button">Eliminar</a>
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
