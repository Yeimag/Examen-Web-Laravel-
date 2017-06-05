@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="form-horizontal" role="form" action="/inventario/{{ $inventario->id }}" method="post">
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