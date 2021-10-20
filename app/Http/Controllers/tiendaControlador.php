<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tiendas;
use App\Models\productos;
use App\Models\categorias;
use App\Models\catetiendas;
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
    public function indexTi($id)
    {
        if (Auth::guest()){
            $idPropio=0;
        }else{
            $idPropio=Auth::user()->id;
        }
        
        //Se trae todos los datos de la tabla tiendias donde el idtiendausuario sea igual al mandado por la url
        $tienda=DB::select("SELECT * FROM tiendas WHERE idtiendausuario=$id");
        //se buscan los productos que sean de la tienda 
        $Productos=DB::select("SELECT * FROM productos WHERE idUsuario=$id");
        $cateTiendas=DB::select("SELECT * FROM catetiendas WHERE usuarioId=$id");
        return view('miTienda.index',['Productos'=>$Productos,'cates'=>categorias::all(),'cateTiendas'=>$cateTiendas,'tienda'=>$tienda[0],'idPropio'=>$idPropio]);

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
        $nuevaTienda= new tiendas();
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
