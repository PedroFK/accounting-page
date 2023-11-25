<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    public function definition(): array
    {
        return [
        'nome'           => fake()->name(),
        'telefone'       => fake()->tollFreePhoneNumber(),
        'email'          => fake()->unique()->email(),
        'motivo_contato' => fake()->numberBetween($min = 1, $max = 2),
        'mensagem'       => fake()->text(200)
        ];
    }
}
