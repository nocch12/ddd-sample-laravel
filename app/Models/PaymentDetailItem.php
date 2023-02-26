<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PaymentDetailItem
 *
 * @property int $id
 * @property int $payment_id
 * @property int $item_id
 * @property int $unit_price
 * @property int $quantity
 * @property float $assigned_point
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem whereAssignedPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PaymentDetailItem extends Model
{
    use HasFactory;
    
    /** guarded */
    protected $guarded = ['payment_id', 'item_id', 'created_at', 'updated_at'];
}
