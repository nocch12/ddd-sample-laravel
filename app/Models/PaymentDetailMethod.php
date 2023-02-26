<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetailMethod extends Model
{
    use HasFactory;
    
    /** guarded */
    protected array $guarded = ['payment_id', 'method_id', 'created_at', 'updated_at'];
}
