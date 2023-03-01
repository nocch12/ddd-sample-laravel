<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CouponDistribution>
 */
class CouponDistributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'distribution_status' => 1,
            'distributed_at'      => $this->faker->dateTimeBetween('-30 days'),
        ];
    }
}
