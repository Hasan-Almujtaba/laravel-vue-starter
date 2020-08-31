<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDrive extends Model
{
    protected $fillable = [
        'name',
        'email',
        'no_telp',
        'address',
        'car_id',
        'date'
    ];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
