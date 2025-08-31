<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prazo>
 */
final class PrazoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'processo_numero' => $this->faker->regexify('[0-9]{7}-[0-9]{2}.[0-9]{4}.[0-9]{1}.[0-9]{2}.[0-9]{4}'),
            'descricao' => $this->faker->sentence(),
            'data_limite' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'responsavel' => $this->faker->name(),
            'status' => $this->faker->randomElement(['pendente', 'cumprido', 'adiado']),
        ];
    }
}
