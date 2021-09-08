<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $image=$request->file('img');
        $nombreImg=time().'.'.$image->getClientOriginalExtension();
        $destino=public_path('Imagenes/productos');
        $request->imgDet->move($destino, $nombreImg);
        //almacenamos la informacion en la bd
        $nuevoDetalles = new productos();
        $nuevoDetalles->nombre=$request->get('');
        $nuevoDetalles->drescripcion=$request->get('');
        $nuevoDetalles->ubicacion=$request->get('');
        $nuevoDetalles->cantidad_disponible=$request->get('');
        $nuevoDetalles->precio=$request->get('');
        $nuevoDetalles->imagen=$nombreImg;
        $nuevoDetalles-> save();
        return redirect('/');
    }
    /**
     * 
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
