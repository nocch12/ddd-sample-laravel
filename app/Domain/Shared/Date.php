<?php declare(strict_types=1);

namespace App\Domain\Shared;

use DateTime;
use Exception;

class Date
{
    public function __construct(public readonly string $value)
    {
        if(!preg_match('/\A[1-9]{1}[0-9]{0,3}-[0-9]{1,2}-[0-9]{1,2}\z/', $value)){
            throw new Exception();
        }

        [$y, $m, $d] = explode('-', $value);
        if(!checkdate((int) $m, (int) $d, (int) $y)){
            throw new Exception();
        }
    }

    public function toDateTime(): Datetime
    {
        return new DateTime($this->value);
    }
}