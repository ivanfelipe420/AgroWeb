<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modelds\user;

class tiendas extends Model
{
    
    public function usuarioTienda(){
        //una tienda pertenece a un usuario
         return $this->belongsTo(user::class);
     }
}
