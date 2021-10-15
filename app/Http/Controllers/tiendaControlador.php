<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\categorias;
use App\Models\tienda;
use App\Models\User;

class tiendaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');  //para ver si esta logueada por favor
    }
    public function index()
    {
        return view('miTienda.index',['Productos'=> productos::all(),'cates'=>categorias::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('miTienda.create',['users'=> User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $nuevaTienda= new tienda();
        $nuevaTienda->nombreTienda= $request->get('cajaNombreT');
        $nuevaTienda->nombrePropietario= $request->get('cajaDueñoT');
        $nuevaTienda->telefono= $request->get('cajaTelefonoT');
        $nuevaTienda->direccion= $request->get('cajaDireccionT');
        $nuevaTienda->email= $request->get('cajaEmailT');
        $nuevaTienda->idtiendausuario=$request->get('cajaidtiendausuario');
        $nuevaTienda->save();
        return redirect ('/home');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function infoTienda()
    {
        return view ('miTienda.infoTienda',['users'=> User::all(),'tienda'=>tienda::all()]);
    }
}
