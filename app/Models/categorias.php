<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    public function productoCategoria(){
        //una categoria puede tener muchos productos
        return $this->hasMany(productos::class);
    }
}
