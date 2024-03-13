<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */

class CategoriaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->unique()->word,
            'descricao' => $this->faker->text,
        ];
    }
}
