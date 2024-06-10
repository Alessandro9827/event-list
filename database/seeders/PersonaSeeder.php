<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 50; $i++) { 
            $newPersona = new Persona();
            $newPersona->nome = $faker->unique()->firstName();
            $newPersona->cognome = $faker->unique()->lastName();
            $newPersona->event_id = $faker->randomElement();
            $newPersona->save();
        }
    }
}
