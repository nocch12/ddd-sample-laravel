<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Payment
 *
 * @property int $id
 * @property int $user_id
 * @property int $shop_id
 * @property string $payed_at
 * @property float $used_point
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePayedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUsedPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUserId($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
    use HasFactory;
    
    /** guarded */
    protected $guarded = ['user_id', 'shop_id', 'created_at', 'updated_at'];
    
    public function paymentDetailItems(): HasMany
    {
        return $this->hasMany(PaymentDetailItem::class, 'payment_id', 'id');
    }

    public function paymentDetailMethods(): HasMany
    {
        return $this->hasMany(PaymentDetailMethod::class, 'payment_id', 'id');
    }
}
