<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CouponDistribution
 *
 * @property string $coupon_id
 * @property int $user_id
 * @property int $distribution_status
 * @property string $distributed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CouponDistribution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponDistribution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponDistribution query()
 * @method static \Illuminate\Database\Eloquent\Builder|CouponDistribution whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponDistribution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponDistribution whereDistributedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponDistribution whereDistributionStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponDistribution whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CouponDistribution whereUserId($value)
 * @mixin \Eloquent
 */
class CouponDistribution extends Model
{
    use HasFactory;
    
    /** guarded */
    protected $guarded = ['coupon_id', 'user_id', 'created_at', 'updated_at'];
}
