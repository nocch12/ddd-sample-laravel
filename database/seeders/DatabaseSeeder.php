<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TruncateAllTables::class);

        // 企業と商品を作成
        $this->call(CompanySeeder::class);

        // ユーザ作成
        $this->call(UserSeeder::class);
        
        // クーポン作成
        $this->call(CouponSeeder::class);

        // 支払い作成
        // $this->call(PaymentSeeder::class);
        // $this->call(CompanySeeder::class);
    }
}
