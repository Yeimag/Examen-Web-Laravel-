@extends('layouts.app')
@section('content')
<div class="container">
     <div class="row">
        <form class="form-horizontal" role="form" action={{ route('producto.store') }} method="post">               
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required="required">
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca del producto">
                </div>
                <div class="form-group">
                    <label for="familia">Familia</label>
                    <input type="text" class="form-control" id="familia" name="familia" placeholder="Familia"></input>
                </div>
                <div class="form-group">
                    <label for="casa_fabricacion">Casa de Fabricacion</label>
                    <input type="text" class="form-control" id="casa_fabricacion" name="casa_fabricacion" placeholder="Casa de Fabricación"></input>
                </div>
                <div class="form-group">
                    <label for="tipo_unidad">Tipo de Unidad</label>
                    <input type="text" class="form-control" id="tipo_unidad" name="tipo_unidad" placeholder="Tipo de Unidad"></input>
                </div>
                <div class="form-group">
                    <label for="departamento">Departamento</label>
                    <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento"></input>
                </div>
                <div class="form-group">
                    <label for="activo">Activo</label>
                    <input type="number" class="form-control" id="activo" name="activo" placeholder="###"></input>
                </div>
                <div class="form-group">
                    <label for="fecha_ingreso">Fecha ingreso</label>
                    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" placeholder="YYYY/DD/MM"></input>
                </div>
                <div class="form-group">
                    <label for="unidad">Unidad</label>
                    <input type="number" class="form-control" id="unidad" name="unidad" placeholder="Unidad"></input>
                </div>
                <div class="form-group">
                    <label for="impuesto">Impuesto</label>
                    <input type="number" class="form-control" id="impuesto" name="impuesto" placeholder="Impuesto"></input>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn-primary btn-block" type="submit"  value="Guardar">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection