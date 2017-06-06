@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="form-horizontal" role="form" action="{{route('inventario.index')}}/{{ $inventario->productoID }}" method="post">
                <div class="form-group">
                    <label for="productoID">Producto</label>
                    <input type="number" class="form-control" id="productoID" name="productoID" value="{{ $inventario->productoID}}" placeholder="{{ $inventario->productoID}}"></input>
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $inventario->cantidad}}" placeholder="{{ $inventario->cantidad}}"></input>
                </div>
                <div class="form-group">
                    <label for="cantidad_min">Cantidad Minima</label>
                    <input type="number" class="form-control" id="cantidad_min" name="cantidad_min" value="{{ $inventario->cantidad_min}}" placeholder="{{ $inventario->cantidad_min}}"></input>
                </div>
                <div class="form-group">
                    <label for="cantidad_max">Cantidad Maxima</label>
                    <input type="number" class="form-control" id="cantidad_max" value="{{ $inventario->cantidad_max}}" name="cantidad_max" placeholder="{{ $inventario->cantidad_min}}"></input>
                </div>

                <div class="form-group">
                    <label for="excepto">Gravado o excepto</label>
                    <input type="number" class="form-control" value="{{ $inventario->excepto}}" id="excepto" name="excepto" placeholder="{{ $inventario->excepto}}"></input>
                </div>
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
                   
                  