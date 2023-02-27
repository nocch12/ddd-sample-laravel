<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\PaymentMethod
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @mixin \Eloquent
 */
class PaymentMethod extends Model
{
    use HasFactory;
    
    /** モデルのIDを自動増分するか */
    public $incrementing = false;
    /** guarded */
    protected $guarded = ['created_at', 'updated_at'];

    public function pointSettings(): BelongsToMany
    {
        return $this->belongsToMany(PointSetting::class, 'payment_method_point_setting', 'payment_method_id', 'point_setting_id');
    }
}
