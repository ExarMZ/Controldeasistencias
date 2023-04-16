<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Vaciar la tabla. 
        Career::truncate();

        $faker = \Faker\Factory::create();

        //Crear careeras ficticias en la tabla
        for ($i = 0; $i < 5; $i++){
            Career::create([
                'name' => $faker->jobTitle
            ]);
        }
    }
}
