{!! MaterializeCSS::include_full() !!}
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--link href="{{ asset('css/app.css') }}" rel="stylesheet"-->
</head>
<body>
    <div id="app">

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
        
        @yield('content')
    </div>

    <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}"></script-->
</body>
</html>
