<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\categorias;
class indexControlador extends Controller
{
    public function index(){
        return view('index',['categorias'=>categorias::all()]);
    }
}
