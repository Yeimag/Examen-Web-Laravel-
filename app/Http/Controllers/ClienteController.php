<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

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
      $clientes = Clientes::all(); 
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
      $clientes = new Clientes;
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

      return redirect('cliente')->with('message','data has been updated!');
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
      $cliente = Clientes::find($cedula);

      if(!$cliente){
          abort(404);
      }
      else{
        return view('cliente.edit')->with('cliente',$cliente);
      }

      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$cedula)
    {
        $clientes = Cliente::where('cedula',$cedula)->first();

        if(!$clientes){
             abort(404);
        }
        else{
          Cliente::where('cedula',$cedula)->update(['cedula'=>$request->cedula,
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'fecha_nacimiento'=>$request->fecha_nacimiento,
            'direccion'=>$request->direccion,
            'estado_civil'=>$request->estado_civil,
            'sexo'=>$request->sexo,
            'fecha_ingreso'=>$request->fecha_ingreso,
            'descuento'=>$request->descuento]);

          return response()->json(['mensaje' => 'data has been updated!']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function destroy($cedula)
    {
        $clientes = Clientes::where('cedula', $cedula)->first();
        $clientes = Clientes::find($cedula);
        $clientes->delete();

        // redirect
        return redirect('cliente')->with('message','data has been updated!');
    }*/
    public function destroy($id)
    {
        //$deleted = Clientes::find($id);
        //$deleted->delete();
         $product = Clientes::find($id)->delete(); 
        //Clientes::table('clientes')->where('cedula', $id)->delete();

        ///$clientes = Clientes::$table('clientes')->get();

        return view('cliente',['clientes' => $clientes]);
    }


}