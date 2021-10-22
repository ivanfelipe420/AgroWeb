<?php

namespace App\Http\Controllers;

use App\Models\carritos;
use App\Models\categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class carritoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function productoYaEstaEnCarrito($idProducto)
        {
            if (Auth::guest()){
                $idUsuario=0;
            }else{
                $idUsuario=Auth::user()->id;
            }
            $ids=DB::select("SELECT * FROM carritos WHERE idProducto=$idProducto AND idUsuario=$idUsuario ");
                if ($ids != null) {
                    return true;
                }else{
                    return false;
                }
        }
    public function agregarProductoCarrito(Request $request){
        $idProducto = $request->get('id_producto'); //id del producto
        $idLogin=Auth::user()->id; //id de la persona logueada

        $nuevaProducto= new carritos();
        $nuevaProducto->idUsuario= $idLogin;
        $nuevaProducto->idProducto=$idProducto;
        $nuevaProducto->save();
        return back()->withInput();
    }
    public function eliminarProCarrito(Request $request){
        $idLogin=Auth::user()->id;
        $idProducto = $request->get('id_producto');
        $sentencia = DB::SELECT("DELETE FROM carritos WHERE idUsuario = $idLogin AND idProducto = $idProducto");
        return back()->withInput();

    }
    public function obtenerProductosEnCarrito(){
        $idLogin=Auth::user()->id;
        $sentencia = DB::SELECT("SELECT *
        FROM productos
        INNER JOIN carritos
        ON productos.id = carritos.idProducto
        WHERE carritos.idUsuario = $idLogin");
        return view('carrito.index',['productos'=>$sentencia,'cates'=>categorias::all()]);
    }
}
