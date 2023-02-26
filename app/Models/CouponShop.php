<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponShop extends Model
{
    use HasFactory;
    
    /** guarded */
    protected array $guarded = ['coupon_id', 'shop_id', 'created_at', 'updated_at'];
}
