<?php

namespace Database\Seeders;

use App\Models\Chapitre;
use App\Models\Cours;
use App\Models\Enseignant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CoursFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $enseignants = Enseignant::factory(10)->create();
        $cours = Cours::factory(5)->create();

        // Associer enseignants aux cours
        $cours->each(function ($c) use ($enseignants) {
            $c->enseignants()->attach(
                $enseignants->random(rand(1, 3))->pluck('id')->toArray()
            );

            // Ajouter des chapitres pour chaque cours
            Chapitre::factory(rand(2, 5))->create([
                'cours_id' => $c->id,
            ]);
        });
    }

}
