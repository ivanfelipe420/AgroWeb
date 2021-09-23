<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\carrito;
use App\Models\categoria;

class productos extends Model
{
    public function productoCarrito(){
        //un producto solo tiene un carrito(creooooooo sino es muchos a muchos)
        return $this->belongsTo(carritos::class);
    }
    public function productoCategoria(){
        //un producto solo puede tener una categoria
        return $this->belongsTo(categorias::class);
    }
}
