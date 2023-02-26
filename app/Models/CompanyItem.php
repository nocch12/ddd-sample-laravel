<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyItem extends Model
{
    use HasFactory;
    
    /** guarded */
    protected array $guarded = ['company_id', 'cross_section_item_id', 'created_at', 'updated_at'];
}
