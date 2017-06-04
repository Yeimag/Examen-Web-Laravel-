Route::post('/submit', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'Producto' => 'required|max:50',
        'Cantidad' => 'required|max:50',
        'CantidadMinima' => 'required|max:50',
        'CantidadMaxima' => 'required|max:50',
        'Gravado' => 'required|max:50',
    ]);
    if ($validator->fails()) {
        return back()
            ->withInput()
            ->withErrors($validator);
    }
    $link = new \App\Link;
    $link->Producto = $request->Producto;
    $link->Cantidad = $request->Cantidad;
    $link->CantidadMinima = $request->CantidadMinima;
    $link->CantidadMaxima = $request->CantidadMaxima;
    $link->Gravado = $request->Gravado;
    $link->save();
    return redirect('/');
});