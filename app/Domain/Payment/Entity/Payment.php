<?php declare(strict_types=1);

namespace App\Domain\Payment\Entity;

use App\Domain\Company\Entity\CompanyId;
use App\Domain\Shop\Entity\ShopId;
use App\Domain\User\Entity\UserId;
use DateTime;

/**
 * 支払い
 * 
 * @property-read PaymentDetailMethod[] $paymentDetailMethods
 * @property-read paymentDetailItems[] $paymentDetailItems
 */
class Payment
{
    public function __construct(
        public readonly string $receiptNumber,
        public readonly UserId $userId,
        public readonly CompanyId $companyId,
        public readonly ShopId $shopId,
        public readonly DateTime $paymentDate,
        public readonly int $usedPoint,
        public readonly array $paymentDetailMethods,
        public readonly array $paymentDetailItems
    )
    {
    }
}