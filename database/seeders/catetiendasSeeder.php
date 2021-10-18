<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\catetiendas;

class catetiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        catetiendas::create([
            'nombre'=>'Frutas',
            'tiendaId'=>'1'
        ]);

        catetiendas::create([
            'nombre'=>'Carnes',
            'tiendaId'=>'1'
        ]);
        
        catetiendas::create([
            'nombre'=>'Cereales',
            'tiendaId'=>'1'
        ]);
    }
}