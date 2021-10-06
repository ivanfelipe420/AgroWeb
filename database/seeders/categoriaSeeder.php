<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categorias;

class categoriaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        categorias::create([
            'nombre'=>'Frutas',
            'descripcion'=>'ddd',
        ]);
        categorias::create([
            'nombre'=>'Vegetales',
            'descripcion'=>'ddd',
        ]);
        categorias::create([
            'nombre'=>'Semillas',
            'descripcion'=>'ddd',
        ]);
    }
}
