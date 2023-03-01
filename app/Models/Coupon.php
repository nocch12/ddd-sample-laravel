<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property string $name
 * @property string $company_id
 * @property int $distributionLimit
 * @property string $distribution_begin
 * @property string $distribution_end
 * @property string $use_begin
 * @property string $use_end
 * @property float $point_rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDistributionBegin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDistributionEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDistributionLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon wherePointRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUseBegin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUseEnd($value)
 * @property int $distribution_limit
 * @property string $coupon_type
 * @method static \Database\Factories\CouponFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCouponType($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CompanyItem> $items
 * @property-read int|null $items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Shop> $shops
 * @property-read int|null $shops_count
 * @mixin \Eloquent
 */
class Coupon extends Model
{
    use HasFactory;
    
    /** モデルのIDを自動増分するか */
    public $incrementing = false;
    /** 自動増分IDのデータ型 */
    protected $keyType = 'string';
    /** guarded */
    protected $guarded = ['company_id', 'created_at', 'updated_at'];

    public function shops(): BelongsToMany
    {
        return $this->belongsToMany(Shop::class);
    }

    public function items(): BelongsToMany
    {
        return $this->belongsToMany(CompanyItem::class, 'coupon_item', 'coupon_id', 'company_item_id');
    }
}
