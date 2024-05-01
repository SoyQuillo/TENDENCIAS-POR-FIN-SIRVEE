<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'fuel_type' => $this->faker->randomElement(['Gasolina', 'Diésel', 'Gas', 'Otros']), // Tipo de combustible
            'price_per_liter' => $this->faker->randomFloat(2, 1, 3), // Precio por litro
            'available_stock' => $this->faker->numberBetween(100, 1000), // Stock disponible (puede ser nulo)
            'image' => null, // Nombre de la imagen (puede ser nulo)
        ];
    }
}
