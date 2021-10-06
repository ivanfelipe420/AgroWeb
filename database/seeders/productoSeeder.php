<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\productos;

class productoSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        productos::create([
            'nombrePro'=>'Manzana',
            'descripcionPro'=>'Ricas manzanas rojas',
            'unidadPro'=>'Unidad',
            'precioPro'=>'1700',
            'cantidadPro'=>'100',
            'categorias_id'=>'1',
            'imagen'=>'1631736763.jpg'
        ]);
        productos::create([
            'nombrePro'=>'Brocoli',
            'descripcionPro'=>'Brocoli verde y nutritivo',
            'unidadPro'=>'Gramo',
            'precioPro'=>'1000',
            'cantidadPro'=>'40',
            'categorias_id'=>'2',
            'imagen'=>'1632933537.jpg'
        ]);
        productos::create([
            'nombrePro'=>'Nuez',
            'descripcionPro'=>'Nuez del ratón',
            'unidadPro'=>'Kilo',
            'precioPro'=>'18000',
            'cantidadPro'=>'100',
            'categorias_id'=>'3',
            'imagen'=>'1632933772.jpg'
        ]);
    }
}
