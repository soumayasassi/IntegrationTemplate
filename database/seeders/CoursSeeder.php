<?php

namespace Database\Seeders;

use App\Models\Cours;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Cours::create([
            'titre' => 'Introduction à Laravel',
            'description' => 'Cours de base sur Laravel 12',
            "duree"=> '12'
        ]);

        Cours::factory(10)->create();
    }
}
