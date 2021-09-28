<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productos; 

class categorias extends Model
{
    public function categoriaProducto(){
        //una categoria puede tener muchos productos
        return $this->hasMany(productos::class);
    }
}
