<?php
//hasMany->uno a muchos
//belongs to->  uno a uno
//belongs to Many-> muchos a muchos
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productos;

class carritos extends Model
{
    public function carritoProductos(){
        // muchos carritos tiene muchos productos
        return $this->belongstoMany(productos::class);
    }
}
