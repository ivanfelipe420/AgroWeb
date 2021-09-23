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
            'telefono'=>'3102302487',
            'email'=>'Ivanromeropgl21@hotmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');
        User::create([
            'name'=>'Yessica Cardenas',
            'telefono'=>'3128542365',
            'email'=>'cardenas19yessica@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');
        User::create([
            'name'=>'Kevin Gordillo',
            'telefono'=>'3128563652',
            'email'=>'kefego2000@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Andres Garcia',
            'telefono'=>'3219568683',
            'email'=>'endresfel111150@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Carlos',
            'telefono'=>'3005486325',
            'email'=>'Carlos65@gmail.com',
            'password'=>bcrypt('987654321')
        ])->assignRole('Usuario');

        User::factory(5)->create();
    }
}
