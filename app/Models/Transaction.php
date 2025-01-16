<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'user_id',
        'car_id',
        'name',
        'phone',
        'address',
        'long',
        'order_date',
        'total',
        'status'
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }   

    public function Car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
