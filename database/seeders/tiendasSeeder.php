<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tiendas;

class tiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tiendas::create([
            'nombreTienda'=>'JessieFruver',
            'nombrePropietario'=>'Yessica Cardenas',
            'telefono'=>'3219244193',
            'direccion'=>'Calle 15 A 4-79',
            'email'=>'cardenas19yessica@gmail.com',
            'idtiendausuario'=>2
        ]);
    }
}