<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tiendaCategorias;

class tiendaCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tiendacategorias::create([
            'nombre'=>'Frutas',
            'tiendaId'=>'1'
        ]);

        tiendacategorias::create([
            'nombre'=>'Carnes',
            'tiendaId'=>'1'
        ]);
        
        tiendacategorias::create([
            'nombre'=>'Cereales',
            'tiendaId'=>'1'
        ]);
    }
}