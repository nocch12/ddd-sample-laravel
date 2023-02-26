<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CouponItem
 *
 * @property string $coupon_id
 * @property int $company_item_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CouponItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponItem whereCompanyItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponItem whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CouponItem extends Model
{
    use HasFactory;
    
    /** guarded */
    protected $guarded = ['coupon_id', 'company_item_id', 'created_at', 'updated_at'];
}
