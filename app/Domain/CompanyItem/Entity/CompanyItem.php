<?php declare(strict_types=1);

namespace App\Domain\CompanyItem\Entity;

use App\Domain\Company\Entity\CompanyId;
use App\Domain\Shared\Date;

/**
 * 加盟企業商品
 */
class CompanyItem
{
    public function __construct(
        public readonly CompanyItemId $id,
        public readonly string $name,
        public readonly CompanyId $companyId,
        public readonly string $companyName,
        public readonly Date $contractBegin,
        public readonly Date $contructEnd,
        public readonly ?CrossSectionItemId $crossSectionItemId = null,
        public readonly ?string $crossSectionItemName = null,
        public readonly ?JANCode $JANCode = null,
    )
    {
    }
}