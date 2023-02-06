<?php declare(strict_types=1);

namespace App\Domain\Coupon\Entity;

use App\Domain\Company\Entity\CompanyId;
use App\Domain\Shop\Entity\ShopId;

/**
 * クーポン店舗
 */
class CouponShop
{
    public function __construct(
        public readonly CompanyId $companyId,
        public readonly ShopId $shopId
    ) {}
}