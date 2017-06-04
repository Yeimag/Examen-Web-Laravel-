Route::post('/submit', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'Nombre' => 'required|max:50',
        'Marca' => 'required|max:50',
        'Familia' => 'required|max:50',
        'CasaFabricacion' => 'required|max:50',
        'TipoUnidad' => 'required|max:50',
        'Departamento' => 'required|max:50',
        'Activo' => 'required|max:50',
        'FechaIngreso' => 'required|max:50',
        'Unidad' => 'required|max:50',
        'Impuesto' => 'required|max:50',
    ]);
    if ($validator->fails()) {
        return back()
            ->withInput()
            ->withErrors($validator);
    }
    $link = new \App\Link;
    $link->Nombre = $request->Nombre;
    $link->Marca = $request->Marca;
    $link->Familia = $request->Familia;
    $link->CasaFabricacion = $request->CasaFabricacion;
    $link->TipoUnidad = $request->TipoUnidad;
    $link->Departamento = $request->Depatamento;
    $link->Activo = $request->Activo;
    $link->FechaIngreso = $request->FechaIngreso;
    $link->Unidad = $request->Unidad;
    $link->Impuesto = $request->Impuesto;
    $link->save();
    return redirect('/');
});