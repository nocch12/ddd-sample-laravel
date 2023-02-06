<?php declare(strict_types=1);

namespace App\Domain\Payment\Entity;

/**
 * 支払い商品明細
 */
class PaymentDetailItem
{
    public function __construct(public readonly string $id)
    {
    }
}