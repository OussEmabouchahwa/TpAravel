<?php

namespace Database\Factories;

use App\Models\Epreuve;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpreuveFactory extends Factory
{
    protected $model = Epreuve::class;

    public function definition(): array
    {
        return [
            'numepreuve' => $this->faker->unique()->numerify('EP####'), // Generate a unique number like 'EP1234'
            'datepreuve' => $this->faker->date(), // Random date
            'lieu' => $this->faker->city(), // Random city
        ];
    }
}
