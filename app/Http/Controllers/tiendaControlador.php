<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tiendas;
use App\Models\productos;
use App\Models\categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $id=Auth::user()->id;
        $tienda=DB::select("SELECT * FROM tiendas WHERE idtiendausuario=$id");
        return view('miTienda.index',['Productos'=> productos::all(),'cates'=>categorias::all(),'tienda'=>$tienda[0]]);
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
        $id=Auth::user()->id;
        //busca en la base de datos
        $tienda=DB::select("SELECT * FROM tiendas WHERE idtiendausuario=$id");
        //dd($tienda);
        return view ('miTienda.infoTienda',['users'=> User::all(),'tienda'=>$tienda[0],'id'=>$id]);
    }
}
