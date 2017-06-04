@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1>Vista de cliente</h1>
            <div class="panel-body">
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@stop
