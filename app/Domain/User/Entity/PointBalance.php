<?php declare(strict_types=1);

namespace App\Domain\User\Entity;

/**
 * ポイント残高
 */
class PointBalance
{
    public function __construct(public readonly float $value)
    {
    }

    public function usablePoint(): int
    {
        return (int) round($this->value);
    }
}
