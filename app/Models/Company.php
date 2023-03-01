<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Company
 *
 * @property string $id
 * @property string $name
 * @property string $joined_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CompanyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereJoinedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CompanyItem> $companyItems
 * @property-read int|null $company_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Shop> $shops
 * @property-read int|null $shops_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CompanyItem> $companyItems
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Shop> $shops
 * @mixin \Eloquent
 */
class Company extends Model
{
    use HasFactory;
    
    /** モデルのIDを自動増分するか */
    public $incrementing = false;
    /** 自動増分IDのデータ型 */
    protected $keyType = 'string';
    /** guarded */
    protected $guarded = ['created_at', 'updated_at'];

    public function shops(): HasMany
    {
        return $this->hasMany(Shop::class, 'company_id', 'id');
    }

    public function companyItems(): HasMany
    {
        return $this->hasMany(CompanyItem::class, 'company_id', 'id');
    }
}
