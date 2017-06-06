<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all(); 
        return view('producto.index',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'nombre'=>'required',
          'marca'=>'required',
          'familia'=>'required',
          'casa_fabricacion'=>'required',
          'tipo_unidad'=>'required',
          'departamento'=>'required',
          'activo'=>'required',
          'fecha_ingreso'=>'required',
          'unidad'=>'required', 
          'impuesto'=>'required',
          ]);
        $producto = new Producto($request->all());
        $producto->save();
        
        return redirect('/admin/producto')->with('message','data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the client
        $producto = Producto::find($id);

        //show the edit form and pass the client
        return view('producto.edit',['producto'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        if(!$producto){
             abort(404);
        }
        else{
            $producto = Producto::find($id);
            $producto->nombre = $request->nombre;
            $producto->marca = $request->marca;
            $producto->familia = $request->familia;
            $producto->casa_fabricacion = $request->casa_fabricacion;
            $producto->tipo_unidad = $request->tipo_unidad;
            $producto->departamento = $request->departamento;
            $producto->activo = $request->activo;
            $producto->fecha_ingreso = $request->fecha_ingreso;
            $producto->unidad = $request->unidad;
            $producto->impuesto = $request->impuesto;
            $producto->save();

          return redirect('/admin/producto')->with('message','data has been updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);

        $producto->delete();

        return redirect('/admin/producto')->with('message','data has been deleted!');

    }
}
