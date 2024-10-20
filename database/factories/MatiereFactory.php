<?php

namespace Database\Factories;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereFactory extends Factory
{
    protected $model = Matiere::class;

    public function definition(): array
    {
        return [
            'libelle' => $this->faker->word(), // Generates a random word as the label
            'coef' => $this->faker->numberBetween(1, 10), // Generates a random coefficient between 1 and 10
        ];
    }
}
