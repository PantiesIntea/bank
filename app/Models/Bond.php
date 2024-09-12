<?php

// app/Models/Credit.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bond extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'term',
        'down_payment_percent',
        'interest_rate',
        'monthly_payment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

