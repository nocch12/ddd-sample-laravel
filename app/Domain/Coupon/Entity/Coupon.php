<?php declare(strict_types=1);

namespace App\Domain\Coupon\Entity;

use App\Domain\Company\Entity\CompanyId;
use App\Domain\CompanyItem\Entity\CompanyItemId;
use App\Domain\Shared\PointGrantRate;
use App\Domain\Shop\Entity\ShopId;
use DateTime;

/**
 * クーポン
 * 
 * @property-read CouponShop[] $couponShop
 * @property-read CouponItem[] $couponItem
 */
class Coupon
{
    public function __construct(
        /** クーポンコード */
        public readonly CouponId $id,
        /** クーポン名 */
        public readonly string $name,
        /** 加盟企業コード */
        public readonly CompanyId $companyId,
        /** 配布開始日 */
        public readonly DateTime $distributionBegin,
        /** 配布終了日 */
        public readonly DateTime $distributionEnd,
        /** 利用開始日 */
        public readonly DateTime $useBegin,
        /** 利用終了日 */
        public readonly DateTime $useEnd,
        /** ポイント付与率 */
        public readonly PointGrantRate $pointGrantRate,
        /** 配布上限数 */
        public readonly int $distributionLimit,
        /** @var CouponShop[] クーポン店舗配列 */
        public readonly array $couponShop,
        /** @var CouponItem[] クーポン商品配列 */
        public readonly array $couponItem
    ) {}

    /**
     * 利用期間内かどうか
     *
     * @param Datetime $date
     * @return boolean
     */
    public function isWithInTheValidPeriod(Datetime $date): bool
    {
        return $this->useBegin <= $date
            && $this->useEnd > $date;
    }

    /**
     * 企画した加盟企業のコードか
     *
     * @param CompanyId $companyId
     * @return boolean
     */
    public function isPlannedCompany(CompanyId $companyId): bool
    {
        return $this->companyId->value === $companyId->value;
    }

    /**
     * 店舗限定か
     *
     * @return boolean
     */
    public function hasCouponShop(): bool
    {
        return count($this->couponShop) > 0;
    }

    /**
     * 商品限定か
     *
     * @return boolean
     */
    public function hasCouponItem(): bool
    {
        return count($this->couponItem) > 0;
    }
    
    /**
     * 利用可能店舗か
     *
     * @param ShopId $shopId
     * @return boolean
     */
    public function isUsableShop(ShopId $shopId): bool
    {
        if (!$this->hasCouponShop()) {
            return true;
        }
        
        foreach ($this->couponShop as $shop) {
            if ($shop->shopId === $shopId) {
                return true;
            }
        }

        return false;
    }
    
    /**
     * 利用可能商品か
     *
     * @param CompanyItemId $itemId
     * @return boolean
     */
    public function isUsableitem(CompanyItemId $itemId): bool
    {
        if (!$this->hasCouponItem()) {
            return true;
        }

        foreach ($this->couponItem as $item) {
            if ($item->companyItemId === $itemId) {
                return true;
            }
        }

        return false;
    }
}