<?php declare(strict_types=1);

namespace App\Domain\CouponApply\Entity;

use App\Domain\Coupon\Entity\CouponId;
use DateTime;

/**
 * ポイント利用
 */
class CouponApply
{
    public function __construct(
        public readonly string $userId,
        public readonly CouponId $couponId,
        /** 配布日時 */
        public readonly ?DateTime $distributedDate,
        /** 利用済みフラグ */
        public readonly bool $isUsed,
    )
    {}

    public function isDistributed(): bool
    {
        return is_null($this->distributedDate);
    }
}