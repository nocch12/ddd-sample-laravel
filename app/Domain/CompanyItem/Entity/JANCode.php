<?php declare(strict_types=1);

namespace App\Domain\CompanyItem\Entity;

use Exception;

/**
 * JANコード
 */
class JANCode
{
    public function __construct(public readonly string $value)
    {
        if(
            !preg_match('/\A[0-9]{8}\z/', $value) ||
            !preg_match('/\A[0-9]{13}\z/', $value)
        ) {
            throw new Exception();
        }
    }
}