<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CompanyItem
 *
 * @property int $id
 * @property string $company_id
 * @property string $manage_item_id
 * @property string $name
 * @property string|null $cross_section_item_id
 * @property string|null $jan_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem whereCrossSectionItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem whereJanCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem whereManageItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CompanyItem extends Model
{
    use HasFactory;
    
    /** guarded */
    protected $guarded = ['company_id', 'cross_section_item_id', 'created_at', 'updated_at'];
}
