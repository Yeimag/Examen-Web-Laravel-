@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                </div>

                <div class="panel-body">
                    You are logged in!
                    <div>
                        <a href="{{ route('cliente.index') }} class="btn btn-primary" role="button"">Cliente</a>
                        <a href="{{ route('invetario.index') }} class="btn btn-primary" role="button"">Inventario</a>
                        <a href="{{ route('producto.index') }} class="btn btn-primary" role="button"">Producto</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
