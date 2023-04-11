<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gaseosa>
 */
class GaseosaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(2),
            'precio' => $this->faker->randomFloat(2, 1, 6),
            'presentacion' => $this->faker->randomElement(['500g', 'x1.5Lt', '2LT', '2.25LT']),
            'stock' => $this->faker->numberBetween(5, 50),
        ];
    }
}
