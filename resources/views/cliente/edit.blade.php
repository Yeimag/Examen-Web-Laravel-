@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="form-horizontal" role="form" action="{{route('cliente.index')}}/{{ $cliente->cedula }}" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->Nombre}}" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $cliente->Apellido}}" placeholder="Apellido"></input>
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $cliente->FechaNacimiento}}" placeholder="YYYY/DD/MM"></input>
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cliente->Direccion}}" placeholder="Direccion"></input>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                              <select class="form-control" name="estado_civil">
                                @if ($cliente->estado_civil == "Soltero(a)")
                                    <option value="Soltero(a)" selected="">Soltero(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorsiado(a)</option>
                                    <option value="Viudo(a)">Viudo(a)</option>
                                @elseif ($cliente->estado_civil == "Casado(a)")
                                    <option value="Soltero(a)">Soltero(a)</option>
                                    <option value="Casado(a)" selected="">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorsiado(a)</option>
                                    <option value="Viudo(a)">Viudo(a)</option>
                                @elseif ($cliente->estado_civil == "Divorsiado(a)")
                                    <option value="Soltero(a)">Soltero(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)" selected="">Divorsiado(a)</option>
                                    <option value="Viudo(a)">Viudo(a)</option>
                                @else
                                    <option value="Soltero(a)">Soltero(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorsiado(a)</option>
                                    <option value="Viudo(a)" selected="">Viudo(a)</option>
                                @endif

                              </select>
                        </div>
                    </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label><br>
                     <div class="col-md-6">
                              <select class="form-control" name="sexo">
                                @if ($cliente->sexo == "Masculino")
                                    <option value="Masculino" selected="">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                @else
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino" selected="">Femenino</option>
                                @endif
                              </select>
                            </div>
                </div>
                <div class="form-group">
                    <label for="fecha_ingreso">Fecha ingreso</label>
                    <input type="date" class="form-control" id="fecha_ingreso" value="{{ $cliente->FechaIngreso}}" name="fecha_ingreso" placeholder="YYYY/DD/MM"></input>
                </div>
                <div class="form-group">
                    <label for="descuento">Descuento</label>
                    <input type="number" class="form-control" id="descuento" name="descuento" value="{{ $cliente->Descuento}}" placeholder="Descuento"></input>
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