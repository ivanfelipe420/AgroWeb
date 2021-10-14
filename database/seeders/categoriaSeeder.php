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
            'imagen'=>'Frutasico.jpg',
        ]);

        categorias::create([
            'nombre'=>'Carnes',
            'imagen'=>'carnes.jpg',
        ]);
        
        categorias::create([
            'nombre'=>'Cereales',
            'imagen'=>'cereales.jpg',
        ]);

        categorias::create([
            'nombre'=>'Especias',
            'imagen'=>'especias.jpg',
        ]);

        categorias::create([
            'nombre'=>'Granos',
            'imagen'=>'grano.jpg',
        ]);

        categorias::create([
            'nombre'=>'Hortalizas',
            'imagen'=>'hortaliza.jpg',
        ]);

        categorias::create([
            'nombre'=>'Lacteos',
            'imagen'=>'lacteos.jpg',
        ]);

        categorias::create([
            'nombre'=>'Legumbres',
            'imagen'=>'legumbres.jpg',
        ]);

        categorias::create([
            'nombre'=>'Medicinas',
            'imagen'=>'medicinales.jpg',
        ]);

        categorias::create([
            'nombre'=>'Platano',
            'imagen'=>'platano.jpg',
        ]);

        categorias::create([
            'nombre'=>'tuberculos',
            'imagen'=>'tuberculo.jpg',
        ]);

        categorias::create([
            'nombre'=>'Vegetales',
            'imagen'=>'verdurasico.jpg',
        ]);

        categorias::create([
            'nombre'=>'Semillas',
            'imagen'=>'semillas.jpg',
        ]);
    }
}
