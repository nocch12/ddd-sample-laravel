<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CouponUse
 *
 * @property string $coupon_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CouponUse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponUse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponUse query()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponUse whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponUse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponUse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponUse whereUserId($value)
 * @property int $payment_id
 * @method static \Illuminate\Database\Eloquent\Builder|CouponUse wherePaymentId($value)
 * @mixin \Eloquent
 */
class CouponUse extends Model
{
    use HasFactory;
    
    /** guarded */
    protected $guarded = ['coupon_id', 'user_id', 'created_at', 'updated_at'];
}
