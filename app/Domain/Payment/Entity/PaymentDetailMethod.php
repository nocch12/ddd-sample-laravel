<?php declare(strict_types=1);

namespace App\Domain\Payment\Entity;

/**
 * 支払い方法明細
 */
class PaymentDetaiMethod
{
    public function __construct(public readonly string $id)
    {
    }
}