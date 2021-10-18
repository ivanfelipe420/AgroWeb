<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(tiendasSeeder::class);
        $this->call(categoriaSeeder::class);
        $this->call(catetiendasSeeder::class);
        $this->call(productoSeeder::class);
        
    }
}
