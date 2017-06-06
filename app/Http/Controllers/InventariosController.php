<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventario;

class InventariosController extends Controller
{
    
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::all(); 
        return view('inventario.index',['inventarios'=>$inventarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.create');
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
          'productoID'=>'required',
          'cantidad'=>'required',
          'cantidad_min'=>'required',
          'cantidad_max'=>'required',
          'excepto'=>'required',
          ]);
        $inventario = new Inventario($request->all());
        $inventario->save();
        
        return redirect('/admin/inventario')->with('message','data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($productoID)
    {
    	//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($productoID)
    {
        // get the client
        $inventario = Inventario::find($productoID);

        //show the edit form and pass the client
        return view('inventario.edit',['inventario'=>$inventario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productoID)
    {
        $inventario = Inventario::find($productoID);

        if(!$inventario){
             abort(404);
        }
        else{
            $inventario = Inventario::find($productoID);
            $inventario->productoID = $request->productoID;
            $inventario->cantidad = $request->cantidad;
            $inventario->cantidad_min = $request->cantidad_min;
            $inventario->cantidad_max = $request->cantidad_max;
            $inventario->excepto = $request->excepto;
            $inventario->save();

          return redirect('/admin/inventario')->with('message','data has been updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productoID)
    {
        $inventario = Inventario::find($productoID);

        $inventario->delete();

        return redirect('/admin/inventario')->with('message','data has been deleted!');

    }

}
