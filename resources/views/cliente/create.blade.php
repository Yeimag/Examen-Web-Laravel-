@extends('layouts.app')
@section('content')
<div class="container">
     <div class="row">
        <form class="form-horizontal" role="form" action="cliente/store " method="post">               
                <div class="form-group">
                    <label for="cedula">Cedula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="8-888-888" required="required" title="e.g 8-888-888" pattern="^\[0-9]{1}-[0-9]{3}-[0-9]{4}$">
                    {{ ($errors->has('cedula')) ? $errors->first('cedula') : '' }}
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                     {{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido"></input>
                     {{ ($errors->has('apellido')) ? $errors->first('apellido') : '' }}
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="YYYY/DD/MM"></input>
                     {{ ($errors->has('fecha_nacimiento')) ? $errors->first('fecha_nacimiento') : '' }}
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion"></input>
                     {{ ($errors->has('direccion')) ? $errors->first('direccion') : '' }}
                </div>

                <div class="form-group">
                    <label for="estado_civil">Estado civil</label><br>
                        <input type="radio" name="estado_civil" value="Soltero"> Soltero(a)<br>
                        <input type="radio" name="estado_civil" value="Casado"> Casado(a)<br>
                        <input type="radio" name="estado_civil" value="Divorciado"> Divorciado(a)<br>
                        <input type="radio" name="estado_civil" value="Viudo"> Viudo(a)<br>
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label><br>
                    <input type="radio" name="sexo" value="Masculino"> Masculino<br>
                    <input type="radio" name="sexo" value="Femenino"> Femenino<br>
                </div>
                <div class="form-group">
                    <label for="fecha_ingreso">Fecha ingreso</label>
                    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" placeholder="YYYY/DD/MM"></input>
                     {{ ($errors->has('fecha_ingreso')) ? $errors->first('fecha_ingreso') : '' }}
                </div>
                <div class="form-group">
                    <label for="descuento">Descuento</label>
                    <input type="number" class="form-control" id="descuento" name="descuento" placeholder="Descuento"></input>
                     {{ ($errors->has('descuento')) ? $errors->first('descuento') : '' }}
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn-primary btn-block" type="submit" name="name" value="Guardar">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection