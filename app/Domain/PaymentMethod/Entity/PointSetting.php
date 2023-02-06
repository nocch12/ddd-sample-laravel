<?php declare(strict_types=1);

namespace App\Domain\PaymentMethod\Entity;

use App\Domain\Shared\PointGrantRate;
use DateTime;

/**
 * ポイント設定
 */
class PointSetting
{
    public function __construct(
        public readonly DateTime $begin,
        public readonly DateTime $end,
        public readonly PointGrantRate $pointGrantRate
    )
    {
    }
}