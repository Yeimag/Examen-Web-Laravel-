@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="form-horizontal" role="form" action="/cliente/{{ $cliente->cedula }}" method="post">
                <div class="form-group">
                    <label for="Cedula">Cedula</label>
                    <input type="text" class="form-control" id="Cedula" name="Cedula" value="{{ $cliente->Cedula }}" placeholder="8-888-888" required="required" title="e.g 8-888-888" pattern="^\[0-9]{1}-[0-9]{3}-[0-9]{3}$">
                </div>
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $cliente->Nombre}}" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="Apellido">Apellido</label>
                    <input type="text" class="form-control" id="Apellido" name="Apellido" value="{{ $cliente->Apellido}}" placeholder="Apellido"></input>
                </div>
                <div class="form-group">
                    <label for="FechaNacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" value="{{ $cliente->FechaNacimiento}}" placeholder="YYYY/DD/MM"></input>
                </div>
                <div class="form-group">
                    <label for="Direccion">Direccion</label>
                    <input type="text" class="form-control" id="Direccion" name="Direccion" value="{{ $cliente->Direccion}}" placeholder="Direccion"></input>
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
                    <label for="Sexo">Sexo</label><br>
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
                    <label for="FechaIngreso">Fecha ingreso</label>
                    <input type="date" class="form-control" id="FechaIngreso" value="{{ $cliente->FechaIngreso}}" name="FechaIngreso" placeholder="YYYY/DD/MM"></input>
                </div>
                <div class="form-group">
                    <label for="Descuento">Descuento</label>
                    <input type="number" class="form-control" id="Descuento" name="Descuento" value="{{ $cliente->Descuento}}" placeholder="Descuento"></input>
                </div>

                <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                            <input type="hidden" name="_method" value="put">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="btn btn-primary btn-block" type="submit" name="name" value="Editar">
                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection