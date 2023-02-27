<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'        => (string) $this->faker->unique()->numberBetween(100000000, 999999999),
            'name'      => $this->faker->company(),
            'joined_at' => $this->faker->dateTimeBetween('-2 years', '-60 days'),
        ];
    }
}
