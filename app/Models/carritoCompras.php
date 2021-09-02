<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carritoCompras extends Model
{
    public function carritoComprasProductos(){
        return $this->hasMany(productos::class);
    }
}
