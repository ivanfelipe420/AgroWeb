<?php

namespace App\Http\Controllers;

use App\Models\tiendas;
use App\Models\productos;
use App\Models\categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function userEstaEnTienda()
        {
            if (Auth::guest()){
                $idUser=0;
            }else{
                $idUser=Auth::user()->id;
            }
            $ids=DB::select("SELECT * FROM tiendas WHERE idtiendaUsuario=$idUser");
                if ($ids != null) {
                    return true;
                }else{
                    return false;
                }
            
        }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',['categorias'=>categorias::all(),'productos'=>productos::all() , 'oferta'=>DB::select("SELECT * FROM productos WHERE promocion=1"),'cates'=>categorias::all(),'tienda'=>tiendas::all()]);   
    }

    public function show($id)
    {
        $categoria=DB::select("SELECT * FROM productos WHERE categorias_id=$id");
        $cate=categorias::find($id);
        //dd($categoria->id);
        return view('categorias.todo',['categoria'=>$cate,'cates'=>categorias::all(),'productos'=>$categoria,'produc'=>productos::all()]);
        //return view('categorias.todo',['cates'=>categorias::all(),'productos'=>productos::select("SELECT * FROM productos WHERE categorias_id=$id")]);
    }
}
