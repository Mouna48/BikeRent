<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'bike_id',
        'start_time',
        'end_time',
        'status',
        'total_cost',
    ];

    // Each booking belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Each booking belongs to one bike
    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}