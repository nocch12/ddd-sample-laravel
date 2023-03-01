<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'                 => $this->faker->unique()->ean8(),
            'name'               => $this->faker->lastName(),
            'distribution_limit' => $this->faker->numberBetween(2, 10),
            'distribution_begin' => $this->faker->dateTimeBetween('-60 days', '-30 days'),
            'distribution_end'   => $this->faker->dateTimeBetween('-30 days', '-15 days'),
            'use_begin'          => $this->faker->dateTimeBetween('-14 days'),
            'use_end'            => $this->faker->dateTimeBetween('now', '+1 days'),
            'point_rate'         => $this->faker->randomElement([1.0, 1.5, 3.0]),
            'coupon_type'        => $this->faker->randomElement(['shop', 'item', 'all']),
        ];
    }
}
