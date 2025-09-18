<?php

namespace Database\Factories;

use App\Models\Cours;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ChapitreFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => fake()->sentence(3),
            'cours_id' => Cours::factory(), //  crée automatiquement un Cours lié
           // 'cours_id' => Cours::inRandomOrder()->first()->id, //utiliser un cours existant

        ];
    }
}
