<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livro>
 */
class LivroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->word(),
            'autor' => fake()->name(),
            'editora' => fake()->name(),
            'ano_de_publicacao' => fake()->year(),
            'id_categoria' => fake()->numberBetween(1, 5),
            'qtd_disponivel' => fake()->randomNumber(),
        ];
    }
}
