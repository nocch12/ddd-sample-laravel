<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'company_id'     => Company::factory(),
            'manage_shop_id' => sprintf('%03d', $this->faker->numberBetween(1, 300)),
            'name'           => $this->faker->city(),
            'address'        => $this->faker->address(),
        ];
    }
}
