<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\categorias;
use Illuminate\Support\Facades\DB;

class promocionController extends Controller
{
    public function index()
    {
        return view('indexPromocion',['Productos'=>productos::all() , 'oferta'=>DB::select("SELECT * FROM productos WHERE promocion=1"),'cates'=>categorias::all()]);   
    }
}
