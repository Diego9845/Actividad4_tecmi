<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuperHero>
 */
class SuperHeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'universe_id'   => fake()->numberBetween(1,2),
            'gender_id'     => fake()->numberBetween(1,3),
            'name'          => fake()->username(),
            'real_name'     => fake()->Name(),
            'picture'       => fake()->imageUrl(640, 480, 'superhero')
        ];
    }
}
