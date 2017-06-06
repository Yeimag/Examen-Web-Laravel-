<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller {

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    { 
      $productos = Producto::all(); 
      return view('producto.index',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('producto.create');//Se va a la vista create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)//crea un nuevo cliente
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
      $producto = new Producto;
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

      return redirect('producto')->with('message','data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function show($id)
    {

    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $producto = Producto::where('id',$id)->first();

        if(!$producto){
             abort(404);
        }
        else{
          Producto::where('id',$id)->update([
            'nombre'=>$request->nombre,
            'marca'=>$request->marca,
            'familia'=>$request->familia,
            'casa_fabricacion'=>$request->casa_fabricacion,
            'tipo_unidad'=>$request->tipo_unidad,
            'departamento'=>$request->departamento,
            'activo'=>$request->activo,
            'fecha_ingreso'=>$request->fecha_ingreso,
            'unidad'=>$request->unidad,
            'impuesto'=>$request->impuesto]);
          return response()->json(['mensaje' => 'data has been updated!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the product!');
        return Redirect::to('producto');
    }

    public function retorno(){
      return view('producto.edit');
    }

}