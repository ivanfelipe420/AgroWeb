<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\tiendas;

class tiendaCategorias extends Model
{
    public function categoriaTienda(){
        //una categoria solo puede pertenecer a una tienda
        return $this->belongsTo(tiendas::class);
    }
}
