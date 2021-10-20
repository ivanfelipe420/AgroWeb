<?php

namespace App\Http\Controllers;

use App\Models\tiendas;
use App\Models\productos;
use App\Models\categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class indexControlador extends Controller 
{
    public function index()
    {
        return view('index',['categorias'=>categorias::all(),'productos'=>productos::all() , 'oferta'=>DB::select("SELECT * FROM productos WHERE promocion=1"),'cates'=>categorias::all(),'tienda'=>tiendas::all()]);
        
    }
   
} 
