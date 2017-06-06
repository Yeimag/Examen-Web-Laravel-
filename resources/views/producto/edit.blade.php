@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="form-horizontal" role="form" action="{{route('producto.index')}}/{{ $producto->id }}" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre}}" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $producto->marca}}" placeholder="Marca">
                </div>
                <div class="form-group">
                    <label for="familia">Familia</label>
                    <input type="text" class="form-control" id="familia" name="familia" value="{{ $producto->familia}}" placeholder="Familia">
                </div>
                <div class="form-group">
                    <label for="casa_fabricacion">Casa de Fabricacion</label>
                    <input type="text" class="form-control" id="casa_fabricacion" name="casa_fabricacion" value="{{ $producto->casa_fabricacion}}" placeholder="Casa de Fabricación"></input>
                </div>
                <div class="form-group">
                    <label for="tipo_unidad">Tipo de Unidad</label>
                    <input type="text" class="form-control" id="tipo_unidad" name="tipo_unidad" value="{{ $producto->tipo_unidad}}" placeholder="Tipo de Unidad"></input>
                </div>
                <div class="form-group">
                    <label for="departamento">Departamento</label>
                    <input type="text" class="form-control" id="departamento" name="departamento" value="{{ $producto->departamento}}" placeholder="Departamento"></input>
                </div>
                <div class="form-group">
                    <label for="activo">Activo</label>
                    <input type="number" class="form-control" id="activo" name="activo" value="{{ $producto->activo}}" placeholder="###"></input>
                </div>
                <div class="form-group">
                    <label for="fecha_ingreso">Fecha ingreso</label>
                    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{ $producto->fecha_ingreso}}" placeholder="YYYY/DD/MM"></input>
                </div>
                <div class="form-group">
                    <label for="unidad">Unidad</label>
                    <input type="number" class="form-control" id="unidad" name="unidad" value="{{ $producto->unidad}}" placeholder="Unidad"></input>
                </div>
                <div class="form-group">
                    <label for="impuesto">Impuesto</label>
                    <input type="number" class="form-control" id="impuesto" name="impuesto" value="{{ $producto->impuesto}}" placeholder="Impuesto"></input>

                <div class="form-group">
                     <div class="col-md-6 col-md-offset-4">
                       <input class="btn btn-primary btn-block" type="submit" value="Editar">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input type="hidden" name="_method" value="PUT">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection