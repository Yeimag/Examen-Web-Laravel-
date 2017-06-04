@extends('layouts.app')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.css"  rel="stylesheet">
        <nav>
          <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="{{ url('/Inventario') }}">Inventario</a></li>
              <li><a href="{{ url('/productos') }}">Productos </a></li>
              <li><a href="{{ url('/proveedores') }}">Proveedores</a></li>
              <li><a href="{{ url('/MovimientosInventario') }}">Movimientos Inventario</a></li>
            </ul>
          </div>
        </nav>
    <div class="container">
        <div class="row">
            <h1>Ingreso de productos</h1>
            <form action="/submit" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="Producto">Producto</label>
                    <input type="text" class="form-control" id="Producto" name="Producto" placeholder="Producto">
                </div>
                <div class="form-group">
                    <label for="Cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad"></input>
                </div>
                <div class="form-group">
                    <label for="CantidadMinima">Cantidad Minima</label>
                    <input type="number" class="form-control" id="CantidadMinima" name="CantidadMinima" placeholder="CantidadMinima"></input>
                </div>
                <div class="form-group">
                    <label for="CantidadMaxima">Cantidad Maxima</label>
                    <input type="number" class="form-control" id="CantidadMaxima" name="CantidadMaxima" placeholder="CantidadMaxima"></input>
                </div>

                <div class="form-group">
                    <label for="Gravado">Gravado o excepto</label>
                    <input type="number" class="form-control" id="Gravado" name="Gravado" placeholder="Gravado"></input>
                </div>
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div>
    </div>
@endsection