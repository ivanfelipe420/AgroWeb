<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        User::create([
            'name'=>'Ivan',
            'email'=>'Ivanromeropgl21@hotmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');
        User::create([
            'name'=>'Yessica Cardenas',
            'email'=>'cardenas19yessica@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Carlos',
            'email'=>'Carlos65@gmail.com',
            'password'=>bcrypt('987654321')
        ])->assignRole('Usuario');

        User::factory(5)->create();
    }
}
