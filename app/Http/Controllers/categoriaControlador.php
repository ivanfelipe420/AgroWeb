<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categorias;
use App\Models\productos;

class categoriaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dd($request);
        //return view('index',['categorias'=>categorias::findOrfail($id)]); 
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
    public function store(Request $request, $id)
    {
        $nuevaCategoria = new categorias();
        $nuevaCategoria->nombre = $request->get('cajaNombre');
        $nuevaCategoria->descripcion = $request->get('cajaDescripcion');
        $nuevaCategoria->categorias_id=$id;
        $nuevaCategoria->save();
        return redirect('/home');
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
    public function edit($id)
    {
        //return view('categorias.editar',['categorias'=>categorias::all()]);
    } 
    public function editBorrar($id){
        return view('categorias.editar',['categorias'=>categorias::all()]);
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
        
        $modificarCategoria =categorias::find($id);
        $modificarCategoria->nombre = $request->get('cajaNombre');
        $modificarCategoria->descripcion = $request->get('cajaDescripcion');
        $nuevaCategoria->categorias_id=$nuevaCategoria=$categorias_id;
        $modificarCategoria->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrarC=categorias::find($id);
        $borrarC->delete();
        return redirect('/home');
    }
    
    public function confirmarId($id){
        $eliminarC=categorias::find($id);
        return view('categorias.eliminar',['eliminarC'=>$eliminarC]);
        }
}