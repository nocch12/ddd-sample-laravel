<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    
    /** guarded */
    protected array $guarded = ['company_id', 'created_at', 'updated_at'];
}
