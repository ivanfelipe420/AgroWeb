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
            'usuarioId'=>'2'
        ]);

        catetiendas::create([
            'nombre'=>'Carnes',
            'usuarioId'=>'2'
        ]);
        
        catetiendas::create([
            'nombre'=>'Cereales',
            'usuarioId'=>'2'
        ]);
    }
}