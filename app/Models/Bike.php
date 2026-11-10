<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    protected $fillable = [
        'serial_number' ,
        'model',
        'price_per_hour',
        'status',


    ];
     // A bike can have many bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
