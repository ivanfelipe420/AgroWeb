<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class productoControlador extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen=$request->file('cajaImg');
        $nombreImg=time().'.'.$imagen->getClientOriginalExtension();
        $destino=public_path('imagenes/productos');
        $request->cajaImg->move($destino,$nombreImg);
        
        $nuevoProducto = new productos();
        $nuevoProducto->nombrePro = $request->get('cajaNombre');
        $nuevoProducto->descripcionPro = $request->get('cajaDescripcion');
        $nuevoProducto->categoriaPro = $request->get('cajaCategoria');
        $nuevoProducto->unidadPro = $request->get('cajaUnidad');
        $nuevoProducto->precioPro = $request->get('cajaPrecio');
        $nuevoProducto->imagen=$nombreImg;
        $nuevoProducto->save();
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
}
