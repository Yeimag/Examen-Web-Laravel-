<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use examenweblaravel;
class InventarioController extends Controller {

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
       
      $inventario = DB::table('inventario')->get();
      return view('inventario.index',['inventario'=>$clientes]);
        //return View::make('cliente.index',['clientes'=> $clientes]);
        //return view('cliente.index', ['clientes'=>$clientes]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventario.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'id'=>'required',
          'productoID'=>'required',
          'cantidad'=>'required',
          'cantidad_min'=>'required',
          'cantidad_max'=>'required',
          'excepto'=>'required',
      ]);
      $inventario = new Cliente;
      $inventario->id = $request->id;
      $inventario->productoID = $request->productoID;
      $inventario->cantidad = $request->cantidad;
      $inventario->cantidad_min = $request->cantidad_min;
      $inventario->cantidad_max = $request->cantidad_max;
      $inventario->excepto = $request->excepto;
      $inventario->save();

      return redirect('inventario')->with('message','data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $inventario = Inventario::find($id);
        if(!$inventario){
            abort(404);
         }

         return view('inventario.detail')->with('inventario',$inventario);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $inventario = Inventario::find($id);

        if(!$inventario){
             abort(404);
        }
        return view('inventario.edit')->with('inventario',$inventario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
          'id'=>'required',
          'productoID'=>'required',
          'cantidad'=>'required',
          'cantidad_min'=>'required',
          'cantidad_max'=>'required',
          'excepto'=>'required',
      ]);
      $inventario = new Inventario;
      $inventario->id = $request->id;
      $inventario->productoID = $request->productoID;
      $inventario->cantidad = $request->cantidad;
      $inventario->cantidad_min = $request->cantidad_min;
      $inventario->cantidad_max = $request->cantidad_max;
      $inventario->excepto = $request->excepto;
      $inventario->save();

      return redirect('inventario')->with('message','data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id);
        $inventario->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the client!');
        return Redirect::to('inventario');
    }

}