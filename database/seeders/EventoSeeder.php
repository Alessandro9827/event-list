<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Generator as Faker;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $newEvento = new Evento();
            $newEvento->nome_evento = $faker->unique()->monthName();
            $newEvento->data_evento = $faker->unique()->date();
        }
    }
}
