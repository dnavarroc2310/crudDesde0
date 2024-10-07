<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teams;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeamsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */
    protected $model = Teams::class;
    public function definition(): array
    {
        return [
            'nombre'=>fake()->name(),
            'Fundacion'=>fake()->year(),
            'City'=>fake()->city(),
            'pais'=>fake()->country(),
            'estadio'=>fake()->name(),
            'ligasGanadas'=>fake()->numberBetween(0, 10),
            'copasGanadasLocales'=>fake()->numberBetween(0, 10),
            'championsGanadas'=>fake()->numberBetween(0, 10),
        ];
    }
}
