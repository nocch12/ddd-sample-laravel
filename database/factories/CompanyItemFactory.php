<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CrossSectionItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyItem>
 */
class CompanyItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'company_id'            => Company::factory(),
            'manage_item_id'        => $this->faker->ean8(),
            'name'                  => $this->faker->safeColorName(),
            'cross_section_item_id' => CrossSectionItem::factory(),
            'jan_code'              => $this->faker->optional()->ean13(),
        ];
    }
}
