<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\categorias;

class indexControlador extends Controller 
{
    public function index()
    {
        return view('index',['categorias'=>categorias::all()],['productos'=>productos::all()]);
        
    }
   
} 
