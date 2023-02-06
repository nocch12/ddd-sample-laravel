<?php declare(strict_types=1);

namespace App\Domain\Coupon\Entity;

use App\Domain\Company\Entity\CompanyId;
use App\Domain\CompanyItem\Entity\CompanyItemId;

/**
 * クーポン商品
 */
class CouponItem
{
    public function __construct(
        public readonly CompanyId $companyId,
        public readonly CompanyItemId $companyItemId
    ) {}
}