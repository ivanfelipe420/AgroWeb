<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\categorias;
use Illuminate\Support\Facades\DB;

class indexControlador extends Controller 
{
    public function index()
    {
        return view('index',['categorias'=>categorias::all(),'productos'=>productos::all() , 'oferta'=>DB::select("SELECT * FROM productos WHERE promocion=1"),'cates'=>categorias::all()]);
        
    }
   
} 
