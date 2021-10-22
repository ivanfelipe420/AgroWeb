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
            'descripcion'=>'Atendemos en Madrid, Mosquera y funza despachando el día sábado los pedidos recibidos durante la semana.',
            'telefono'=>'3219244193',
            'direccion'=>'Calle 15 A 4-79',
            'email'=>'cardenas19yessica@gmail.com',
            'idtiendausuario'=>2
        ]);
        tiendas::create([
            'nombreTienda'=>'IvanFruver',
            'nombrePropietario'=>'Ivan Romero',
            'telefono'=>'3219244193',
            'direccion'=>'Calle 15 A 4-79',
            'email'=>'ivanromero@gmail.com',
            'idtiendausuario'=>1
        ]);
    }
}