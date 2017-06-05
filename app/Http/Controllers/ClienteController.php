// app/controllers/ClienteController.php

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       
      $clientes = Cliente::all();
        return View::make('cliente.index')->with('clientes', $clientes);
        //return view('cliente.index', ['clientes'=>$clientes]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cliente.create');
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
      $cliente = new Cliente;
      $cliente->cedula = $request->cedula;
      $cliente->nombre = $request->nombre;
      $cliente->apellido = $request->apellido;
      $cliente->fecha_nacimiento = $request->fechaNacimiento;
      $cliente->direccion = $request->direccion;
      $cliente->estado_civil = $request->estadoCivil;
      $cliente->sexo = $request->sexo;
      $cliente->fecha_ingreso = $request->fechaIngreso;
      $cliente->descuento = $request->descuento;
      $cliente->save();

      return redirect('cliente')->with('message','data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        if(!$cliente){
            abort(404);
         }

         return view('cliente.index')->with('cliente',$cliente);
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
        $cliente = Cliente::find($id);

        if(!$cliente){
             abort(404);
        }
        return view('cliente.edit')->with('cliente',$cliente);
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
      $cliente = Cliente::find($id);
      $cliente->cedula = $request->cedula;
      $cliente->nombre = $request->nombre;
      $cliente->apellido = $request->apellido;
      $cliente->fecha_nacimiento = $request->fechaNacimiento;
      $cliente->direccion = $request->direccion;
      $cliente->estado_civil = $request->estadoCivil;
      $cliente->sexo = $request->sexo;
      $cliente->fecha_ingreso = $request->fechaIngreso;
      $cliente->descuento = $request->descuento;
      $cliente->save();

      return redirect('cliente')->with('message','data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the client!');
        return Redirect::to('clientes');
    }

}