<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
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
        $clientes = Cliente::all(); 
        return view('cliente.index',['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
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
          'cedula'=>'required',
          'nombre'=>'required',
          'apellido'=>'required',
          'fecha_nacimiento'=>'required',
          'direccion'=>'required',
          'estado_civil'=>'required',
          'sexo'=>'required',
          'fecha_ingreso'=>'required',
          'descuento'=>'required', 
          ]);
        $cliente = new Cliente($request->all());
        $cliente->save();
        
        return redirect('/admin/cliente')->with('message','data has been updated!');
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
    public function edit($cedula)
    {
        // get the client
        $cliente = Cliente::find($cedula);

        //show the edit form and pass the client
        return view('cliente.edit',['cliente'=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cedula)
    {
        $cliente = Cliente::find($cedula);

        if(!$cliente){
             abort(404);
        }
        else{
            $cliente = Cliente::find($cedula);
            $cliente->nombre = $request->nombre;
            $cliente->apellido = $request->apellido;
            $cliente->fecha_nacimiento = $request->fecha_nacimiento;
            $cliente->direccion = $request->direccion;
            $cliente->estado_civil = $request->estado_civil;
            $cliente->sexo = $request->sexo;
            $cliente->fecha_ingreso = $request->fecha_ingreso;
            $cliente->descuento = $request->descuento;
            $cliente->save();

          return redirect('/admin/cliente')->with('message','data has been updated!');
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
        $cliente = Cliente::find($id);

        $cliente->delete();

        return redirect('/admin/cliente')->with('message','data has been deleted!');

    }

}
