<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name(),
            'joined_at'     => $this->faker->dateTimeBetween('-2 years', '-60 days'),
            'address'       => $this->faker->address(),
            'gender'        => $this->faker->numberBetween(0, 2),
            'birth_date'    => date_format($this->faker->dateTimeBetween('-30 years', '-18 years'), 'Y-m-d'),
            'point_balance' => $this->faker->randomFloat(null, 100.000, 2000.000),
        ];
    }
}
