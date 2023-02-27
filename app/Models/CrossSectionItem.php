<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CrossSectionItem
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CrossSectionItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossSectionItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossSectionItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|CrossSectionItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossSectionItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossSectionItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CrossSectionItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CrossSectionItem extends Model
{
    use HasFactory;
    
    /** モデルのIDを自動増分するか */
    public $incrementing = false;
    /** 自動増分IDのデータ型 */
    protected $keyType = 'string';
    /** guarded */
    protected $guarded = ['company_id', 'created_at', 'updated_at'];
}
