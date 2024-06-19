<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'descripción' => fake()->text(),
            'stock' => fake()->numberBetween(1, 100),
            'talla' => fake()->numberBetween(12, 44),
            'precio' => fake() ->numberBetween(1000, 10000),
        ];
    }
}
