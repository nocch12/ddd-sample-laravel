<?php

namespace Database\Factories;

use App\Models\CompanyItem;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentDetailItem>
 */
class PaymentDetailItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'payment_id' => Payment::factory(),
            // 'item_id' => CompanyItem::factory(),
            'unit_price' => $this->faker->numberBetween(100, 2000),
            'quantity'   => $this->faker->numberBetween(1, 3),
            'assigned_point'   => $this->faker->numberBetween(1, 3),
        ];
    }
}
