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
            'imagen'=>'1631736763.jpg',
            'idUsuario'=>2,
            'categoriasTiendaId'=>1
        ]);
        productos::create([
            'nombrePro'=>'Brocoli',
            'descripcionPro'=>'Brocoli verde y nutritivo',
            'unidadPro'=>'Gramo',
            'precioPro'=>'1000',
            'cantidadPro'=>'40',
            'categorias_id'=>'2',
            'imagen'=>'1632933537.jpg',
            'idUsuario'=>2,
            'categoriasTiendaId'=>2
        ]);
        productos::create([
            'nombrePro'=>'Nuez',
            'descripcionPro'=>'Nuez del ratón',
            'unidadPro'=>'Kilo',
            'precioPro'=>'18000',
            'cantidadPro'=>'100',
            'categorias_id'=>'3',
            'idUsuario'=>2,
            'categoriasTiendaId'=>3
        ]);
        productos::create([
            'nombrePro'=>'Pera',
            'unidadPro'=>'Kilo',
            'precioPro'=>'4000',
            'cantidadPro'=>'150',
            'categorias_id'=>'4',
            'promocion'=>1,
            'precioPromo'=>2000,
            'imagen'=>'1633481546.jpg',
            'idUsuario'=>2,
            'categoriasTiendaId'=>1
        ]);
        productos::create([
            'nombrePro'=>'Hojas',
            'unidadPro'=>'Unidad',
            'precioPro'=>'5000',
            'cantidadPro'=>'50',
            'promocion'=>1,
            'precioPromo'=>3000,
            'categorias_id'=>'4',
            'idUsuario'=>2,
            'categoriasTiendaId'=>2
        ]);
    }
}
