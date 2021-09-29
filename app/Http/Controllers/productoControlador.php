<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\categorias;
use Image; 

class productoControlador extends Controller
{
    /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');  //para ver si esta logueada por favor
    }
    public function index()
    {
        return view('productos.index',
                        ['categorias'=>categorias::all()],['Productos'=>productos::all()]);
    }

    /* Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.crear',['categorias'=>categorias::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file('cajaImg');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $image_resize=Image::make($image->getRealPath());
        $image_resize->resize(300,300);
        $image_resize->save(public_path('imagenes/productos/').$filename);

        $nuevoProducto = new productos();
        $nuevoProducto->nombrePro = $request->get('cajaNombre');
        $nuevoProducto->descripcionPro = $request->get('cajaDescripcion');
        $nuevoProducto->categorias_id = $request->get('cajaCategoria');
        $nuevoProducto->unidadPro = $request->get('cajaUnidad');
        $nuevoProducto->precioPro = $request->get('cajaPrecio');
        $nuevoProducto->imagen=$filename;
        $nuevoProducto->save();
        return redirect('/productos');
    }
/* Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos,$id)
    {
        return view('productos.show',['Productos'=> productos::findOrfail($id)]);
    }

    /* Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productosM = productos::find($id);
        return view('productos.editar',['productosM'=>$productosM],['categorias'=>categorias::all()]);
    }

    /* Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $image=$request->file('cajaImg');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $image_resize=Image::make($image->getRealPath());
        $image_resize->resize(300,300);
        $image_resize->save(public_path('imagenes/productos/').$filename);

        $modificarProducto =productos::find($id);
        $modificarProducto->nombrePro = $request->get('cajaNombre');
        $modificarProducto->descripcionPro = $request->get('cajaDescripcion');
        $modificarProducto->unidadPro = $request->get('cajaUnidad');
        $modificarProducto->precioPro = $request->get('cajaPrecio');
        $modificarProducto->imagen=$filename;
        $modificarProducto->save();
        return redirect('/productos');
    }

    /* Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
