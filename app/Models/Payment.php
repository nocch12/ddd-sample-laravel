<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    /** guarded */
    protected array $guarded = ['user_id', 'shop_id', 'created_at', 'updated_at'];
}
