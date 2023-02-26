<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CouponShop
 *
 * @property string $coupon_id
 * @property int $shop_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CouponShop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponShop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponShop query()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponShop whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponShop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponShop whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponShop whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CouponShop extends Model
{
    use HasFactory;
    
    /** guarded */
    protected $guarded = ['coupon_id', 'shop_id', 'created_at', 'updated_at'];
}
