<?php

namespace Database\Seeders;

use App\Models\Evento;
use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        $eventIds = Evento::pluck('id')->toArray(); // Ottieni gli ID degli eventi

        for ($i = 0; $i < 50; $i++) {
            $newPersona = new Persona();
            $newPersona->first_name = $faker->unique()->firstName();
            $newPersona->last_name = $faker->unique()->lastName();
            $newPersona->event_id = $faker->randomElement($eventIds); // Passa gli ID degli eventi a randomElement
            $newPersona->save();
        }
    }
}
