<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PointSetting
 *
 * @property int $id
 * @property string $begin
 * @property string $end
 * @property float $point_rate
 * @method static \Illuminate\Database\Eloquent\Builder|PointSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PointSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PointSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|PointSetting whereBegin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointSetting whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointSetting wherePointRate($value)
 * @mixin \Eloquent
 */
class PointSetting extends Model
{
    use HasFactory;
    
    /** guarded */
    protected $guarded = ['created_at', 'updated_at'];
}
