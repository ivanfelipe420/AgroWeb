<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Models\productos;
use App\Models\categorias;
use App\Models\catetiendas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class categoriaControlador extends Controller
{
    /**    
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //formulario Editar o borrar
        $idPropio=Auth::user()->id;
        $cateTiendas=DB::select("SELECT * FROM catetiendas WHERE usuarioId=$idPropio");
        return view('categorias.indexCate',['Categorias'=>$cateTiendas,'Productos'=> productos::all(),'cates'=>categorias::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idLogin=Auth::user()->id;
        $nombreCategorias = $request->get('cajaNombre');

        $nuevaCategoria = new catetiendas();
        $nuevaCategoria->nombre = $request->get('cajaNombre');
        $nuevaCategoria->usuarioId=$idLogin;
        $nuevaCategoria->save();
        /* "'Fue agregada la categoria',$nombreCategorias" */
        Session()->flash('message',"Fue agregada la categoria $nombreCategorias");
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('categorias.index',['categorias'=>categorias::all(),'Productos'=>categorias::findOrfail($id)->categoriaProducto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editarCate(Request $request, $id)
    {
        $modificarCategoria=catetiendas::find($id);
        $modificarCategoria->nombre = $request->get('cajaCategorias');
        $modificarCategoria->save();
        return redirect('/categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarCate($id)
    {
        $borrarC=catetiendas::find($id);
        $borrarC->delete();
        return redirect('/categorias');
    }
}        