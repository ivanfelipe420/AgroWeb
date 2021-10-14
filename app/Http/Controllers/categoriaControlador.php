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
        //formulario Editar o borrar
        return view('categorias.editar',['categorias'=>categorias::all()]);
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
        $image=$request->file('imagen');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $image_resize=categorias::make($image->getRealPath());
        $image_resize->resize(300,300);
        $image_resize->save(public_path('imagenes/categorias/').$filename);
        

        $nuevaCategoria = new categorias();
        $nuevaCategoria->nombre = $request->get('cajaCategorias');
        $nuevaCategoria->imagen=$filename;
        $nuevaCategoria->save();
        return redirect('/categorias');
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
        $categoriasM = categorias::find($id);
        return view('categorias.editar',['categoriasM'=>$categoriasM]);
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
        // $modificarCategoria =categorias::find($id);
        // if(($request->get('cajaCategorias'))==null){
        //     $modificarCategoria->nombre=$modificarCategoria->nombre;
        // }else{
        //     $modificarCategoria->nombre = $request->get('cajaCategorias');
        // }
        $modificarCategoria =categorias::find($id);
        $modificarCategoria->nombre = $request->get('cajaCategorias');
        // $modificarCategoria->descripcion = $request->get('cajaDescripcion');
        $modificarCategoria->save();
        return redirect('/categorias');
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
        return redirect('/categorias');
    }
    
    public function confirmarId($id){
        $eliminarC=categorias::find($id);
        return view('categorias.eliminar',['eliminarC'=>$eliminarC]);
        }
}        