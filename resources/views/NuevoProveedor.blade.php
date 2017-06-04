@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Ingreso de clientes</h1>
            <form action="/submit" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="Cedula">Cedula</label>
                    <input type="text" class="form-control" id="Cedula" name="Cedula" placeholder="(888) 888-8888" required="required" title="e.g (888) 888-8888" pattern="^\([0-9]{3}\)\s[0-9]{3}-[0-9]{4}$">
                </div>
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="Apellido">Apellido</label>
                    <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido"></input>
                </div>
                <div class="form-group">
                    <label for="FechaNacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" placeholder="DD/MM/YYYY"></input>
                </div>
                <div class="form-group">
                    <label for="Direccion">Direccion</label>
                    <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion"></input>
                </div>

                <div class="form-group">
                    <label for="EstadoCivil">Estado civil</label><br>
                        <input type="radio" name="EstadoCivil" value="Soltero"> Soltero(a)
                        <input type="radio" name="EstadoCivil" value="Casado"> Casado(a)
                        <input type="radio" name="EstadoCivil" value="Divorciado"> Divorciado(a)
                        <input type="radio" name="EstadoCivil" value="Viudo"> Viudo(a)
                        <input type="radio" name="EstadoCivil" value="UnionLibre"> Union Libre<br>
                </div>
                <div class="form-group">
                    <label for="Sexo">Sexo</label><br>
                    <input type="radio" name="EstadoCivil" value="Masculino"> Masculino
                    <input type="radio" name="EstadoCivil" value="Femenino"> Femenino<br>
                </div>
                <div class="form-group">
                    <label for="FechaIngreso">Fecha ingreso</label>
                    <input type="date" class="form-control" id="FechaIngreso" name="FechaIngreso" placeholder="DD/MM/YYYY"></input>
                </div>
                <div class="form-group">
                    <label for="Descuento">Descuento</label>
                    <input type="number" class="form-control" id="Descuento" name="Descuento" placeholder="Descuento"></input>
                </div>
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div>
    </div>
@endsection