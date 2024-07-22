<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run( Faker $faker ): void
    {
        //
        for ($i=0; $i < 30; $i++) {
            $animals = new Animal();
            $animals ->nome = $faker->unique()->word();
            $animals ->specie = $faker->word();
            $animals ->habitat = $faker->word();
            $animals ->longevità = $faker->numberBetween(1, 1000);
            $animals ->rischio_estinzione = $faker->boolean();
            $animals ->alimentazione = $faker->word();
            $animals ->regione = $faker->country();
            $animals ->save();




        }
    }
}
