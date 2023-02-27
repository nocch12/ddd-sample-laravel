<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PointSettingSeeder::class);

        PaymentMethod::query()->delete();
        $method1 = new PaymentMethod([
            'id'   => 1,
            'name' => '現金',
        ]);
        $method1->save();
        $method1->pointSettings()->attach(1);
        $method1->pointSettings()->attach(3);

        $method2 = new PaymentMethod([
            'id'   => 2,
            'name' => 'クレジット',
        ]);
        $method2->save();
        $method2->pointSettings()->attach(2);

        $method3 = new PaymentMethod([
            'id'   => 3,
            'name' => '電子決済',
        ]);
        $method3->save();
        $method3->pointSettings()->attach(2);
    }
}
