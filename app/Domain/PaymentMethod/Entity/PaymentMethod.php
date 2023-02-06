<?php declare(strict_types=1);

namespace App\Domain\PaymentMethod\Entity;

/**
 * 支払い方法
 */
class PaymentMethod
{
    public function __construct(
        public readonly PaymentMethodId $id,
        public readonly string $name,
        public readonly PointSetting $pointSetting
    )
    {
        # code...
    }
}