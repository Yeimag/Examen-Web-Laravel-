@extends('layouts.app')
@section('content')
<div class="container">
     <div class="row">
        <form class="form-horizontal" role="form" action={{ url('/inventario') }} method="post">               
            <div class="form-group">
                <label for="productoID">Producto</label>
                <input type="number" class="form-control" id="productoID" name="productoID" placeholder="ID Producto" required="required" title="e.g 425">
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad de Producto">
            </div>
            <div class="form-group">
                <label for="cantidad_min">Cantidad Minima</label>
                <input type="number" class="form-control" id="cantidad_min" name="cantidad_min" placeholder="Cantidad Minima de Producto">
            </div>
            <div class="form-group">
                <label for="cantidad_max">Cantidad Maxima</label>
                <input type="number" class="form-control" id="cantidad_max" name="cantidad_max" placeholder="Cantidad Maxima de Producto">
            </div>
            <div class="form-group">
                <label for="excepto">Excepto</label>
                <input type="number" class="form-control" id="excepto" name="excepto" placeholder="Excepto">
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