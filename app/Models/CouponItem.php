<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponItem extends Model
{
    use HasFactory;
    
    /** guarded */
    protected array $guarded = ['coupon_id', 'company_item_id', 'created_at', 'updated_at'];
}
