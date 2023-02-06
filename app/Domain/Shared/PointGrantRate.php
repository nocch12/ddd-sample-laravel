<?php declare(strict_types=1);

namespace App\Domain\Shared;

use Exception;

/**
 * ポイント付与率
 */
class PointGrantRate
{
    public function __construct(public readonly float $value)
    {
        if ($value <= 0) {
            throw new Exception();
        }
        if (round($value, 1) !== $value) {
            throw new Exception();
        }
    }
}