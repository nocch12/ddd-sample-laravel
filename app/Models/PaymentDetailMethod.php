<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PaymentDetailMethod
 *
 * @property int $id
 * @property int $payment_id
 * @property int $method_id
 * @property int $payment_amount
 * @property float $assigned_point
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod whereAssignedPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod whereMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod wherePaymentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentDetailMethod whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PaymentDetailMethod extends Model
{
    use HasFactory;
    
    /** guarded */
    protected $guarded = ['payment_id', 'method_id', 'created_at', 'updated_at'];
}
