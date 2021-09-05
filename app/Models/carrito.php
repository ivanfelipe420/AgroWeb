<?php
//hasMany->uno a muchos
//belongs to->  uno a uno
//belongs to Many-> muchos a muchos
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productos;

class carrito extends Model
{
    public function carritoProductos(){
        // un carrito tiene muchos productos
        return $this->hasMany(productos::class);
    }
}
