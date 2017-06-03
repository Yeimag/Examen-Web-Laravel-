Route::post('/submit', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'Cedula' => 'required|max:255',
        'Nombre' => 'required|max:255',
        'Apellido' => 'required|max:255',
        'FechaNacimiento' => 'required|max:255',
        'Direccion' => 'required|max:255',
        'EstadoCivil' => 'required|max:255',
        'Sexo' => 'required|max:255',
        'FechaIngreso' => 'required|max:255',
        'Descuento' => 'required|max:255',
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