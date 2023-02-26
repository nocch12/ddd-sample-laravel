<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    /** モデルのIDを自動増分するか */
    public bool $incrementing = false;
    /** 自動増分IDのデータ型 */
    protected string $keyType = 'string';
    /** guarded */
    protected array $guarded = ['created_at', 'updated_at'];
}
