<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'    => User::factory(),
            'shop_id'    => (fn () => Shop::inRandomOrder()->first()->id),
            'payed_at'   => $this->faker->dateTimeBetween('-60 days'),
            'used_point' => $this->faker->numberBetween(0, 99),
        ];
    }
}
