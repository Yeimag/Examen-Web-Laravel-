@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Ingreso de productos</h1>
            <form action="/submit" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="Marca">Marca</label>
                    <input type="text" class="form-control" id="Marca" name="Marca" placeholder="Marca"></input>
                </div>
                <div class="form-group">
                    <label for="Familia">Familia</label>
                    <input type="text" class="form-control" id="Familia" name="Familia" placeholder="Familia"></input>
                </div>
                <div class="form-group">
                    <label for="CasaFabricacion">Casa Fabricacion</label>
                    <input type="text" class="form-control" id="CasaFabricacion" name="CasaFabricacion" placeholder="CasaFabricacion"></input>
                </div>
                <div class="form-group">
                    <label for="TipoUnidad">Tipo Unidad</label>
                    <input type="text" class="form-control" id="TipoUnidad" name="TipoUnidad" placeholder="TipoUnidad"></input>
                </div>
                <div class="form-group">
                    <label for="Departamento">Departamento</label><br>
                    <input type="text" class="form-control" id="Departamento" name="Departamento" placeholder="Departamento"></input>
                </div>
                <div class="form-group">
                    <label for="Activo">Activo</label>
                    <input type="number" class="form-control" id="Activo" name="Activo" placeholder="Activo"></input>
                </div>
                <div class="form-group">
                    <label for="FechaIngreso">Fecha Ingreso</label>
                    <input type="date" class="form-control" id="FechaIngreso" name="FechaIngreso" placeholder="dd/mm/yyyy"></input>
                </div>
                <div class="form-group">
                    <label for="Unidad">Unidad</label>
                    <input type="number" class="form-control" id="Unidad" name="Unidad" placeholder="Unidad"></input>
                </div>
                <div class="form-group">
                    <label for="Impuesto">Impuesto</label>
                    <input type="number" class="form-control" id="Impuesto" name="Impuesto" placeholder="Impuesto"></input>
                </div>
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div>
    </div>
@endsection