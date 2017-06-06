<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller {

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
      $clientes = Cliente::all(); 
      return view('cliente.index',['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cliente.create');//Se va a la vista create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)//crea un nuevo cliente
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
      $clientes = new Cliente;
      $clientes->cedula = $request->cedula;
      $clientes->nombre = $request->nombre;
      $clientes->apellido = $request->apellido;
      $clientes->fecha_nacimiento = $request->fecha_nacimiento;
      $clientes->direccion = $request->direccion;
      $clientes->estado_civil = $request->estado_civil;
      $clientes->sexo = $request->sexo;
      $clientes->fecha_ingreso = $request->fecha_ingreso;
      $clientes->descuento = $request->descuento;
      $clientes->save();

      return redirect('clientes')->with('message','data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function show($id)
    {
        $cliente = Cliente::find($id);
        if(!$cliente){
            abort(404);
         }

         return view('cliente.detail')->with('cliente',$cliente);
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($cedula)
    {
        $clientes = Cliente::find($cedula);

        if(!$clientes){
             abort(404);
        }
        return view('cliente.edit')->with('cliente',$clientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$cedula)
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
      $clientes = Cliente::find($cedula);
      $clientes->cedula = $request->cedula;
      $clientes->nombre = $request->nombre;
      $clientes->apellido = $request->apellido;
      $clientes->fecha_nacimiento = $request->fechaNacimiento;
      $clientes->direccion = $request->direccion;
      $clientes->estado_civil = $request->estadoCivil;
      $clientes->sexo = $request->sexo;
      $clientes->fecha_ingreso = $request->fechaIngreso;
      $clientes->descuento = $request->descuento;
      $clientes->save();

      return redirect('clientes')->with('message','data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($cedula)
    {
        $clientes = Cliente::find($cedula);
        $clientes->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the client!');
        return Redirect::to('clientes');
    }

}