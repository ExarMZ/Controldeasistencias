<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Vaciar la tabla. 
        School::truncate();

        $faker = \Faker\Factory::create();

        //Crear Escuelas ficticias en la tabla
        for ($i = 0; $i < 5; $i++){
            School::create([
                'name' => $faker->company,
                'address' => $faker->address,
                'phone' => $faker->numerify('##########')
            ]);
        }
    }
}
