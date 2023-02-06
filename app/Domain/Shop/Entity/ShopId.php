<?php declare(strict_types=1);

namespace App\Domain\Shop\Entity;

class ShopId
{
    public function __construct(public readonly string $id)
    {
    }
}