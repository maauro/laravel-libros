<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(2),
            'prologo' => $this->faker->sentence(50),
            'precio' => $this->faker->randomFloat($maxDecimal = 2, $min = 15, $max = 500),
            'stock' => $this->faker->numberBetween(5, 20),
            'estado' => $this->faker->randomElement(['disponible', 'nodisponible']),
        ];
    }
}
