<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'date',
        'time',
        'type',
        'payment',
        'address',
        'furniture_id',
        'user_id',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function furniture()
    {
        return $this->belongsTo(Furniture::class);
    }
}
