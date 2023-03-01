<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\CompanyItem;
use App\Models\Coupon;
use App\Models\CouponDistribution;
use App\Models\CouponShop;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 既存企業を取得
        $companies = Company::all();

        $companies->map(function (Company $company) {
            // クーポン作成
            $coupons = Coupon::factory(random_int(1, 3))
                ->state(['company_id' => $company->id])
                ->create();

            $coupons->map(
                fn (Coupon $coupon) => $this->createCouponRelations($coupon, $company)
            );
        });
    }

    /**
     * クーポンに紐づくデータを作成
     *
     * @param Coupon $coupon
     * @param Company $company
     * @return void
     */
    private function createCouponRelations(Coupon $coupon, Company $company)
    {
        if ($coupon->coupon_type === 'shop') {
            $shops = $company
                ->shops()
                ->getQuery()
                ->inRandomOrder()
                ->limit(random_int(1, 10))
                ->get();
            $shopIds = $shops->map(fn (Shop $shop) => $shop->id)->toArray();
            $coupon->shops()->attach($shopIds);
        }
        if ($coupon->coupon_type === 'item') {
            $items = $company
                ->companyItems()
                ->getQuery()
                ->inRandomOrder()
                ->limit(random_int(1, 10))
                ->get();
            $itemIds = $items->map(fn (CompanyItem $item) => $item->id)->toArray();
            $coupon->items()->attach($itemIds);
        }

        // クーポンを配布
        $users = User::inRandomOrder()->limit($coupon->distributionLimit)->get();
        $users->map(function (User $user) use ($coupon) {
            CouponDistribution::factory()
                ->state([
                    'coupon_id' => $coupon->id,
                    'user_id' => $user->id,
                ])
                ->create();
        });
    }
}
