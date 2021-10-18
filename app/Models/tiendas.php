<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modelds\User;
use App\Models\tiendaCategorias;

class tiendas extends Model
{ 
    public function tiendaUsuario(){
        //una tienda pertenece a un usuario
         return $this->belongsTo(User::class);
    }
    public function tiendaCategorias(){
        //una tienda puede tener muchas categorias
        return $this->hasMany(tiendaCategorias::Class);
    }
}
