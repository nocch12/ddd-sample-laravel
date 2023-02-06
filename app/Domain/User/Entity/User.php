<?php declare(strict_types=1);

namespace App\Domain\User\Entity;

use App\Domain\Shared\Date;
use Gender;

/**
 * 会員
 */
class User
{
    public function __construct(
        public readonly UserId $id,
        public readonly string $name,
        public readonly Date $joinDate,
        public readonly Gender $gender,
        public readonly Date $birthDate,
        public readonly PointBalance $pointBalance
    )
    {
    }
}