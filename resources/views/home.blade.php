@extends('layouts.app')
@section('content')
<nav>
    <div class="nav-wrapper">
        <a href="" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ url('/Inventario') }}">Inventario</a></li>
            <li><a href="{{ url('/productos') }}">Productos </a></li>
            <li><a href="{{ url('/proveedores') }}">Proveedores</a></li>
            <li><a href="{{ url('/MovimientosInventario') }}">Movimientos Inventario</a></li>
        </ul>
    </div>
</nav>
@endsection
