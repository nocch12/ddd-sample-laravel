<?php

namespace Database\Seeders;

use App\Models\PointSetting;
use Illuminate\Database\Seeder;

class PointSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        PointSetting::query()->delete();
        PointSetting::insert([
            [
                'id' => 1,
                'begin' => '2020-01-01 10:00:00',
                'end' => '2050-01-01 10:00:00',
                'point_rate' => 1.0,
            ],
            [
                'id' => 2,
                'begin' => '2020-01-01 10:00:00',
                'end' => '2050-01-01 10:00:00',
                'point_rate' => 0.5,
            ],
            [
                'id' => 3,
                'begin' => '2020-01-01 10:00:00',
                'end' => '2022-01-01 10:00:00',
                'point_rate' => 1.5,
            ],
        ]);
    }
}
