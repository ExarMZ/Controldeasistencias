<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Vaciar la tabla. 
        User::truncate();

        $faker = \Faker\Factory::create();
        //Crear la misma clave para todos los usuarios

        $password = Hash::make('123456');
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@prueba.com',
            'password' => $password

        ]);

        //Crear usuarios ficticios en la tabla
        for ($i = 0; $i < 5; $i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }
    }
}
