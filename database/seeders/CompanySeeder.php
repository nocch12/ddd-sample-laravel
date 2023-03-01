<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\CompanyItem;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory(10)
            ->has(CompanyItem::factory(3))
            ->has(Shop::factory(3))
            ->create();
    }
}
