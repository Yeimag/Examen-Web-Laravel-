@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Detalle de {{ $cliente->nombre }} <span>{{ $cliente->apellido }}</span></h2></div>

                <div class="panel-body">
                    <p><strong>Cedula: </strong> {{ $cliente->cedula }}</p>
                    <p><strong>Nacimiento: </strong> {{ $cliente->fecha_nacimiento }}</p>
                    <p><strong>Direccion: </strong> {{ $cliente->direccion }}</p>
                    <p><strong>Estado Civil: </strong> {{ $cliente->estado_civil }}</p>
                    <p><strong>Sexo: </strong> {{ $cliente->sexo }}</p>
                    <p><strong>Ingreso: </strong> {{ $cliente->fecha_ingreso }}</p>
                    <p><strong>Descuento: </strong> {{ $cliente->descueto }}%</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop