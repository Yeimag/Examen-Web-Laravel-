Route::post('/submit', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'Cedula' => 'required|max:9',
        'Nombre' => 'required|max:50',
        'Apellido' => 'required|max:50',
        'FechaNacimiento' => 'required|max:250',
        'Direccion' => 'required|max:250',
        'EstadoCivil' => 'required|max:20',
        'Sexo' => 'required|max:1',
        'FechaIngreso' => 'required|max:15',
        'Descuento' => 'required|max:15',
    ]);
    if ($validator->fails()) {
        return back()
            ->withInput()
            ->withErrors($validator);
    }
    $link = new \App\Link;
    $link->Cedula = $request->Cedula;
    $link->Nombre = $request->Nombre;
    $link->Apellido = $request->Apellido;
    $link->FechaNacimiento = $request->FechaNacimiento;
    $link->Direccion = $request->Direccion;
    $link->EstadoCivil = $request->EstadoCivil;
    $link->Sexo = $request->Sexo;
    $link->FechaIngreso = $request->FechaIngreso;
    $link->Descuento = $request->Descuento;
    $link->save();
    return redirect('/');
});