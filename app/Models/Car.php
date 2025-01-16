<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'user_id',
        'license',
        'brand',
        'type',
        'capacity',
        'price',
        'picture'
    ];  

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
